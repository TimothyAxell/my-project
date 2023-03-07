<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //redirect login page
    public function LoginForm(){
        return view("login");
    }

    //login validation
    public function CekLogin(Request $request){
        $rules = [
            "email" => [ "filled", "email"],
            "password" => ["filled"]
        ];
        $customMessageRegister = [
            "filled" => "field harus diisi",
            "email" => "email tidak valid"
        ];
        $request->validate($rules, $customMessageRegister);


        //demo account
        //put demo email to cookie if email and password is correct
        //if not, redirect to login page with message
        $email = $request->email;
        $password = $request->password;
        if ($email == "demo@gmail.com" && $password == "demo") {
            Cookie::queue('cookieEmail', json_encode($email));
            return redirect('/home');
        }else{
            return redirect('/')->with('msg', 'Email atau Password belum terdaftar');
        }
        
    }
}

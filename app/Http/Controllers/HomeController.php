<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //redirect to home page
    public function homeForm(){
        return view("home");
    }

    public function itemForm(){
        return view("item");
    }
}

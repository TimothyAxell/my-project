<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//route for landing page and login
Route::get("/", [LoginController::class, "LoginForm"]);
Route::post("/ceklogin", [LoginController::class, "CekLogin"]);

//route for home all content
Route::prefix("/home")->group(function(){ 
    Route::get("/", [HomeController::class, "homeForm"]);
    Route::post("/item", [HomeController::class, "itemForm"]);
});
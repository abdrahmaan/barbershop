<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\ClientController;
use App\Models\Branch;


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


Route::prefix("admin")->middleware('auth')->group(function (){

   
    //Logout For All SignIn 
    Route::get("/logout", [AuthController::class, "LogOutLogic"]);

});


Route::middleware('user')->group(function () {
    
  
    // Login
    Route::get("/login", [AuthController::class, "LoginPage"]);
    Route::redirect("/","/home");

    // Home
    Route::get("/home", [ShopController::class, "index"]);
    Route::redirect("/","/home");

    // Dashboard
    Route::get("/dashboard", [ShopController::class, "dashboard"]);

    //Shop
    Route::get("/dashboard/chair/{sign}", [ShopController::class, "IncrementChair"]);
    Route::get("/dashboard/wait/{sign}", [ShopController::class, "IncrementWait"]);
    Route::get("/dashboard/online/{status}", [ShopController::class, "ToggleOnline"]);





});







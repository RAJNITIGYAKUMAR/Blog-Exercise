<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\BlogController;
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

Route::get('/',[BlogController::class,"home"]);
Route::view("login","login");
Route::post("login",[UserController::class,"loginSubmit"]);

Route::view("register","Register");
Route::post("register",[UserController::class,"Register"]);

Route::view("blog","CreateBlog");
Route::post("blog",[BlogController::class,"BlogSubmit"]);

Route::view("about","about");

Route::get('logout',[UserController::class,"logout"]);

Route::view("profile","profile");
Route::get('profile',[BlogController::class,'profile']);


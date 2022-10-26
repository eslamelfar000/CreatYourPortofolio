<?php

use App\Http\Controllers\dashbord;
use App\Http\Controllers\Protofilio;
use App\Http\Controllers\user;
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

Route::get('login',[user::class,'login'])->name('login');
Route::get('register',[user::class,'register'])->name('register');
Route::post('loginRequest',[user::class,'loginRequest']);
Route::post('storeRegister',[user::class,'storeRegister']);


Route::group(["middleware"=> "auth"], function(){
    Route::get('logout',[user::class,'logout']);
});

Route::get('admin',[dashbord::class,'admin']);
Route::get('home',[dashbord::class,'home']);
Route::get('about',[dashbord::class,'about']);

Route::get('protofilio',[Protofilio::class,'index']);


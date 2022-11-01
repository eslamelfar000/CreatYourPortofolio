<?php

use App\Http\Controllers\actualproto\actualprotoController;
use App\Http\Controllers\dashbord;
use App\Http\Controllers\Protofilio;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\about\aboutController;
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

Route::get('/',[Protofilio::class,'index']);
Route::get('login',[user::class,'login'])->name('login');
Route::get('register',[user::class,'register'])->name('register');
Route::post('loginRequest',[user::class,'loginRequest']);
Route::post('storeRegister',[user::class,'storeRegister']);
// ------------------------------------------------------------
Route::group(["middleware"=> "auth"], function(){
    Route::get('logout',[user::class,'logout']);});
// ------------------------------------------------------------
// views pages on dashbord
Route::get('home',[dashbord::class,'home']);
Route::get('about',[dashbord::class,'about']);
Route::get('resume',[dashbord::class,'resume']);
Route::get('services',[dashbord::class,'services']);
Route::get('proto',[dashbord::class,'proto']);
Route::get('contant',[dashbord::class,'contant']);
// --------------------------------------------------------------

// --------------------------------------------------------------
Route::post('requesthome',[homeController::class,'homeRequest']);
// --------------------------------------------------------------
Route::get('viewProfile',[actualprotoController::class,'responseHome'])->middleware('data');
Route::group(["prefix"=>'home/'],function()
{
    Route::group(['middleware'=>"data"],function(){
        Route::get('edit',[dashbord::class,'editHome']);
        Route::post('update',[homeController::class,'updateHome']);
    });
    // Route::get('delete',[homeController::class,'deleteHome']);
});


Route::post('requestabout',[aboutController::class,'aboutRequest']);

Route::group(["prefix"=>'about/'],function()
{
    Route::group(['middleware'=>"data"],function(){
        Route::get('edit',[dashbord::class,'editAbout']);
        Route::post('update',[homeController::class,'']);
    });
    // Route::get('delete',[homeController::class,'deleteHome']);
});

// Route::get('data',[homeController::class,'data']);


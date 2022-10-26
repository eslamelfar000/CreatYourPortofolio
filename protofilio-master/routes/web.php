<?php

use App\Http\Controllers\Home;
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

// Route::get('/', function () {
//     return view('adminlte');
// });

Route::get('/', function () {
    return view('index');
});

Route::get("/home",[Home::class ,"home" ]);




Route::get('/login', function () {
        return view('login');
    });

Route::get('/register', function () {
        return view('register');
    });
Route::get('/about', function () {
        return view('about');
    });
Route::get('/resume', function () {
        return view('resume');
    });
Route::get('/services', function () {
        return view('services');
    });
Route::get('/portfolio', function () {
        return view('portfolio');
    });
Route::get('/contact', function () {
        return view('contact');
    });
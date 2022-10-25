<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function home()
    {
        return view('adminlte');
    }
    public function fristpage()
    {
        return view('frist-page');
    }
    public function secondpage()
    {
        return view('second-page');
    }
    
}

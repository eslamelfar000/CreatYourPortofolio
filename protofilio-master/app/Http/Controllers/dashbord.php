<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbord extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('dashboard.adminlte');
    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function home()
    {
        return view('dashboard.home');
    }

}

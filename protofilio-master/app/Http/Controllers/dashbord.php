<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbord extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
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

    public function resume()
    {
        return view('dashboard.resume');
    }
    public function services()
    {
        return view('dashboard.services');
    }
    public function proto()
    {
        return view('dashboard.proto');
    }
    public function contant()
    {
        return view('dashboard.contant');
    }

}

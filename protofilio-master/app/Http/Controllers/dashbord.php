<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $id = Auth::id();
        $data = User::find($id)->name;
        return view('dashboard.home',compact('data'));
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

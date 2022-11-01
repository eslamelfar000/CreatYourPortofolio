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

    public function home()
    {
        $id = Auth::id();
        $data = User::find($id)->name;
        return view('dashboard.Home.home',compact('data'));
    }

    public function editHome()
    {
        $id = Auth::id();
        $user = User::find($id);
        $personalInfo = $user->descrptions;
        $medias = $user->media;
        return view('dashboard.Home.updatehome', compact(['personalInfo','medias']));
    }
// ======================================================================
    public function about()
    {
        return view('dashboard.About.about');
    }
    public function editAbout()
    {
        // $id = Auth::id();
        // $user = User::find($id);
        // $personalInfo = $user->descrptions;
        // $medias = $user->media;
        return view('dashboard.About.updateabout');
    }
    public function resume()
    {
        return view('dashboard.Resume.resume');
    }
    public function services()
    {
        return view('dashboard.Services.services');
    }
    public function proto()
    {
        return view('dashboard.Proto.proto');
    }
    public function contant()
    {
        return view('dashboard.Contant.contant');
    }
}

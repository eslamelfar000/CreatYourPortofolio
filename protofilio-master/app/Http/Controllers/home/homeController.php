<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\descrptions;
use App\Models\media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeRequest(Request $request)
    {
        $request->validate(
            [
                "name"=>"min:4|max:30|required",
                "descrption" => "required|min:10 |max:50",
                "facebook" =>"url",
                "Instagram" =>"url",
                "Twitter" =>"url",
                "LinkedIn" =>"url"
            ]);
// -----------------------------------------------
            $name = $request->name;
            $title = $request->descrption;
            $facebook = $request->Facebook;
            $Instagram = $request->Instagram;
            $Twitter = $request->Twitter;
            $linkedin = $request->LinkedIn;

// -----------------------------------------------
            $descrption = new descrptions();
            $descrption->name = $name;
            $descrption->description = $title;
            $descrption->save();
            $url = new media;
            $url->Facebook = $facebook;
            $url->Instagram = $Instagram;
            $url->Twitter = $Twitter;
            $url->LinkedIn = $linkedin;
            $url->save();
            return redirect('about');
    }

    public function responseHome()
    {
        $id = Auth::id();
        $data = User::find($id)->name;
        return view('protofilio.index',compact('data'));
    }
}

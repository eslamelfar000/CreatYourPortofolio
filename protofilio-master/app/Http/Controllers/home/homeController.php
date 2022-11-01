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
    // =========> ask Eng/Mohammad Amr <=========
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
            $descrption->user_id = Auth::id();
            $descrption->save();

            $url = new media;
            $url->Facebook = $facebook;
            $url->Instagram = $Instagram;
            $url->Twitter = $Twitter;
            $url->LinkedIn = $linkedin;
            $url->user_id = Auth::id();
            $url->save();
            return redirect('about');

    }
    
    public function updateHome(Request $request)
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
            $id = Auth::id();
            $user = User::find($id);
            $user->media->update([
                'Facebook' => $request->Facebook,
                'Instagram' => $request->Instagram,
                'Twitter' => $request->Twitter,
                'LinkedIn' => $request->LinkedIn
            ]);
            $user->descrptions->update([
                'name' => $request->name,
                'description' => $request->descrption
            ]);
            return redirect('viewProfile');
    }

    public function deleteHome()
    {

    }
    public function data()
    {
        $id = Auth::id();
        $user = User::find($id);
        if(($user->media == null) AND ($user->descrptions == null))
        {
            return false;
        }
            return true;
    }
}

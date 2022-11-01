<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\aboutskill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function aboutRequest(Request $request)
    {
        $request->validate(
            [
                'birthday'=>'required',
                'website'=>'url',
                'phone'=>'numeric',
                'city'=>'required',
                'degree'=>'string|required|max:10',
                'freelance'=>'required',
                'html'=>'required|min:0|max:3',
                'css'=>'required|min:0|max:3',
                'js'=>'required|min:0|max:3',
                'photoshop'=>'required|min:0|max:3',
                'php'=>'required|min:0|max:3',
                'bootstrap'=>'required|min:0|max:3',
            ]
        );
        $id = Auth::id();
        $name = User::find($id);
        $name = $name->descrptions->description;
        // dd($name);
        $birthday = $request->birthday;
        $website = $request->website;
        // $phone = $request->phone;
        $city = $request->city;
        $degree = $request->degree;
        $freelance = $request->freelance;
        $html = $request->html;
        $css = $request->css;
        $js = $request->js;
        $photoshop = $request->photoshop;
        $php = $request->php;
        $bootstrap = $request->bootstrap;

        $about = new about();
        $about->dob = $birthday;
        $about->website = $website;
        // $about->phone = $phone;
        $about-> city = $city;
        $about-> degree = $degree;
        $about-> freelance= $freelance;
        $about->user_id = $id;
        $about->save();
        $aboutskills = new aboutskill();
        $aboutskills-> html = $html;
        $aboutskills->css = $css;
        $aboutskills->js = $js;
        $aboutskills->photoshop = $photoshop;
        $aboutskills->php = $php;
        $aboutskills->bootstrap = $bootstrap;
        $aboutskills->user_id = $id;
        $aboutskills->save();
        return redirect('about');
    }

    public function updateHome(Request $request)
    {

    }

    public function deleteHome()
    {

    }
}

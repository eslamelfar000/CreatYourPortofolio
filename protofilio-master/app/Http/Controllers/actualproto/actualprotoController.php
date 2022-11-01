<?php

namespace App\Http\Controllers\actualproto;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class actualprotoController extends Controller
{
    public function responseHome()
    {
        $id = Auth::id();
        $datauser = User::find($id);
        $media = $datauser->media;
        $personalInfo = $datauser->descrptions;
        $about = $datauser->about;
        $aboutskills = $datauser->aboutskill;
        // send all data of protofilio in this function ...
        return view('acutalproto.actualptofilio',compact(['media','personalInfo','about','aboutskills']));

    }
}

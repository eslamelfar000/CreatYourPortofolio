<?php

namespace App\Http\Controllers;

use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    // --------------------------
    public function loginRequest(Request $request)
    {
        $request->validate(
            [
                'email' =>'required|email',
                'password' =>'required|min:6'
            ]);
        if(Auth::attempt($request->only(['email','password'])))
        {
            return redirect('admin');
        }
        else
        {
            return redirect('login');
        }
    }
    public function storeRegister(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:3 |max:20',
                'email' =>'required|email|unique:users,email',
                'password' =>'required|min:6'
            ]);
        $model = new UserModel();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = bcrypt($request->password);
        $model->save();
        return redirect('login');

        // DB::table('users')->insert(
        //     [
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "password" => bcrypt($request->password)
        //     ]
        // );
        // return redirect('login');
    }
}

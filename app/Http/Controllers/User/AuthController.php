<?php

namespace App\Http\Controllers\User;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function signin(Request $request){
        $request->validate([
            'name' => 'required|string|min:4|max:14',
            'email' => 'required|string|email|min:3|max:32',
            'password' => 'required|min:6|max:14',
        ]);

        if(! Auth::attempt($request->only('name','email', 'password'))){
            return back()->withInput();
        }
        return redirect()->intended();
    }

    public function signup(Request $request){
        $request->validate([
            'name' => 'required|string|unique:users|min:4|max:14',
            'email' => 'required|string|email|unique:users|min:3|max:32',
            'password' => 'required|confirmed|min:6|max:14',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->intended();
    }

    public function signin_show(){
        return view('signin');
    }

    public function signup_show(){
        return view('signup');
    }
}

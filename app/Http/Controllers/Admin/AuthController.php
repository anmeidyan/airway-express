<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signinForm(){
        return view('auth.signin');
    }

    public function signinPost(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (\Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
            'status' => 1
        ])){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.signin')->with('error','Access denied!');
        }
    }

    public function signout(){
        \Auth::logout();
        return redirect()->route('admin.signin');
    }
}

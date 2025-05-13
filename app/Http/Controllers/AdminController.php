<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        return view('admin.dashboard');
    }

    function authenticate(Request $request){
        $credentials = $request()->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['invalid email or password']);
    }
}

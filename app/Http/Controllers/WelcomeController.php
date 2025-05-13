<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(){
        return view('welcome');
    }

    function aboutUs(){
        return view('about-us');
    }

    function privacyPolicy(){
        return view('privacy-policy');
    }

    function faq(){
        return view('faq');
    }
}

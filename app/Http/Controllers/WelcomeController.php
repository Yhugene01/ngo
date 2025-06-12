<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(){
        $projects = Project::all();
        return view('welcome', compact('projects'));
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

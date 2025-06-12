<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    function contactUs(){
        return view('user.contact-us');
    }

    function partnerWithUs(){
        return view('user.partner-with-us');
    }

    function project(){
        $projects = Project::all();
        return view('user.project', compact('projects') );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{




    function contactUs(){
        return view('user.contact-us');
    }

    

    function donationDetails(){
        return view('user.donation-details');
    }

    function gallery(){
        return view('user.gallery');
    }

    function partnerWithUs(){
        return view('user.partner-with-us');
    }

    function blog(){
        return view('user.blog');
    }

    function testimonial(){
        return view('user.testimonial');
    }

    function blogDetails(){
        return view('user.blog-details');
    }
}

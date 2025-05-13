<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    function outreachRequest(){
        return view('user.outreach-request');
    }

    function individualRequest(){
        return view('user.individual-request');
    }

    function healthSocialRequest(){
        return view('user.health-social-care-request');
    }

    function organisationCommunityRequest(){
        return view('user.organisation-community-request');
    }


    function requestNow(Request $request){
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'postal_address' => 'nullable',
            'phone' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'item' => 'required',
        ]);



        // Create donation
        $appeal = new Appeal();
        $appeal->user_id = Auth::id();
        $appeal->name = $request->name;
        $appeal->address = $request->address;
        $appeal->postal_address = $request->postal_address;
        $appeal->phone = $request->phone;
        $appeal->email = $request->email;
        $appeal->occupation = $request->occupation;
        $appeal->item = $request->item;

        $appeal->save();


        return back()->with('success, Request received succesfully');
    }
}

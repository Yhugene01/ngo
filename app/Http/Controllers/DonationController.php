<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    function donation()
    {
        return view('user.donation');
    }

    function financialGiving()
    {
        return view('user.financial-giving');
    }

    function medicalEquipment()
    {
        return view('user.medical-equipment');
    }

    function donateNow(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'postal_address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'item' => 'required',

        ]);


        // Create donation
        $donation = new Donation();
        $donation->id = Auth::id();
        $donation->name = $request->name;
        $donation->address = $request->address;
        $donation->postal_address = $request->postal_address;
        $donation->phone = $request->phone;
        $donation->email = $request->email;
        $donation->occupation = $request->occupation;
        $donation->amount;
        $donation->item = $request->item;

        $donation->save();


        return back()->with('success, items donated succesfully');
    }



    function volunteer()
    {
        return view('user.volunteer');
    }

    function volunteerOpportunities(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'postal_address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'occupation' => 'required',
        ]);


        // Create Volunteer
        $volunteer = new Volunteer();
        $volunteer->id = Auth::id();
        $volunteer->name = $request->name;
        $volunteer->address = $request->address;
        $volunteer->postal_address = $request->postal_address;
        $volunteer->phone = $request->phone;
        $volunteer->email = $request->email;
        $volunteer->occupation = $request->occupation;
        $volunteer->subject = $request->subject;

        $volunteer->save();




        return back()->with('success, items donated succesfully');
    }
}

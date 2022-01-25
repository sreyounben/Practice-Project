<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        // $Getcountrylist = Country::all();
        // return view('country',compact('Getcountrylist'));
        $countries = Country::all();
        return view('country',compact('countries'));
    }

    public function store(Request $request){

        $countries = new Country;
        $countries->code = $request->input('code');
        $countries->name = $request->input('name');
        $countries->save();

        return redirect()->back()->with('status','Student Added Successfully');
    }
}

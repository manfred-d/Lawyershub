<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Lawyers_Profile;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class LawyersController extends Controller
{
   
    //index page
    public function index(request $request,Lawyers_Profile $lawyer){
        $data = ["attoneys info"];
        // $lawyer_profile = Lawyers_Profile::get($lawyer);
        return view('pages.Lawyer_info',[
            'lawyer' => $lawyer
        ]);
    }
    // view create acc form 
    public function profileForm(request $request){
        return view('Forms.create_profile');
    }

    // store created account
    public function store(Request $request):RedirectResponse{
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'last_name' =>'required|max:255',
            'email' => 'required|email|unique:lawyers_profile',
            'practice_area' => 'required',
            'location' => 'required',
            'phone' => ['required','numeric','min:9','unique:lawyers_profile'],
            'license' => 'required|unique:lawyers_profile',
            'license_year' => 'required|date'
        ]);
        // dd($request->last_name);

        Lawyers_Profile::create([
           'first_name' =>$request->first_name,
           'last_name' => $request->last_name,
            'email' => $request->email,
            'practice_area' => $request->practice_area,
            'location' => $request->location,
            'phone' => $request->phone,
            'license' => $request->license,
            'license_year' => $request->license_year,

        ]);
        
        // Lawyers_Profile::create($FormFields);

        return to_route('home.index')->with('message', "Profile created was a Sucess");
    }

}

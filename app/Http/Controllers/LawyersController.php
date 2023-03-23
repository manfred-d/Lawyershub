<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyersController extends Controller
{
    //index page
    public function index(request $request){
        $data = ["attoneys info"];
        return view('pages.Lawyer_info', $data);
    }
}

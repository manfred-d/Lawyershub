<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register form
    public function index(){
        $data = ['Register'];
        return view('Auth.register', $data);
    }

    // login form
    public function login(request $request){
        $data = ['Login'];
        return view('Auth.login', $data);
    }
}

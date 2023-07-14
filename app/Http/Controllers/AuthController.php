<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

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
    // register user
    public function register(request $request): RedirectResponse{
        $request->validate([
            'fname' => ['required','string','min:5'],
            'lname' => ['required','string'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','confirmed'],
        ]);
        $newUser = User::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        event(new Registered($newUser));
        Auth::login($newUser);

        return redirect(RouteServiceProvider::HOME);

    }
    // login/ user
    public function store(LoginRequest $request){
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
        
    }

    // Logout
    public function destroy(Request $request){
        Auth::guard('web')->logout();

        return redirect('/');
    }
}


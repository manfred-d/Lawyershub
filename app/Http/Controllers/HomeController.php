<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyers_Profile;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(request $request){
        $lawyers = Lawyers_Profile::latest()->paginate(10);
        return view('pages.Home',[
            'lawyers' => $lawyers
        ]);
    }
}

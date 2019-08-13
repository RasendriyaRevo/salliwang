<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('welcome')->with('location','home');
    }
    
    public function contact(){
        return view('contact')->with('location','contact');
    }

    public function about(){
        return view('about')->with('location','about');
    }
}

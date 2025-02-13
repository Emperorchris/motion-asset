<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function services(){
        return view('frontend.services');
    }
    public function contact(){
        return view('frontend.contact');
    }
    // public function index(){
    //     return view('frontend.index');
    // }
    // public function index(){
    //     return view('frontend.index');
    // }
}

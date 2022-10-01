<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function aboutus(){
    return view('about');
    }
    
    public function investments(){
    return view('investments');
    }
    
    public function products(){
    return view('products');
    }
    
    public function contactus(){
    return view('contactus');
    }
    
    public function terms(){
    return view('terms');
    }
    
    public function privacy(){
    return view('privacy');
    }
    
    public function disclaimer(){
    return view('disclaimer');
    }
    
    public function contactusEmail(){
    
    }

    public function submitContactus(Request $request){



    }
}

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
        #Taking all POST requests from the form
        $valid = Validator::make( $request->all(), [
            'name'   => 'required',
            'email'  => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ] );

        if ( $valid->fails() ) {
            return back()->withErrors( $valid )->withInput();
        }
        # END:: VALIDATION
        clientName
        clientEmail
        clientPhone
        clientSubjectTopic
        clientMessage
        mail::

    }
}

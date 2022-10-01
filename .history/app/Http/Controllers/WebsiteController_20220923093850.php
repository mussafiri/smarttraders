<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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

    public function submitContactus(Request $request){
        #Taking all POST requests from the form
        $valid = Validator::make( $request->all(), [
            'name'   => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ] );

        if ( $valid->fails() ) {
            return back()->withErrors( $valid )->withInput();
        }
        # END:: VALIDATION
        
        $data = array();
        $data['subject']       = 'BCM Holdings Withdraw Request';
        $data['send_to']       = Auth::user()->email;
        $data['clientName']    = $request->name;
        $data['clientEmail']   = $request->email;
        $data['clientPhone']   = $request->phone;
        $data['clientSubjectTopic'] = $request->subject;
        $data['clientMessage']      = $request->message;

        Mail::to( $data['send_to'] )->send( new PendingWithdrawNotification( $data ) );

    }
}

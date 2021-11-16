<?php

namespace App\Http\Controllers;
use Request;
use Validator;
use Auth;

use App\User;

use Mail;
use App\Mail\NewUserNotification;
use App\Mail\admin_editClient_email;


use App\Package;
use App\Kyc;
use App\Contract;
use App\Payment;
use App\Deposit;
use App\Wallet;
use App\Transaction;
use App\Currency;
use App\Lib\Common;
use App\Role;

use App\Department;
use App\Mail\contact_us_sendEmail;
use App\Permission;


class contactUsController extends Controller
{
    function contact_Us_emailSend(){
        $valid = Validator::make(Request::all(),[
            'name'     =>'required',
            'subject'  =>'required',
            'text'     =>'required',
            'email'    =>'required'
        ]);
    
        $name     = Request::input('name');
        $email    = Request::input('email');
        $subject  = Request::input('subject');
        $texts    = Request::input('texts');
    
        $data = array();
        $data['name']            = $name;
        $data['source']          = "SmartTrader";
        $data['email']           = $email;
        $data['area']            = "Contact Us";
        $data['subject']         = $subject;
        $data['texts']           = $texts;
    
        Mail::to( '2016kamera@gmail.com' )->send( new Contact_us_sendEmail($data));
    
        return back()->with('success', 'Success! An email has been successfully sent.');
    }
}

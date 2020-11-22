<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use Illuminate\Http\Request;
use Mail;
use DB;

class MailController extends Controller
{
    public function forgetForm(){
        return view('teacher.pages.forgetPass');
    }

    public function forgetPassword(Request $request){
        $email=DB::table('logins')->where('email','=',$request->email)->count();
        if($email){
           $pass=DB::table('logins')->where('email', '=', $request->email)->first();
           
           $details=[
            'title'=> 'Your Password',
            'body'=> $pass->forget_password
        ];

        Mail::to($request->email)->send(new ForgetPassword($details));
        return "Email Sent";
        }else{
            return "Incorrect Email";
        }
        
    }

    public function forgetForm1(){
        return view('student.pages.forgetPass');
    }

    public function forgetPassword1(Request $request){
        $email=DB::table('student_logins')->where('email','=',$request->email)->count();
        if($email){
           $pass=DB::table('student_logins')->where('email', '=', $request->email)->first();
           
           $details=[
            'title'=> 'Your Password',
            'body'=> $pass->forget_password
        ];

        Mail::to($request->email)->send(new ForgetPassword($details));
        return "Email Sent";
        }else{
            return "Incorrect Email";
        }
        
    }

}

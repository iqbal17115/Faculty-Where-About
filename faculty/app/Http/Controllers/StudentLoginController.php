<?php

namespace App\Http\Controllers;

use App\Models\StudentLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class StudentLoginController extends Controller
{
    
    public function index()
    {

        if(Session::get('student_id')){

            return view('student.index');

         }else{

            return view('student.login');

        }
        
    }


    public function login(Request $request){
        // $request->validate([
        //     'email' => 'required|unique',
        //     'password' => 'required|min:8',
        // ]);

        $login=DB::table('student_logins')->where('email',$request->email)->where('password',md5($request->password))->count();
        if($login){

            $student_id=DB::table('student_logins')->where('email','=',$request->email)->select('student_logins.student_id')->first();
            Session::put('student_id', $student_id->student_id);
            return redirect('student/myroutine?initia=0');

        }else{

            return redirect()->route('student');

        }
    }
    
    public function logout(){

        Session::forget('student_id');
        return redirect('/student');

    }
   
}

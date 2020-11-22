<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class LoginController extends Controller
{

    // public function __construct(){
        
    //     $this->middleware('teacherLogin');
    // }

    public function index(){
        
        if(Session::get('initial')){

        return view('teacher.index');

        }else{

        return view('teacher.login');
        
        }
    }

    public function login(Request $request){
        // $request->validate([
        //     'email' => 'required|unique',
        //     'password' => 'required|min:8',
        // ]);

        $login=DB::table('logins')->where('email',$request->email)->where('password',md5($request->password))->count();
        if($login){
            $teacher_id=DB::table('logins')->where('email', '=', $request->email)->first();
            $teacher_id->teacher_id;
            $initial=DB::table('teachers')->where('teacher_id','=',$teacher_id->teacher_id)->first();
            
            Session::put('initial', $initial->initial);
            

            return view('teacher.index');
        }
    }

    public function logout(){

        Session::forget('teacher_id');
        Session::forget('initial');
        return redirect('/teacher');
        
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminLoginController extends Controller
{
    public function loginForm(){
       
        if(Session::get('username')){

            return redirect('/admin/changePassword');
    
            }else{
    
            return view('admin.login');
            
            }
    }

    public function login(Request $request){
        $login=DB::table('admin_logins')->where('username',$request->username)->where('password',md5($request->password))->count();
        if($login){
           
            
            Session::put('username', $request->username);
            return redirect('/admin/changePassword');
    }
}

     public function form(){
         
        return view('admin.pages.changePassword');
     }

     public function changePassword(Request $request){
        
        $validator = Validator::make($request->all(), [
            'old' => 'required|min:5',
            'new' => 'required|min:5',
        ]);
        
       
            $check=DB::table('admin_logins')->where('username', Session::get('username'))->where('password',md5($request->old))->get();
            
            if(count($check)>0){
                $updated = DB::table('admin_logins')
              ->where('username', Session::get('username'))
              ->update(['password' => md5($request->new)]);
              return view('admin.pages.changePassword');
            }else{
                return "NOT OK";
            }
        
     }

     public function forgetPassword(){
        Session::forget('username');

     
    
            return redirect('adminLogin');
            
       
     }
}

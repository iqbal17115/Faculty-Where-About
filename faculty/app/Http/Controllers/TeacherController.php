<?php

namespace App\Http\Controllers;

use App\Imports\TeacherImport;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Excel;
use DB;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.pages.addTeacher');
        
    }

    public function create(Request $request){
       
        Excel::import(new TeacherImport, $request->file);
        $teachers=DB::table('teachers')->select('teachers.*')->leftJoin('logins','teachers.teacher_id','!=','logins.teacher_id')->get();
        foreach($teachers as $teacher){
        $expludeId=explode("-", $teacher->teacher_id);
         DB::table('logins')->insert(
             ['teacher_id'=>$teacher->teacher_id, 'email'=>strtolower($teacher->fName).$expludeId[1].'-'.$expludeId[2].'@diu.edu.bd', 'password'=>md5($teacher->teacher_id), 'forget_password'=>$teacher->teacher_id]
            );
        }
        return redirect('/admin/show/teacher');
    }

    public function show(){

        $teachers=DB::table('teachers')->get();
        return view('admin.pages.showTeacher')->with('teachers',$teachers);

    }

    public function getTeacher($id){
        $teachers=DB::table('teachers')->where('id','=',$id)->first();
        return view('admin.pages.editTeacher')->with('teachers',$teachers);
    }

    public function edit(Request $request){
        DB::table('teachers')->where('id','=',$request->id)->update(
            ['teacher_id'=>$request->sid, 'fname'=>$request->fname, 'lname'=>$request->lname, 'initial'=>$request->initial, 'dept'=>$request->dept]
        );
        return redirect('/admin/show/teacher');
    }

    public function delete($id){
        $log=DB::table('teachers')->where('id',$id)->first();
        DB::table('logins')->where('teacher_id',$log->teacher_id)->delete();
        DB::table('teachers')->where('id',$id)->delete();
        return redirect('/admin/show/teacher');
    }

    public function profile(){
        $inform=DB::table('teachers')->where('initial', '=', Session::get('initial'))->first();
        return view('teacher.pages.profile', compact('inform'));
    }

    public function editProfile(){
        $inform=DB::table('teachers')->where('initial', '=', Session::get('initial'))->first();
        return view('teacher.pages.editProfile', compact('inform'));
    }

    public function editProfile1(Request $request){
        
        DB::table('teachers')->where('id', '=', $request->id)->update(
            ['fName'=>$request->fName, 'lName'=>$request->lName, 'phone'=>$request->phone, 'email'=>$request->email, 'desk'=>$request->desk]
        );
        return redirect('/teacher');
    }
    
    public function form(){
        return view('teacher.pages.changePassword');
    }

    public function changePassword(Request $request){
      $currentPass=md5($request->currentPassword);
      $password=md5($request->newPassword);
      $pass=DB::table('teachers')->where('initial', Session::get('initial'))->first();
      $pass1=DB::table('logins')->where('teacher_id', $pass->teacher_id)->first();
      if($currentPass==$pass1->password){
        DB::table('logins')->where('teacher_id', '=', $pass1->teacher_id)->update(
            ['password'=>$password]
        );
        return redirect('/teacher');
      }else{
        return redirect('/teacher/changePassword');
      }
    }

}
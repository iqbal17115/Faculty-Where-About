<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Excel;
use DB;

class StudentController extends Controller
{

    public function index(){
        return view('admin.pages.addStudent');
    }

    public function create(Request $request){
       
        Excel::import(new StudentImport, $request->file);
        $students=DB::table('students')->select('students.*')->leftJoin('student_logins','students.student_id','!=','student_logins.student_id')->get();
        foreach($students as $student){
        $expludeId=explode("-", $student->student_id);
         DB::table('student_logins')->insert(
             ['student_id'=>$student->student_id, 'email'=>strtolower($student->fName).$expludeId[1].'-'.$expludeId[2].'@diu.edu.bd', 'password'=>md5($student->student_id), 'forget_password'=>$student->student_id]
            );
        }
        return redirect('/admin/show/student');
    }

    public function show(){

        $students=DB::table('students')->get();
        return view('admin.pages.showStudent')->with('students',$students);

    }
    
    public function edit($id){
        $students=DB::table('students')->where('id','=',$id)->first();
        return view('admin.pages.editStudent')->with('students',$students);
    }

    public function edit1(Request $request){
       DB::table('students')->where('id','=',$request->id)->update(
           ['student_id'=>$request->sid, 'fname'=>$request->fname, 'lname'=>$request->lname, 'campus'=>$request->campus, 'dept'=>$request->dept, 'batch'=>$request->batch, 'section'=>$request->section]
       );
       return redirect('/admin/show/student');
    }

    public function delete($id){
        $log=DB::table('students')->where('id',$id)->first();
        DB::table('student_logins')->where('student_id',$log->student_id)->delete();
        DB::table('students')->where('id',$id)->delete();
        return redirect('/admin/show/student');
    }

    public function profile(){
        $inform=DB::table('students')->where('student_id', '=', Session::get('student_id'))->first();
        return view('student.pages.profile', compact('inform'));
    }

    public function editProfile(){
        $inform=DB::table('students')->where('student_id', '=', Session::get('student_id'))->first();
        return view('student.pages.editProfile', compact('inform'));
    }

    public function editProfile1(Request $request){
        DB::table('students')->where('id', '=', $request->id)->update(
            ['fName'=>$request->fName, 'lName'=>$request->lName, 'email'=>$request->email]
        );
        return redirect('/student');
    }

    public function form(){
        return view('student.pages.changePassword');
    }

    public function changePassword(Request $request){
      $currentPass=md5($request->currentPassword);
      $password=md5($request->newPassword);
      $pass=DB::table('student_logins')->where('student_id', Session::get('student_id'))->first();
      if($currentPass==$pass->password){
        DB::table('student_logins')->where('student_id', '=',Session::get('student_id'))->update(
            ['password'=>$password]
        );
        return redirect('/student');
      }else{
        return redirect('/student/changePassword');
      }
    }
}

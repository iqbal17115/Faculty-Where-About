<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use App\Imports\RoutineImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Excel;
use DB;

class RoutineController extends Controller
{
    public function index(){
        return view('teacher.pages.addRoutineFile');
    }

    public function create(Request $request){
        Excel::import(new RoutineImport, $request->file);
        return redirect('/teacher');
    }

    public function showRoutineForm($day){
        $routine=DB::table('routines')->where(strtolower('day'), '=', strtolower($day))->where('initial', '=', Session::get('initial'))->get();
        return view('teacher.pages.showRoutine', compact('day', 'routine'));
    }

    public function routineForm(Request $request){

        $initial=DB::table('routines')->where(strtolower('initial'), '=', strtolower($request->initial))->orderBy('id','asc')->get();
        return view('student.pages.routineForm')->with('initial',$initial);

    }

    public function myroutineForm(Request $request){
        
        $student=DB::table('students')->where('student_id' ,'=' , Session::get('student_id'))->first();
        $routine=DB::table('routines')->where('dept','=',$student->dept)->where('batch','=',$student->batch)->where('section',$student->section)->get();
        return view('student.pages.myroutineForm')->with('routine',$routine);
    }

    public function index1(){
        return view('teacher.pages.addRoutine');
    }

    public function create1(Request $request){
        $routine=DB::table('routines')->insert(
            ['course_code' =>$request->course_code, 'course_title' => $request->course_title, 'dept'=>$request->dept, 'batch'=>$request->batch, 'section'=>$request->section, 'day'=>$request->day, 'start_time'=>date("g:i A", strtotime($request->start_time)), 'end_time'=>date("g:i A", strtotime($request->end_time)), 'building'=>$request->building, 'room_no'=>$request->room_no, 'initial'=>Session::get('initial')]
        );

        if($routine){
            return view('teacher.pages.addRoutine');
        }
    }

    
}

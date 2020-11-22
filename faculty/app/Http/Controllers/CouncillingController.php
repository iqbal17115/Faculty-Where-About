<?php

namespace App\Http\Controllers;

use App\Imports\CouncillingImport;
use App\Models\Councilling;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Excel;
use DB;

class CouncillingController extends Controller
{
    
   public function councillingForm(){
       return view('teacher.pages.addCouncillingFile');
   }

   public function addCouncilling(Request $request){
    Excel::import(new CouncillingImport, $request->file);
    return redirect('/teacher');
   }

   public function show($day){
    $councilling=DB::table('councillings')->where(strtolower('day'), '=', strtolower($day))->where('initial', '=', Session::get('initial'))->get();
    return view('teacher.pages.showCouncilling', compact('day', 'councilling'));
   }
   
   public function councillingForm1(Request $request){

    $councilling=DB::table('councillings')->where(strtolower('initial'), '=', strtolower($request->initial))->orderBy('id','asc')->get();
    $teacher=DB::table('teachers')->where(strtolower('initial'), '=', strtolower($request->initial))->first();
    return view('student.pages.councillingForm', compact('councilling','teacher'));

   }

   public function councillingForm2(){
       return view('teacher.pages.addCouncilling');
   }

   public function addCouncilling2(Request $request){
     
    $councilling=DB::table('councillings')->insert(
        ['initial'=>Session::get('initial'), 'day'=>$request->day, 'start_time'=>date("g:i A", strtotime($request->start_time)), 'end_time'=>date("g:i A", strtotime($request->end_time))]
    );

    if($councilling){
        return view('teacher.pages.addCouncilling');
    }

   }

}

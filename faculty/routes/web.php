<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/adminLogin','\App\Http\Controllers\AdminLoginController@loginForm');
Route::post('/adminLogin','\App\Http\Controllers\AdminLoginController@login');

Route::group(['middleware'=>'adminLogin'], function(){

    /* Start Student */
    Route::get('/admin/create/student','\App\Http\Controllers\StudentController@index');
    Route::post('/admin/create/student','\App\Http\Controllers\StudentController@create');
    Route::get('/admin/show/student','\App\Http\Controllers\StudentController@show');
    Route::get('/admin/edit/student/{id}','\App\Http\Controllers\StudentController@edit');
    Route::post('/admin/edit/student','\App\Http\Controllers\StudentController@edit1');
    Route::get('/admin/delete/student/{id}','\App\Http\Controllers\StudentController@delete');
    /* End Student */
    
    /* Start Teacher */
    Route::get('/admin/create/teacher','\App\Http\Controllers\TeacherController@index');
    Route::post('/admin/create/teacher','\App\Http\Controllers\TeacherController@create');
    Route::get('/admin/show/teacher','\App\Http\Controllers\TeacherController@show');
    Route::get('/admin/edit/teacher/{id}','\App\Http\Controllers\TeacherController@getTeacher');
    Route::post('/admin/edit/teacher','\App\Http\Controllers\TeacherController@edit');
    Route::get('/admin/delete/teacher/{id}','\App\Http\Controllers\TeacherController@delete');


    /* End Teacher */
    
    Route::get('/admin/changePassword/','\App\Http\Controllers\AdminLoginController@form');
    Route::get('/admin/forgetPassword/','\App\Http\Controllers\AdminLoginController@forgetPassword');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

});

Route::get('/teacher','\App\Http\Controllers\LoginController@index')->name('teacher');
Route::group(['prefix'=>'teacher'], function(){

    /* Start Teacher */

    Route::post('/login','\App\Http\Controllers\LoginController@login');

    /* End Teacher */

    /* Start Create Routine */

    Route::get('/create/routine','\App\Http\Controllers\RoutineController@index')->middleware('teacherLogin');
    Route::post('/create/routine','\App\Http\Controllers\RoutineController@create')->middleware('teacherLogin');
    Route::get('/show/routine/{day}','\App\Http\Controllers\RoutineController@showRoutineForm')->middleware('teacherLogin');
    Route::get('/create/routine1','\App\Http\Controllers\RoutineController@index1')->middleware('teacherLogin');
    Route::post('/create/routine1','\App\Http\Controllers\RoutineController@create1')->middleware('teacherLogin');

    /* End Create Routine */

    /* Start Create Councilling */
    Route::get('/create/councilling','\App\Http\Controllers\CouncillingController@councillingForm')->middleware('teacherLogin');
    Route::post('/create/councilling','\App\Http\Controllers\CouncillingController@addCouncilling')->middleware('teacherLogin');
    Route::get('/show/councilling/{day}','\App\Http\Controllers\CouncillingController@show')->middleware('teacherLogin');
    Route::get('/create/councilling1','\App\Http\Controllers\CouncillingController@councillingForm2')->middleware('teacherLogin');
    Route::post('/create/councilling1','\App\Http\Controllers\CouncillingController@addCouncilling2')->middleware('teacherLogin');
    /* End Create Councilling */
    
    Route::get('/logout','\App\Http\Controllers\LoginController@logout')->middleware('teacherLogin');
    Route::get('/forget','\App\Http\Controllers\MailController@forgetForm');
    Route::post('/forget','\App\Http\Controllers\MailController@forgetPassword');


});



Route::get('/student','\App\Http\Controllers\StudentLoginController@index')->name('student');
Route::post('/student/login','\App\Http\Controllers\StudentLoginController@login');

Route::group(['prefix'=>'student'], function(){

    /* Start Student */

    Route::get('/routine','\App\Http\Controllers\RoutineController@routineForm');
    Route::post('/routine','\App\Http\Controllers\RoutineController@routineForm');
    Route::get('/myroutine','\App\Http\Controllers\RoutineController@myroutineForm');
    
    Route::get('/councilling','\App\Http\Controllers\CouncillingController@councillingForm1');
    
  
    /* End Student */

    Route::get('/logout','\App\Http\Controllers\StudentLoginController@logout');
    Route::get('/forget','\App\Http\Controllers\MailController@forgetForm1');
    Route::post('/forget','\App\Http\Controllers\MailController@forgetPassword1');

    Route::get('/profile','\App\Http\Controllers\StudentController@profile');
    Route::get('/editProfile/{id}','\App\Http\Controllers\StudentController@editProfile');
    Route::post('/editProfile','\App\Http\Controllers\StudentController@editProfile1');

    Route::get('/changePassword','\App\Http\Controllers\StudentController@form');
    Route::post('/changePassword','\App\Http\Controllers\StudentController@changePassword');

});

Route::group(['prefix'=>'teacher'], function(){

    Route::get('/profile','\App\Http\Controllers\TeacherController@profile');
    Route::get('/editProfile/{id}','\App\Http\Controllers\TeacherController@editProfile');
    Route::post('/editProfile','\App\Http\Controllers\TeacherController@editProfile1');

    Route::get('/changePassword','\App\Http\Controllers\TeacherController@form');
    Route::post('/changePassword','\App\Http\Controllers\TeacherController@changePassword');

});





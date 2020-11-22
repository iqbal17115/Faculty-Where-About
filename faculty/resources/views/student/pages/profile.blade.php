@extends('student.master')

@section('content')
 <style>
    #profile{
    background-color: springgreen;
    width: 300px;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    margin: auto;
    }
 </style>
  <div class="wrapper">
     <div class="container mt-4">
       
       <div id="profile">
        <h2 class="bg-info text-center">Profile</h2>
        <div class="p-4 text-dark font-weight-bold">

           <div class="form-group">
               <h6 class="bg-light p-1">Student ID</h6>
               <h5 class="bg-light p-1">{{ $inform->student_id }}</h5>
           </div>
           
           <div class="form-group">
               <h6 class="bg-light p-1">Name</h6>
               <h5 class="bg-light p-1">{{ $inform->fName }} {{ $inform->lName }}</h5>
           </div>
           
           <div class="form-group">
               <h6 class="bg-light p-1">Campus</h6>
               <h5 class="bg-light p-1">{{ $inform->campus }}</h5>
           </div>

           <div class="form-group">
               <h6 class="bg-light p-1">Department</h6>
               <h5 class="bg-light p-1">{{ $inform->dept }}</h5>
           </div>

           <div class="form-group">
               @if($inform->email)
               <h6 class="bg-light p-1">Email</h6>
               <h5 class="bg-light p-1">{{ $inform->email }}</h5>
               @endif
           </div>
           <a href="/student/editProfile/{{ $inform->id }}" class="btn btn-outline-danger">Edit</a>
        </div>
       </div>

     </div>
   </div>

@endsection
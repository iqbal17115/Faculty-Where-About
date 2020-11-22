@extends('teacher.master')

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
        <h2 class="bg-info text-center">Edit Profile</h2>
        <div class="p-4 text-dark font-weight-bold">
           
           <form action="/teacher/editProfile" method="post">
           @csrf
           <input type="number" name="id" value=<?php echo $inform->id ?> hidden>
           <div class="form-group">
               
               <label for="fName">First Name</label>
               <input type="text" name="fName" class="form-control" value=<?php echo $inform->fName ?>>
              
           </div>

           <div class="form-group">
               
               <label for="lName">Last Name</label>
               <input type="text" name="lName" class="form-control" value=<?php echo $inform->lName ?>>
              
           </div>
           
           <div class="form-group">
               
               <label for="phone">Phone</label>
               <input type="text" name="phone" class="form-control" value=<?php echo $inform->phone ?>>
              
           </div>

           <div class="form-group">
               
               <label for="email">Email</label>
               <input type="email" name="email" class="form-control" value=<?php echo $inform->email ?>>
              
           </div>

           <div class="form-group">
               
               <label for="email">Desk</label>
               <input type="text" name="desk" class="form-control" value=<?php echo $inform->desk ?>>
              
           </div>

           <button class="btn btn-outline-primary">Edit</button>
           </form>

        </div>
       </div>

     </div>
   </div>

@endsection
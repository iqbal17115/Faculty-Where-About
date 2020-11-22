@extends('student.master')

@section('content')
 <style>
    #profile{
    background-color: muted;
    width: 300px;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    margin: auto;
    border: 1px solid black;
    }
 </style>
  <div class="wrapper">
     <div class="container mt-4">
       
       <div id="profile">
        <h2 class="bg-info text-center py-2">Change Password</h2>
        <div class="p-4 text-dark font-weight-bold">
           
           <form action="/student/changePassword" method="post">
           @csrf
            
             <div class="form-group">
                <input type="password" name="currentPassword" class="form-control" placeholder="Current Password" required>
             </div>

             <div class="form-group">
                <input type="password" name="newPassword" class="form-control" placeholder="New Password" required>
             </div>
             
             <button class="btn btn-primary btn-block">Change Password</button>
           </form>

        </div>
       </div>

     </div>
   </div>

@endsection
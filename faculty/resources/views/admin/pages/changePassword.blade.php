@extends('admin.master')

@section('content')
  
<div class="wrapper">
      <div class="container">

      <div class="row mt-4">
          <div class="col-md-3"></div>
          <div class="col-md-6">
          <div id="adminLogin1" class="p-4" style="background-color: rgb(24, 138, 226);">
           

              
                  <form action="/admin/changePassword" method="post">
                  @csrf
                  <div class="form-group">
                   <label for="old">Old Password</label>
                   <input type="password" name="old" class="form-control" id="old" placeholder="Old Password" required>
                  </div>

                  <div class="form-group">
                   <label for="new">New Password</label>
                   <input type="password" name="new" class="form-control" id="new" placeholder="New Password" required>
                  </div>

                  <button class="btn btn-outline-dark btn-block">Change Password</button>
               
                  </form>
              

                  </div>
                  </div>
          <div class="col-md-3"></div>

          </div>
      </div>
    </div>

@endsection
@extends('teacher.master')

@section('content')
<div class="mt-5 content" style="height: 550px">
  <div class="container">
      <form action="/teacher/create/councilling1" method="post">
      @csrf
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
          <div class="routine p-4">
           <div class="row">
               <div class="col-md-12 bg-info text-center text-light">
                   <h3>Add Councilling</h3>
               </div>
           </div>
           <br>
          
          
           <div class="row">
               
               <div class="col-md-12">
                   <select name="day" class="form-control" id="" required>
                     <option value="">--Select Day--</option>
                     <option value="Saturday">Saturday</option>
                     <option value="Sunday">Sunday</option>
                     <option value="Monday">Monday</option>
                     <option value="Tuesday">Tuesday</option>
                     <option value="Wednesday">Wednesday</option>
                     <option value="Thursday">Thursday</option>
                   </select>
               </div>
           </div>
           
           <br>

           <div class="row">

               <div class="col-md-12">
                   <div class="form-group">
                       <!-- <select name="start_time" id="" class="form-control">
                           <option value="">--Start Time--</option>
                           <option value="08:30 AM">08:30 AM</option>
                           <option value="10:00 AM">10:00 AM</option>
                           <option value="11:30 AM">11:30 AM</option>
                           <option value="01:00 AM">01:00 AM</option>
                           <option value="02:30 AM">02:30 AM</option>
                           <option value="04:00 AM">04:00 AM</option>
                       </select> -->
                       <input type="time" name="start_time" id="" class="form-control">
                   </div>
               </div>
               
           </div>
           
          <div class="row">
            <div class="col-md-12">
           
               <!-- <select name="end_time" id="" class="form-control">
                           <option value="">--End Time--</option>
                           <option value="10:00 AM">10:00 AM</option>
                           <option value="11:30 AM">11:30 AM</option>
                           <option value="01:00 AM">01:00 AM</option>
                           <option value="02:30 AM">02:30 AM</option>
                           <option value="04:00 AM">04:00 AM</option>
                           <option value="04:00 AM">05:30 AM</option>
                </select> -->
                <input type="time" name="end_time" id="" class="form-control">    
               
            </div>
          </div>

           <div class="row mt-2">
           <div class="col-md-3"></div>
               <div class="col-md-6">
                   <button class="btn btn-primary btn-block">Submit</button>
               </div>
               <div class="col-md-3"></div>
           </div>
         </div>
          </div>
          <div class="col-md-3"></div>
      </div>
      </form>
  </div>
</div>
@endsection
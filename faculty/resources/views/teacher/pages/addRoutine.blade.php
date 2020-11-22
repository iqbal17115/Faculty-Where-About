@extends('teacher.master')

@section('content')
<div class="mt-5 content" style="height: 550px">
  <div class="container">
      <form action="/teacher/create/routine1" method="post">
      @csrf
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
          <div class="routine p-4">
           <div class="row">
               <div class="col-md-12 bg-info text-center text-light">
                   <h3>Add Routine</h3>
               </div>
           </div>
           <br>
           <div class="row">
               <div class="col-md-6">
                   <input type="text" class="form-control" name="course_code" placeholder="Course Code" required>
               </div>
               <div class="col-md-6">
                   <input type="text" class="form-control" name="course_title" placeholder="Course Title" required>
               </div>
           </div>

           <br>

           <div class="row">
               <div class="col-md-6">
                <select name="dept" id="" class="form-control">
                    <option value="CSE">CSE</option>
                    <option value="SWE">SWE</option>
                    <option value="EEE">EEE</option>
                    <option value="ETE">ETE</option>
                    <option value="TE">TE</option>
                    <option value="MCT">MCT</option>
                    <option value="CE">CE</option>
                    <option value="PHARMACY">PHARMACY</option>
                    <option value="NFE">NFE</option>
                    <option value="BBA">BBA</option>
                </select>
               </div>
               <div class="col-md-6">
                   <input type="batch" class="form-control" name="batch" placeholder="Batch" required>
               </div>
           </div>
           <br>
           <div class="row">
               <div class="col-md-6">
                   <input type="text" class="form-control" name="section" placeholder="Section">
               </div>
               <div class="col-md-6">
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
               <div class="col-md-6">
                   <div class="form-group">
                       <select name="start_time" id="" class="form-control">
                           <option value="">--Start Time--</option>
                           <option value="08:30 AM">08:30 AM</option>
                           <option value="10:00 AM">10:00 AM</option>
                           <option value="11:30 AM">11:30 AM</option>
                           <option value="01:00 AM">01:00 AM</option>
                           <option value="02:30 AM">02:30 AM</option>
                           <option value="04:00 AM">04:00 AM</option>
                       </select>
                   </div>
               </div>
               <div class="col-md-6">
               <select name="end_time" id="" class="form-control">
                           <option value="">--End Time--</option>
                           <option value="10:00 AM">10:00 AM</option>
                           <option value="11:30 AM">11:30 AM</option>
                           <option value="01:00 AM">01:00 AM</option>
                           <option value="02:30 AM">02:30 AM</option>
                           <option value="04:00 AM">04:00 AM</option>
                           <option value="04:00 AM">05:30 AM</option>
                       </select>
               </div>
           </div>
           
           <div class="row">
               <div class="col-md-6">
                   <input type="text" class="form-control" name="building" placeholder="Building" required>
               </div>
               <div class="col-md-6">
                   <input type="number" class="form-control" name="room_no" placeholder="Room No" required>
               </div>
           </div>
           <br>
           <div class="row">
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
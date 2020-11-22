@extends('teacher.master')

@section('content')
  <div class="wrapper">
   <div class="container">
     <div class="row">

      <div class="col-md-2">
      
      </div>
      
      <div class="col-md-10">
        <div class="my-5 p-3 bg-light shadow">
        <h2 class="bg-success text-center px-2">Press Day For Routine</h2>

        <div class="row pt-4">

         <div class="col-md-2">
         <a href="/teacher/show/routine/saturday" class="btn btn-secondary btn-lg btn-block mt-2">Saturday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/routine/sunday" class="btn btn-secondary btn-lg btn-block mt-2">Sunday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/routine/monday" class="btn btn-secondary btn-lg btn-block mt-2">Monday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/routine/wednesday" class="btn btn-secondary btn-lg btn-block mt-2">Wednesday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/routine/tuesday" class="btn btn-secondary btn-lg btn-block mt-2">Tuesday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/routine/thursday" class="btn btn-secondary btn-lg btn-block mt-2">Thursday</a>
         </div>

        </div>
        
        </div>
      </div>

     </div>

     <div class="row bg-light mb-5">
     
        <div class="col-md-12">
         <h4 class="text-center" style="background: linear-gradient(to right, #74ebd5, #acb6e5);height: 40px;font-weight:bold;">Routine for <?php echo strtoupper($day) ?></h4>
         <div>
           
         <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Day</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Section</th>
      <th scope="col">Building</th>
      <th scope="col">Room No</th>
    </tr>
  </thead>
  <tbody>
      
  @foreach($routine as $routine)
    <tr>
      <th scope="row">1</th>
      <td>{{ $routine->course_code }}</td>
      <td>{{ $routine->course_title }}</td>
      <td>{{ $routine->day }}</td>
      <td>{{ $routine->start_time }}</td>
      <td>{{ $routine->end_time }}</td>
      <td>{{ $routine->section }}</td>
      <td>{{ $routine->building }}</td>
      <td>{{ $routine->room_no }}</td>
      
    </tr>
   @endforeach
  </tbody>
</table>

         </div>
        </div>
     </div>
   </div>
  </div>
@endsection
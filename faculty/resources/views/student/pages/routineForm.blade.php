@extends('student.master')

@section('content')
<style>
  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
}
</style>
  <div class="wrapper">
     <div class="container mt-4">

     <div class="row bg-info mt-5">
     <div class="col-md-12">
       
     <div>
      
       <br>
       

    <div class="row">
     <div class="col-md-4">

     <form action="/student/routine" method="get">

     <div class="input-group mb-3">
       <input type="text" name="initial" class="form-control" placeholder="Teacher Initial" aria-label="Teacher Initial" aria-describedby="button-addon2" required>
      <div class="input-group-append">
       <button class="btn btn-dark" id="button-addon2">Search</button>
      </div>
     </div>
     </form>

     </div>
    </div>

       <br>
       <div style="overflow-x:auto;">
       <table class="table table-hover table-active table-wrapper-scroll-x mx-custom-scrollbar" id="example">
  <thead>
    
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Tite</th>
      <th scope="col">Dept</th>
      <th scope="col">Batch</th>
      <th scope="col">Section</th>
      <th scope="col">Day</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Buiding</th>
      <th scope="col">Room No.</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
  @foreach($initial as $initial)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $initial->course_code }}</td>
      <td>{{ $initial->course_title }}</td>
      <td>{{ $initial->dept }}</td>
      <td>{{ $initial->batch }}</td>
      <td>{{ $initial->section }}</td>
      <td>{{ $initial->day }}</td>
      <td>{{ $initial->start_time }}</td>
      <td>{{ $initial->end_time }}</td>
      <td>{{ $initial->building }}</td>
      <td>{{ $initial->room_no }}</td>
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
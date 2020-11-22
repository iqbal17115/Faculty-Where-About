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

     <div class="row bg-muted mt-5">
     <div class="col-md-12">
       
     <div>
      
       <br>
       

  

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
  @foreach($routine as $routine)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $routine->course_code }}</td>
      <td>{{ $routine->course_title }}</td>
      <td>{{ $routine->dept }}</td>
      <td>{{ $routine->batch }}</td>
      <td>{{ $routine->section }}</td>
      <td>{{ $routine->day }}</td>
      <td>{{ $routine->start_time }}</td>
      <td>{{ $routine->end_time }}</td>
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
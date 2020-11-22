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

     <form action="/student/councilling" method="get">

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
      <th scope="col">Day</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Desk</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
  @foreach($councilling as $councilling)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $councilling->day }}</td>
      <td>{{ $councilling->start_time }}</td>
      <td>{{ $councilling->end_time }}</td>
      <td>{{ $teacher->desk }}</td>
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
@extends('teacher.master')

@section('content')
  <div class="wrapper">
   <div class="container">
     <div class="row">

      <div class="col-md-2">
      
      </div>
      
      <div class="col-md-10">
        <div class="my-5 p-3 bg-light shadow">
        <h2 class="bg-success text-center px-2">Press Day For councilling</h2>
        <div class="row pt-4">
         <div class="col-md-2">
         <a href="/teacher/show/councilling/saturday" class="btn btn-secondary btn-lg btn-block mt-2">Saturday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/councilling/sunday" class="btn btn-secondary btn-lg btn-block mt-2">Sunday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/councilling/monday" class="btn btn-secondary btn-lg btn-block mt-2">Monday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/councilling/wednesday" class="btn btn-secondary btn-lg btn-block mt-2">Wednesday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/councilling/tuesday" class="btn btn-secondary btn-lg btn-block mt-2">Tuesday</a>
         </div>
         <div class="col-md-2">
         <a href="/teacher/show/councilling/thursday" class="btn btn-secondary btn-lg btn-block mt-2">Thursday</a>
         </div>
        </div>
        </div>
      </div>

     </div>

     <div class="row bg-light mb-5">
        <div class="col-md-12">
         <h4 class="text-center" style="background: linear-gradient(to right, #74ebd5, #acb6e5);height: 40px;font-weight:bold;">councilling for <?php echo strtoupper($day) ?></h4>
         <div>
           
         <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
    </tr>
  </thead>
  <tbody>
      
  @foreach($councilling as $councilling)
    <tr>
      <th scope="row">1</th>
      <td>{{ $councilling->day }}</td>
      <td>{{ $councilling->start_time }}</td>
      <td>{{ $councilling->end_time }}</td>
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
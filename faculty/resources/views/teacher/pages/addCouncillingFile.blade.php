@extends('teacher.master')

@section('content')
<div class="mt-5 content" style="height: 550px">
    <div class="container">
    <div class="p-5" id="fileAdd" style=" width: 350px;height: 400px;background-color: beige;">
    <h5 class="bg-dark text-light pl-3 py-2">Councilling Hour</h5>
    <form action="/teacher/create/councilling" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="mt-4">
    <div class="form-group">
    <label for="file">Add Councilling Hour</label>
    <input type="file" name="file" class="form-control" accept=".csv">
  </div>

  <button type="submit" class="btn btn-primary btn-block">Add</button>
    </div>
 
    </form>
     </div>
</div>
</div>
@endsection
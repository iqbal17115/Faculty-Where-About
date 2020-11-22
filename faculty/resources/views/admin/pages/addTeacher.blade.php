@extends('admin.master')

@section('content')
<div class="mt-5 content" style="height: 600px">
    <div class="container">
    <form action="/admin/create/teacher" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset class="border border-dark p-5">
  <legend> Only CSV File allow:</legend>
  <div class="form-group">
    <label for="file">Add Teacher</label>
    <input type="file" name="file" class="form-control" accept=".csv">
  </div>

  <button type="submit" class="btn btn-primary float-right">Submit</button>
  </fieldset>
     </form>
</div>
</div>
@endsection
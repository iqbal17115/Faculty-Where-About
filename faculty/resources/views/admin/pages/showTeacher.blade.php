@extends('admin.master')

@section('content')
<div class="mt-5 content" style="height: 600px">
    <div class="container">
    <table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Teacher Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Initial</th>
      <th scope="col">Detpt</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
  @foreach($teachers as $teacher)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $teacher->teacher_id }}</td>
      <td>{{ $teacher->fName }}</td>
      <td>{{ $teacher->lName }}</td>
      <td>{{ $teacher->initial }}</td>
      <td>{{ $teacher->dept }}</td>
      <td> 

      <a class="btn btn-success" href="/admin/edit/teacher/<?php echo $teacher->id ?>">Edit</a> 
      <a class="btn btn-warning" href="/admin/delete/teacher/<?php echo $teacher->id ?>">Delete</a> 

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
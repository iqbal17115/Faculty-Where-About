@extends('admin.master')

@section('content')
<div class="mt-5 content" style="height: 600px">
    <div class="container">
    <table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Detpt</th>
      <th scope="col">Batch</th>
      <th scope="col">Section</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $student->student_id }}</td>
      <td>{{ $student->fName }}</td>
      <td>{{ $student->lName }}</td>
      <td>{{ $student->dept }}</td>
      <td>{{ $student->batch }}</td>
      <td>{{ $student->section }}</td>
      <td>
       <a class="btn btn-success" href="/admin/edit/student/<?php echo $student->id ?>">Edit</a>
       <a class="btn btn-warning" href="/admin/delete/student/<?php echo $student->id ?>">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
@extends('admin.master')

@section('content')
<div class="mt-5 content" style="height: 600px">
    <div class="container">
    <div class="bg-light p-5">
    <form action="/admin/edit/student" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="row">
   <input type="number" name="id" value="{{ $students->id }}" hidden>
    <div class="col-md-4">
    <div class="form-group">
    <label for="sid">Student ID</label>
    <input type="text"  id="sid" name="sid" value="{{ $students->student_id }}" class="form-control" readonly required>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" value="{{ $students->fName }}" class="form-control" required>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" value="{{ $students->lName }}" class="form-control" required>
    </div>
    </div>

   </div>

   <div class="row">

    <div class="col-md-4">
    <div class="form-group">
    <label for="id">Campus</label>
    <input type="text"  id="campus" name="campus" value="{{ $students->campus }}" class="form-control" required>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="fname">Dept</label>
    <!-- <input type="text" id="dept" name="dept" value="{{ $students->dept }}" class="form-control" required> -->
    <select name="dept" id="" class="form-control">
                    <option value="CSE" {{ $students->dept=='CSE' ? 'selected' : '' }} >CSE</option>
                    <option value="SWE">SWE</option>
                    <option value="EEE" {{ $students->dept=='EEE' ? 'selected' : '' }} >EEE</option>
                    <option value="ETE" {{ $students->dept=='ETE' ? 'selected' : '' }} >ETE</option>
                    <option value="TE" {{ $students->dept=='TE' ? 'selected' : '' }} >TE</option>
                    <option value="MCT" {{ $students->dept=='MCT' ? 'selected' : '' }} >MCT</option>
                    <option value="CE" {{ $students->dept=='CE' ? 'selected' : '' }} >CE</option>
                    <option value="PHARMACY" {{ $students->dept=='PHARMACY' ? 'selected' : '' }} >PHARMACY</option>
                    <option value="NFE" {{ $students->dept=='NFE' ? 'selected' : '' }} >NFE</option>
                    <option value="BBA" {{ $students->dept=='BBA' ? 'selected' : '' }} >BBA</option>
     </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="lname">Batch</label>
    <input type="number" id="batch" name="batch" value={{ $students->batch }} class="form-control" required>
    </div>
    </div>

   </div>
  

   <div class="row">

<div class="col-md-4">
<div class="form-group">
<label for="id">Section</label>
<input type="text"  id="section" name="section" value={{ $students->section }} class="form-control" required>
</div>
</div>

<div class="col-md-4">
<button type="submit" class="btn btn-primary mt-4">Submit</button>
</div>

</div>

 
     </form>
     </div>
</div>
</div>
@endsection
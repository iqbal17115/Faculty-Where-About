@extends('admin.master')

@section('content')
<div class="mt-5 content" style="height: 600px">
    <div class="container">
    <div class="bg-light p-5">
    <form action="/admin/edit/teacher" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="row">
   <input type="number" name="id" value=<?php echo $teachers->id ?> hidden>
    <div class="col-md-4">
    <div class="form-group">
    <label for="sid">Student ID</label>
    <input type="text"  id="sid" name="sid" value=<?php echo $teachers->teacher_id ?> class="form-control" readonly required>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" value=<?php echo $teachers->fName ?> class="form-control" required>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" value=<?php echo $teachers->lName ?> class="form-control" required>
    </div>
    </div>

   </div>

   <div class="row">

    <div class="col-md-4">
    <div class="form-group">
    <label for="id">Initial</label>
    <input type="text"  id="campus" name="initial" value=<?php echo $teachers->initial ?> class="form-control" readonly >
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="fname">Dept</label>
    <!-- <input type="text" id="dept" name="dept" value=<?php echo $teachers->dept ?> class="form-control" required> -->
    <select name="dept" id="" class="form-control">
                    <option value="CSE" {{ $teachers->dept=='CSE' ? 'selected' : '' }} >CSE</option>
                    <option value="SWE">SWE</option>
                    <option value="EEE" {{ $teachers->dept=='EEE' ? 'selected' : '' }} >EEE</option>
                    <option value="ETE" {{ $teachers->dept=='ETE' ? 'selected' : '' }} >ETE</option>
                    <option value="TE" {{ $teachers->dept=='TE' ? 'selected' : '' }} >TE</option>
                    <option value="MCT" {{ $teachers->dept=='MCT' ? 'selected' : '' }} >MCT</option>
                    <option value="CE" {{ $teachers->dept=='CE' ? 'selected' : '' }} >CE</option>
                    <option value="PHARMACY" {{ $teachers->dept=='PHARMACY' ? 'selected' : '' }} >PHARMACY</option>
                    <option value="NFE" {{ $teachers->dept=='NFE' ? 'selected' : '' }} >NFE</option>
                    <option value="BBA" {{ $teachers->dept=='BBA' ? 'selected' : '' }} >BBA</option>
     </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
     <button class="btn btn-primary mt-4 btn-lg">Edit</button>
    </div>
    </div>

    

   </div>
  

  

 
     </form>
     </div>
</div>
</div>
@endsection
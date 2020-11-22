<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand text-light" href="#">DIU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="routine" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Routine
        </a>
        <div class="dropdown-menu" aria-labelledby="routine">
          <a class="dropdown-item" href="/teacher/create/routine">Add as a File</a>
          <a class="dropdown-item" href="/teacher/create/routine1">Add individually</a>
          <a class="dropdown-item" href="/teacher/show/routine/saturday">Show</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="councilling" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Councilling Hours
        </a>
        <div class="dropdown-menu" aria-labelledby="councilling">
          <a class="dropdown-item" href="/teacher/create/councilling">Add as a File</a>
          <a class="dropdown-item" href="/teacher/create/councilling1">Add individually</a>
          <a class="dropdown-item" href="/teacher/show/councilling/saturday">Show</a>
        </div>
      </li>
      
      <li class="dropdown mt-2">

<a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">{{ Session::get('initial') }}
<span class="caret"></span></a>

<ul class="dropdown-menu pl-2">
  <li><a href="/teacher/profile" class="text-dark">Profile</a></li>
  <li><a href="/teacher/changePassword" class="text-dark">Change Password</a></li>
  <li><a href="/teacher/logout" class="text-dark">Logout</a></li>
</ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>

    </ul>
    
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-light" href="#">DIU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="student" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="student">
          <a class="dropdown-item" href="/admin/create/student">Add</a>
          <a class="dropdown-item" href="/admin/show/student">Show</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="teacher" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Teacher
        </a>
        <div class="dropdown-menu" aria-labelledby="teacher">
          <a class="dropdown-item" href="/admin/create/teacher">Add</a>
          <a class="dropdown-item" href="/admin/show/teacher">Show</a>
        </div>
      </li>
      
      <li class="dropdown pt-2">

        <a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">{{ Session::get('username') }}
        <span class="caret"></span></a>

        <ul class="dropdown-menu">
          <li><a href="/admin/changePassword" class="text-dark">Change Password</a></li>
          <li><a href="/admin/forgetPassword" class="text-dark">Logout</a></li>
        </ul>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      </li>

    </ul>
    
  </div>
</nav>
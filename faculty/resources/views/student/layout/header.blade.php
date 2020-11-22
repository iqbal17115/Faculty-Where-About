<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light" style="background: linear-gradient(45deg,#00897B,#0081bf)">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="/student/routine?initia=0" class="nav-item nav-link">Routine</a>
                <a href="/student/myroutine?initia=0" class="nav-item nav-link">My Routine</a>
                <a href="/student/councilling?councilling=0" class="nav-item nav-link">Councilling Hour</a>
            </div>
            <div class="navbar-nav ml-auto">
            <li class="dropdown">

        <a class="dropdown-toggle text-dark" data-toggle="dropdown" href="#">{{ Session::get('student_id') }}
        <span class="caret"></span></a>

        <ul class="dropdown-menu pl-2">
          <li><a href="/student/profile" class="text-dark">Profile</a></li>
          <li><a href="/student/changePassword" class="text-dark">Change Password</a></li>
          <li><a href="/student/logout" class="text-dark">Logout</a></li>
        </ul>
      </li>
            </div>
        </div>
    </nav>
</div>
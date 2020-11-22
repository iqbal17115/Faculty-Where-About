<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="teacherLogin">
    <div class="wrapper">
      <div class="container">
          <div id="login">
           <div class="row p-5">

               <div class="col-md-5">
                   <img id="teacher" src="images/teacher.jpg" alt="teacher">
               </div>
             
               <div class="col-md-7">
                  <form action="/teacher/login" method="post">
                  @csrf
                  <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>

                  <button class="btn btn-primary btn-block">Login</button>
               
                  <a href="/teacher/forget" class="mt-3 float-right">Forgot Password?</a>
                  </form>
               </div>

           </div>
          </div>
      </div>
    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="adminLogin">
    <div class="wrapper">
      <div class="container">
          <div id="adminLogin1" class="p-4">
           

              
                  <form action="/adminLogin" method="post">
                  @csrf
                  <div class="form-group">
                   <label for="username">Username <?php Session::get('username'); ?></label>
                   <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                  </div>

                  <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>

                  <button class="btn btn-outline-dark btn-block">Login</button>
               
                  <a href="/teacher/forget" class="mt-3 float-right">Forgot Password?</a>
                  </form>
              

           
          </div>
      </div>
    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
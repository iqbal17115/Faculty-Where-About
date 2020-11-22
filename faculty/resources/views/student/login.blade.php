<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="studentLogin">
    <div class="wrapper">
      <div class="container">
          <form action="/student/login" method="post">
          @csrf
         <div id="sLogin" class="p-4">
          <div class="form-group">
            <input type="email" name="email" class="btn btn-block bg-light btn-lg rounded-pill" placeholder="Email" required>
          </div>

          <div class="form-group">
            <input type="password" name="password" class="btn btn-block bg-light btn-lg rounded-pill" placeholder="Password" required>
          </div>

        
         <button class="btn btn-primary btn-lg btn-block rounded-pill mt-4">Login</button>
         <br>
         <center> <a href="/student/forget" class="mt-4">Forgot Password?</a> </center>
         </div>
         </form>
      </div>
    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
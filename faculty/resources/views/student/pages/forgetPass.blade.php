<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Forget Password</title>
     <style>
       .forget{
           width: 350px;
           left: 0px;
           right: 0px;
           top: 0px;
           bottom: 0px;
           margin: 100px auto; 
           background-color: white;
           box-shadow: 5px 5px 5px 5px #aaaaaa;
       }
     </style>
</head>
<body>
    <div class="border border-muted forget">
       <h3 class="text-center bg-secondary py-2">Forget Password</h3>
       <div class="p-4">
         <form action="/student/forget" method="POST">
         @csrf
           <div class="form-group">
             <label for="" id="email"> <i class="fa fa-envelope"></i> Email</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
           </div>
           <button class="btn btn-success btn-block">Send Password</button>
         </form>
       </div>
    </div>
</body>
</html>
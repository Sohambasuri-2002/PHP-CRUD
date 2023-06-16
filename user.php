<?php
include 'connect.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crudx` (name,email,mobile,password) values('$name','email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "data inserted succesfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

    
  </body>
</html>
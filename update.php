<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="UPDATE  FROM `crudoperation` where id=$id";
$result=mysqli_query($con,$sql);
//   $row=mysqli_fetch_assoc($result);
//  $name=$_POST['name'];
//      $email=$_POST['email'];
//      $mobile=$_POST['mobile'];
//      $password=$_POST['password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="UPDATE `crudoperation` set id=$id, name='$name', email='$email', mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted successfully";
        header('location:display.php');
    }else{
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

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email">
</div>
<div class="form-group">
    <label>Mobile No.</label>
    <input type="text" class="form-control" placeholder="Enter Mobile No." name="mobile">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password">
</div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
   </div>
  </body>
</html>
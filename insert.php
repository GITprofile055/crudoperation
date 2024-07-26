<?php
include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$query="INSERT INTO crud ( name, email, password) VALUES('$name', '$email', '$password')";
$result = mysqli_query($con, $query);

if($result){
header("location: display.php");
exit();
}
else{
  die(mysqli_error($con));
}
}
else{
  echo "no";
}
?>
<!doctype html>
<html lang="Eng" dir="ltl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h1 class="text-center">Crud operattion</h1>
<div class="container my-5">
<form method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
 
 
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>

</div>
 
  </body>
</html>
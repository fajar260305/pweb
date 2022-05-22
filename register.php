<?php
error_reporting(0);
session_start();
//$name = $_SESSION['name'];

$link = mysqli_connect('localhost', 'root', '', 'pweb');

if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user(name, username, password)
  VALUES('$name', '$username', '$password')";

  mysqli_query($link, $sql);

  header("location: login.php");
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="bootstrap-5.1.3-dist/css/style.css" rel="stylesheet">
  <title>Form Login</title>
</head>

<body>


  <div class="global-container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">Create Account</h1>
      </div>
      <div class="card-text">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="username" aria-describedby="username">

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Username</label>
            <input type="password" name="username" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="add" class="btn btn-primary">REGISTER</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>
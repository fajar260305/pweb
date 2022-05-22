<?php
$link = mysqli_connect('localhost', 'root', '', 'pweb');
//error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("location: index.php");
}

$alert = "Masukan username dan password";
if (isset($_POST['masuk'])) {

    $sql = "SELECT * FROM user where username='{$_POST['username']}' limit 1";

    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_array($result);

    if (!password_verify($_POST['password'], $data['password'])) {
        $alert = "username / password salah";
    } else {
        $_SESSION['name'] = $data['name'];
        header("location: index.php");
    }
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
    <link href="bootstrap-5.1.3-dist/css/add-user.css" rel="stylesheet">
    <title>Form Login</title>
</head>

<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="say">
                <h1 class="card-title text-center">LOGIN</h1>
            </div>
            <div class="card-text">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputtext" aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <p class="mb-0">
                        <a href="register.php" class="text-center">Sign in</a>
                    </p>
                    <div class="d-grid gap-2">
                        <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
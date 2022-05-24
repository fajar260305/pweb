<!DOCTYPE html>
<html lang="en">
<head>
<link>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/profil.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(40, 40, 40);
        }
    </style>
</head>
<body>


<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="mx-3"  href="#">
    <img src="foto/win.png" alt="siap" width="55" height="55">
    </a>
    <a class="navbar-brand" href="#" style="color: white; font-family: 'roboto', sans-serif;">SMK Negeri 1 Cirebon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Absen
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="absen-guru.php">Guru</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="absen-siswa.php">Siswa</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="profil.php" style="color: white;">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="color: white;">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->



<div class="card mb-3" style="max-width: 950px; height:310px;">
    <div class="row g-0">
        <div class="col-12">
            <div class="card-body">
                <img src="foto/jafar.png" alt="" width="80" height="80" style="margin-top: -30px; position: absolute;" class="mb-3">
                <div class="icon" style="margin-left: 28%; display: inline-block; margin-bottom: 50px;">
                  <i class="fa-regular fa-thumbs-up fa-2x" style="margin-right: 120px; cursor: pointer;"></i>
                  <i class="fa-regular fa-thumbs-down fa-2x" style="margin-right: 120px;"></i>
                  <i class="fa-brands fa-instagram fa-2x" style="margin-right: 120px;"></i>
                  <i class="fa-regular fa-comment fa-2x" style="margin-right: px;"></i>
                </div>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="btn btn-primary">
    <div class="row">
        <div class="col-7">
            <h2 class="lead"><b>Ade Nur Cahyadi</b></h2>
            <p class="text-muted text-sm"><b>About: </b> Web Designer / Student </p>
            <ul class="ml-4 mb-0 fa-ul text-muted">
                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: St. Nort Penggung, Cirebon, Jawa Barat.</li>
                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : +6280928172</li>
            </ul>
        </div>
        <div class="col-5 text-center">
            <img src="foto/ade.png" alt="user-avatar" class="img-circle img-fluid">
        </div>
    </div>
</div> -->

<script src="font/js/fontawesome.min.js"></script>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
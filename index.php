<!DOCTYPE html>
<html lang="en">
<head>
<link>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
      .ke {
        width: 0;
        height: 0;
      }
      
    </style>
</head>
<body>



<div class="ke">
      <img class="say" src="foto/say.jpg" alt="" width="1422" height="676">
</div>


<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
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
          <a class="nav-link active profil" href="profil.php" style="color: white;">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" style="color: white;">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->



<!-- start konten 1 -->
<div class="container-fluid ">
  <div class="row align-items-start">
    <div class="col text-center" style="margin-top: 100px;">
      <p class="h1 m-2" style="font-size: 50px; color: white;">Selamat datang di website kami</p>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4 text-center" style="color: white;">
    Smk Negeri 1 Cirebon trus melangkah maju untuk menjalin kerjasama dengan dunia industri, guna memberikan lulusan SMK yang kompeten dan bisa bekerj di perusahaan
    </div>
  </div>
</div>
<!-- start konten 1 -->




<!-- start konten 2 -->
<div class="container-fluid mt-3">
  <div class="row align-items-start">
    <div class="col text-center mt-3 " style="color: white;">
        <span class="border border-primary mx-2"><span class="m-3">TGB</span></span>
        <span class="border border-secondary mx-2"><span class="m-3">TKR</span></span>
        <span class="border border-success mx-2"><span class="m-3">TOI</span></span>
        <span class="border border-danger mx-2"><span class="m-3">TPM</span></span>
        <span class="border border-warning mx-2"><span class="m-3">RPL</span></span>
        <span class="border border-warning mx-2"><span class="m-3">TKJ</span></span>
    </div>
  </div>
</div>
<!-- end konter 2 -->


<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
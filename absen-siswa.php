<!-- absen siswa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .container {
        margin-top: 20vh;
        }

        .card {
            box-shadow: 0 -3px cornflowerblue;
            background-color: #eaeaea;
        }

        .card-title {
            margin-bottom: 5vh;
        }

        .card-body .jam {
            color: #1d59f2;
            background-color: #2d2d2e;
        }

        .card-title {
            font-family: verdana, sans-serif;
            font-weight: 900;
            padding-top: 20px;
            color: cornflowerblue;
        }

        h3 {
            margin-bottom: 5vh;
        }

        .form-check {
            color: #6495ed;
        }

        .form-select {
            background-color: #6495ed;
        }
    </style>
    <script>
    setInterval(() => {
        let date = new Date()
        let clock = document.getElementById('clock')
        clock.innerHTML =
            date.getHours()+ " : " +
            date.getMinutes()+ " : " +
            date.getSeconds()
    }, 1000);
    </script>
</head>

<body>
<div class="container bg-body text-dark">
    <div class="row justify-content-center">
        <div class="col-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <h1 class="card-title text-center">Absen</h1>
                        <div class="jam">
                        <h3 class="text-center" id="clock"></h3>
                        </div>
                        <!-- jurusan -->
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jurusan</option>
                            <option value="1">XI TGB</option>
                            <option value="2">XI TKR</option>
                            <option value="3">XI TOI</option>
                            <option value="4">XI TPM</option>
                            <option value="5">XI TKR</option>
                            <option value="6">XI TKJ</option>
                            <option value="7">XI RPL</option>
                        </select>

                        <!-- absen -->
                        <div class="mt-3 d-flex justify-content-around">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Hadir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Izin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Alfa
                            </label>
                        </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button type="button" class="btn btn-primary">Kirim</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
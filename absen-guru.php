<!-- absen guru -->

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
<<<<<<< HEAD
            box-shadow: 0 -4px cornflowerblue;
            width: 320px;
            height: 400px;
            margin-top: -50px;
            border: 1px solid cornflowerblue;
=======
            box-shadow: 0 -3px cornflowerblue;
            background-color: #eaeaea;
>>>>>>> 41b288a246dad0c99d7be7f4eb2695bdb5240209
        }

        .card-title {
            margin-bottom: 5vh;
            font-family: verdana, sans-serif;
            font-weight: 900;
            padding-top: 20px;
            color: cornflowerblue;
        }

        .card-body .jam {
            color: #1d59f2;
            font-family: 'verdana';
        }

        .card-title {
            font-family: verdana, sans-serif;
            font-weight: 900;
            padding-top: 20px;
            color: cornflowerblue;
            margin-bottom: 80px;
        }

        h5{
            margin-bottom: 5vh;
            font-weight: 100px;
            margin-bottom: 60px;
        }

        .form-check{
            color: #6495ed;
        }
    </style>

    <!-- javascript -->
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
                        <h5 class="text-center" id="clock"></h5>
                        </div>
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
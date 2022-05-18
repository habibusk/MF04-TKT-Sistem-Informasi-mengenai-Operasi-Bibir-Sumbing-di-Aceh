<<<<<<< HEAD
<<<<<<< Updated upstream

<!doctype html>
<html lang="en">
  <head>
=======
<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (buat_akun($_POST) > 0) {
        echo "<script>
                alert('Anda telah terdaftar');
                document.location.href = 'login.php';
        </script>";
    } else {
        echo mysqli_affected_rows($connect);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
>>>>>>> Stashed changes
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<<<<<<< Updated upstream
    <title>MASUK | FullSenyum</title>

    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin">
      <div class="foto">
        <img  src="img/logo.png" alt="" width="72" height="72">
        
      </div>
      <h1 class="judul h3 mb-3 font-weight-normal">Full Senyum.id</h1>
      <label for="inputName" class="label sr-only">Nama</label>
      <input type="name" id="inputName" class="form-control" placeholder="" required autofocus>
      <label for="inputUser" class="label sr-only mt-3">Sebagai</label>
      <input type="user" id="inputUser" class="form-control" placeholder="" required autofocus>
      <label for="inputEmail" class="label sr-only mt-3">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="" required autofocus>
      <label for="inputPassword" class="label sr-only mt-3">Password</label>
      <input type="password" id="inputPassword" class="form-control " placeholder="" required>
      <label for="inputPassword" class="label sr-only mt-3">Konfirmasi Password</label>
      <input type="password" id="inputPassword" class="form-control " placeholder="" required>
      
      
      <button class="tombol mt-4" name="submit" type="submit">Login</button>
      <p class="bawah mt-3 mb-3 text-center">Sudah Memiliki Akun? <a href=""> Login</a></p>
    </form>
  </body>
=======
    <title>Buat Akun | FullSenyum</title>

    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="" method="post">
        <div class="foto">
            <img src="img/logo.png" alt="" width="72" height="72">

        </div>
        <h1 class="judul h3 mb-3 font-weight-normal">Full Senyum.id</h1>

        <label for="nama_user" class="label sr-only">Nama</label>
        <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Tulis nama lengkap anda" required autofocus autocomplete="off">

        <input type="hidden" name="foto_profil" id="inputName" class="form-control" placeholder="" required autofocus value="logo.png">

        <label for="sebagai" class="label sr-only mt-3">Sebagai</label>
        <input type="user" name="sebagai" id="sebagai" class="form-control" placeholder="Relawan / Pasien / Masyarakat" required autofocus autocomplete="off">

        <label for="email" class="label sr-only mt-3">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="contoh@mail.com" required autofocus autocomplete="off">

        <label for="inputPassword" class="label sr-only mt-3">Password</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control " maxlength="8" placeholder="masukkan password max 8 karakter" required>

        <label for="konfirPassword" class="label sr-only mt-3">Konfirmasi Password</label>
        <input type="password" name="konfirPassword" id="konfirPassword" class="form-control " maxlength="8" placeholder="ulangi password anda" required>

        <input type="checkbox" class="mt-2" onclick="myfunction()"> Lihat Password

        <button class="tombol mt-4" name="submit" type="submit">Daftar</button>
        <p class="bawah mt-3 mb-3 text-center">Sudah Memiliki Akun? <a href="login.php"> Login</a></p>
    </form>

    <script>
        function myfunction() {
            var x = document.getElementById("inputPassword");
            var y = document.getElementById("konfirPassword");
            if (x.type === "password" && y.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>
</body>

>>>>>>> Stashed changes
=======
<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubi_detection USK Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <img class="col-lg-6 d-none d-lg-block Logo_ubi-removebg-previw-min.png "src ="img/Logo_ubi.png">
               
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-success btn-user btn-block">
                                    Daftar Akun
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Daftar dengan Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Sudah punya Akun ? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubi_detection USK Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <img class="col-lg-6 d-none d-lg-block Logo_ubi-removebg-previw-min.png "src ="img/Logo_ubi.png">
               
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-success btn-user btn-block">
                                    Daftar Akun
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Daftar dengan Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Sudah punya Akun ? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

>>>>>>> Stashed changes
>>>>>>> 1904111010006
</html>
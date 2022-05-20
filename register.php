<<<<<<< HEAD

<!doctype html>
<html lang="en">
  <head>
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
>>>>>>> main
</html>
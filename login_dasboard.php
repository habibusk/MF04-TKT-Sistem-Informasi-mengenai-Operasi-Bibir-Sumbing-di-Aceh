<?php
session_start();
if (isset($_SESSION["masuk"])) {
    header("Location: dasb_index.php");
    exit;
}

require 'function.php';

//cek tombol login apa sudah ditekan
if (isset($_POST["masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hasil = mysqli_query($connect, "SELECT * FROM db_logdasb WHERE username = '$username'");
    if (mysqli_num_rows($hasil) === 1) {
        $row = mysqli_fetch_assoc($hasil);

        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            $_SESSION["masuk"] = true;
            header("Location: dasb_index.php");
            exit;
        }
    }
    $error = true;
}
?>

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
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" action="" method="post">
        <div class="foto">
            <img src="img/logo.png" alt="" width="72" height="72">

        </div>
        <h1 class="judul h3 mb-3 font-weight-normal">Admin Login</h1>
        <?php if (isset($error)) : ?>
            <h6 style="text-align: center ; color:red; font-style:italic;">Username/Password Salah</h6>
        <?php endif; ?>
        <label for="username" class="label sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" required autofocus>

        <label for="password" class="label sr-only mt-3">Password</label>
        <input type="password" name="password" id="password" maxlength="8" class="form-control" required maxlength="8">

        <div class="lupa checkbox mb-3">
            <div class="liat">
                <input type="checkbox" class="mt-2" onclick="myfunction()"> Lihat Password
            </div>

            <button type="submit" name="masuk" class="tombol">Login</button>
            <p class="bawah mt-5 mb-3 text-center">Belum Memiliki Akun? <a href="register.php"> Daftar</a></p>
    </form>







    </form>
    <script>
        function myfunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>


</html>
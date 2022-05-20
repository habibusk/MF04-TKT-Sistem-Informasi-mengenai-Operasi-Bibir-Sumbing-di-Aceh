<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
//hubungkan function
require 'function.php';

//cek tombol submit apakah sudah ditekan
if (isset($_POST["submit"])) {
    //cek data berhasil di input
    if (tambah_data($_POST) > 0) {
        echo
        "<script>
                alert('Data Kasus Berhasil Di Tambahkan');
                document.location.href = 'kasus.php';
            </script> 
            ";
    } else {
        echo "<script>
        alert('Data Kasus GAGAL Ditambahkan !!!');
    </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kasus.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UPLOAD KASUS | FullSenyum</title>
    <style>
        .tmbllgn {
            text-decoration: none;
            list-style: none;
            border-style: none;
            background-image: linear-gradient(to right, #00B4D8, #80eaff);
            width: 95px;
            height: 40px;
            border-radius: 10px;
            color: #fff;
            font-family: 'poppins', sans-serif;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
            margin-left: 110px;
            margin-top: 50px;
        }

        @media screen and (max-width: 424px) {

            .forminputan {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .menu ul li {
                background-color: #fff;
                justify-content: center;
                align-items: center;
            }

            .menu ul li:hover {
                transition: 0.1s;
                background-color: #ededed;
            }

            .foot {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .alamat {
                margin-top: 10px;
            }

            .menu-foot {
                margin-top: 10px;
            }

            .sosmed {
                margin-top: 10px;
            }

            .input-data {
                margin: 10px;
            }

            .input-data input {
                padding: 20px;

            }
        }
    </style>

</head>

<body>
    <!-- Navbar menu navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light style=" background-color: #fff;">
        <a class="navbar-brand" href="#">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="menu collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="Kasus.php">Kasus</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="donasi.php">Donasi</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <a href="logout.php"><button type="button" id="tombol" class="tmbllgn" type="submit" value="Login">Logout</button></a>
        </div>

    </nav>
    <!-- end navbar menu navigasi -->

    <!-- FORM UPLOAD -->

    <form action="" method="post" enctype="multipart/form-data">
        <div class="forminputan">
            <div class="upfoto">
                <div class="priview">
                    <!-- <img id="output" height="150px" width="150px"> -->
                </div>
                <div class="input-gambar">
                    <!-- <input type="file" accept="image/*" onchange="readURL(this);" name="foto" require> -->
                    <input type="file" class="form-control" accept="image/*" onchange="loadFile(event)" name="foto" require>


                </div>
            </div>
            <div class="input-data">
                <ul>
                    <li>
                        <label for="nama">NAMA :</label><br>
                        <input type="text " class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </li>
                    <li>
                        <label for="umur">UMUR :</label><br>
                        <input type="text " class="form-control" id="umur" name="umur" autocomplete="off" required>
                    </li>
                    <li>
                        <label for="alamat">ALAMAT :</label><br>
                        <input type="text " class="form-control" id="alamat" name="alamat" autocomplete="off" required>
                    </li>
                    <li>
                        <label for="deskripsi">Deskripsi :</label><br>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="52" rows="5" required></textarea>
                    </li>
                </ul>
            </div>
        </div>
        <div class="submit">
            <button type="submit" name="submit">KIRIM</button>
        </div>
    </form>

    <div class="foot">
        <div class="icon-logo">
            <img src="img/logo putih.png" alt="">
        </div>
        <div class="alamat">
            <p>Jl, Kan dulu Kampung apa,<br> Kota Apa. Provinsi apa. Negara Apa</p>
        </div>
        <div class="menu-foot">
            <h3>Main Menu</h3>
            <ul>
                <li>Home</li>
                <li>Kasus</li>
                <li>Donasi</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="sosmed">
            <h3>Our Social Media</h3>
            <ul>
                <li><img src="img/twt.png" alt=""> Twitter</li>
                <li><img src="img/ig.png" alt=""> Instagram</li>
                <li><img src="img/fb.png" alt=""> Facebook</li>
            </ul>
        </div>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#output')
                        .attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>
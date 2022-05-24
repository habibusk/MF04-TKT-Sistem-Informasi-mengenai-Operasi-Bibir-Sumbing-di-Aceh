<?php
session_start();
if (isset($_SESSION["masuk"])) {
    header("location: dasb_index.php");
    exit;
}
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'function.php';

$nama = $_GET["username"];

$data = query("SELECT * FROM db_user WHERE username = '$nama'")[0];

//hubungkan function


//cek tombol submit apakah sudah ditekan
if (isset($_POST["kirim"])) {
    //cek data berhasil di input
    if (tambah_testi($_POST) > 0) {
        echo
        "<script>
                alert('Testimoni Berhasil Di Tambahkan');
                
            </script> 
            ";
    } else {
        echo "<script>
        alert('Testimoni GAGAL Ditambahkan !!!');
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profil | FullSenyum</title>
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
            margin-left: 50px;
            margin-top: 30px;
        }

        .profil {
            margin-left: 10px;
            margin-top: 30px;
            margin-right: 20px;
        }

        .akun {
            display: flex;
        }

        .kiri {
            display: flex;
            flex-direction: column;
            border-radius: 50px;
            width: 400px;
            height: 500px;
            margin: 15px;
            padding-top: 10px;
            justify-content: center;
            align-items: center;
            margin-left: 5%;
            box-shadow: 0px 0px 58px -13px rgba(0, 0, 0, 0.25);
        }

        .kanan {

            width: 700px;
            height: 500px;
            margin: 10px;
            padding-top: 10px;
        }

        .jenis {
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        @media screen and (max-width: 424px) {
            .profil {
                margin-left: 90px;
                margin-top: 0px;
            }

            .akun {
                display: flex;
                flex-direction: column;
            }

            .kiri {
                margin-left: 30px;
                width: 350px;
            }

            .banner {
                justify-content: center;
                align-items: center;
                flex-direction: column-reverse;
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

            .ilus img {
                display: flex;
                width: 300px;
                height: 300px;
                justify-content: center;
                align-items: center;
            }

            .tagline {
                font-size: 20px;
            }

            .testimoni {
                flex-direction: column;
                justify-content: center;
                padding: 30px;
            }

            .testi {
                margin-top: 20px;
            }

            .tagline h4 {
                font-size: 8px;
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

            .dok {
                flex-direction: column;
            }

            .about {
                flex-direction: column;
                padding: 30px;
            }

            .foto {
                width: 30px;
                padding: 20px;
                justify-content: center;
                align-items: center;
            }

            .tentang {
                font-size: 12px;
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

            <div class="profil dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION["username"]; ?>

                </button>
                <div class="dropdown-menu mx-auto" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (!isset($_SESSION["login"])) {
                        echo '<a class="dropdown-item" href="register.php">Daftar</a>';
                    } else {
                        echo '<a class="dropdown-item" href="#">Profil</a>';
                    }
                    ?>

                    <?php
                    if (!isset($_SESSION["login"])) {
                        echo '<a class="dropdown-item" href="login.php">Masuk</a>';
                    } else {
                        echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                    }
                    ?>
                </div>
            </div>


    </nav>
    <!-- end navbar menu navigasi -->
    <div class="akun">
        <div class="kiri">
            <div class="foto-profil">
                <img src="img/gambarkasus/<?= $data["foto_user"]; ?>" alt="" class="rounded-circle" width="81px">
            </div>
            <div class="nama">
                <h3><?= $data["nama_user"]; ?></h3>
            </div>
            <div class="jenis row">
                <div class="col-sm-6" style=" width:300px;">
                    <p><?= $data["jenis_user"]; ?></p>
                </div>
                <div class="col-sm-6" style="width:300px;">
                    <p><?= $data["email"]; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <a href="edit_profil.php?id_user=<?= $data["id_user"]; ?>" class="btn btn-success">Edit</a>
                </div>
                <div class="col-sm-6 mt-2">
                    <a href="testimoni.php" class="btn btn-primary">testimoni</a>
                </div>
            </div>

        </div>
        <div class="kanan">
            <form action="" method="post">
                <h5>Berikan Tertimoni</h5>
                <input type="hidden" name="id_user" value="<?= $data["id_user"]; ?>">
                <textarea class="form-control" name="testimoni" id="" cols="5" rows="10" maxlength="300"></textarea>
                <button type="submit" name="kirim" class="btn btn-success mt-3">Kirim</button>
            </form>
        </div>

    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
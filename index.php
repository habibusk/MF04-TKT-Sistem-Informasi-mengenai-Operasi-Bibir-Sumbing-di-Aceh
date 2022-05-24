<?php
session_start();
if (isset($_SESSION["masuk"])) {
    header("location: dasb_index.php");
}
?>
<?php

error_reporting(0);
require 'function.php';

$nama = $_SESSION["username"];

$data = query("SELECT t.id_testi,
                u.username,
                u.id_user,
                u.foto_user,
                t.komen
                FROM db_testi t, db_user u
                WHERE t.id_user = u.id_user");


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
    <title>HOME | FullSenyum</title>
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

        .lagi {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 424px) {
            .profil {
                margin-left: 20px;
                margin-top: 0px;
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
                    <a class="nav-link" href="#">Home</a>
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
                    <?= $_SESSION["username"];
                    error_reporting(0);
                    ?>

                </button>
                <div class="dropdown-menu mx-auto" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (!isset($_SESSION["login"])) {
                        echo '<a class="dropdown-item" href="register.php">Daftar</a>';
                        error_reporting(0);
                    } else {
                    ?>

                        <a class="dropdown-item" href="profil.php?username=<?= $_SESSION["username"]; ?>">
                            Profil
                        </a>
                    <?php

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

    <!-- start banner website -->
    <div class="banner">
        <div class="tagline">
            <p>Jadikan Senyum Mereka <br> Menjadi lebih indah</p>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores perferendis amet facilis at, rem et,
                consequatur doloremque nisi ullam, sed eaque placeat
                excepturi qui nemo ex! Labore quos officia amet?</h4>
            <div class="join">
                <a href="login.php">
                    <button class="tmbljoint">JOIN SEKARANG</button>
                </a>
            </div>
        </div>
        <div class="ilus">
            <img src="img/smile.png" alt="">
        </div>
    </div>
    <!-- end banner website -->

    <!-- start about us -->
    <div class="about">
        <div class="foto">
            <img src="img/Group 2.png" alt="">
        </div>
        <div class="tentang">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat obcaecati accusamus,
                dolorem qui fuga velit quisquam sunt ex, doloremque ratione,
                labore sed cumque enim aliquam aperiam quis incidunt ab! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat obcaecati accusamus,
                dolorem qui fuga velit quisquam sunt ex, doloremque ratione,
                labore sed cumque enim aliquam aperiam quis incidunt ab! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat obcaecati accusamus,
                dolorem qui fuga velit quisquam sunt ex, doloremque ratione,
                labore sed cumque enim aliquam aperiam quis incidunt ab!
            </p>
            <div class="join">
                <a href="aboutus.php">
                    <button class="tmbljoint">SELENGKAPNYA</button>
                </a>
            </div>
        </div>
    </div>
    <div class="dokumentasi">
        <h2>DOKUMENTASI</h2>
        <div class="dok">
            <img src="img/image 3.png" alt="">
            <img src="img/image 4.png" alt="">
            <img src="img/image 6.png" alt="">
        </div>
        <div class="join">
            <a href="dokumentasi.php"><button class="tmbljoint">LEBIH BANYAK</button></a>
        </div>
    </div>

    <div class="testimoni">
        <?php $i = 0; ?>
        <?php foreach ($data as $data_testi) : ?>
            <div class="testi">

                <div class="profil">
                    <img src="img/<?= $data_testi["foto_user"] ?>" alt="">
                </div>
                <div class="nama">
                    <p><?= $data_testi["username"] ?></p>
                </div>
                <div class="komentar">
                    <p><?= $data_testi["komen"] ?></p>
                </div>

            </div>
            <?php if (++$i === 3) {
                break;
            } ?>
        <?php endforeach; ?>
    </div>
    <div class="lagi">
        <a href="testimoni.php"><button class="tmbljoint">LEBIH BANYAK</button></a>
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
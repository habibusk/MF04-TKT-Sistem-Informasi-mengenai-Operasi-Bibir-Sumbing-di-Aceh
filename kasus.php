<?php
require 'function.php';

$kasus = query("SELECT * FROM db_kasus");

#cek apakah tombol cari ditekan
if (isset($_POST["cari"])) {
    $kasus = cari($_POST["search"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kasus2.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>KASUS | FullSenyum</title>
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

            .banner {
                justify-content: center;
                align-items: center;
                flex-direction: column-reverse;
                margin-bottom: 20px;

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
                    <a class="nav-link" href="#">Kasus</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="donasi.php">Donasi</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <button class="tmbllgn" type="submit">Login</button>
        </div>

    </nav>
    <!-- end navbar menu navigasi -->



    <!-- start banner website -->
    <div class="banner">
        <div class="tagline">
            <p>Temukan Dan Berikan <br> Senyuman Untuk Mereka</p>
            <div class="join">
                <a href="upload.php"><button class="tmbljoint">UPLOAD SEKARANG</button></a>
            </div>
        </div>
        <div class="ilus">
            <img src="img/Smile 3.png" alt="">
        </div>
    </div>
    <!-- end banner website -->

    <!-- Daftar Kasus -->
    <div class="container mt-20">
        <form action="" method="post">

            <input type="text" size="20" name="search" autocomplete="off" autofocus id="keyword">
            <button type="submit" class="btn btn-primary" name="cari" id="tombolcari">search</button>

        </form>
        <div class="row" style="margin: 20px;">
            <?php foreach ($kasus as $data_kasus) : ?>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <img src="img/gambarkasus/<?= $data_kasus["foto_pasien"] ?>" class="img-thumbnail mx-auto" alt="" height="230">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data_kasus["nama_pasien"] ?></h5>
                            <h6 class="card-title"><?= $data_kasus["umur_pasien"] ?></h6>
                            <h6 class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00B4D8" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <?= $data_kasus["alamat_pasien"] ?>

                            </h6>
                            <!-- <p class="card-text" style="overflow: hidden; white-space:nowrap; text-overflow:ellipsis;">
                                <?= $data_kasus["deskripsi_kasus"] ?>
                            </p> -->
                            <a href="detail_pasien.php?id_kasus=<?= $data_kasus["id_kasus"]; ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end Daftar Kasus -->

    <!-- FOOTER -->
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
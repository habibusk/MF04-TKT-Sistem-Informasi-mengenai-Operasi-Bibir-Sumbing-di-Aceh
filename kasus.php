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
</head>

<body>
    <!-- Navbar menu navigasi -->
    <div class="navbar">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="kasus.php">
                    <li>Kasus</li>
                </a>
                <a href="donasi.php">
                    <li>Donasi</li>
                </a>
                <a href="contactus.php">
                    <li>Contact Us</li>
                </a>
            </ul>
        </div>
        <div class="lout">
            <a href=""><img src="img/out.png" alt="" width="202px" height="60px"></a>
        </div>
    </div>
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
    <div class="container">
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
<<<<<<< HEAD
                            <h6 class="card-title"><?= $data_kasus["umur_pasien"] ?></h6>
=======
                            <h5 class="card-title"><?= $data_kasus["umur_pasien"] ?></h5>
>>>>>>> 2004111010070
                            <h6 class="card-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00B4D8" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <?= $data_kasus["alamat_pasien"] ?>

                            </h6>
<<<<<<< HEAD

=======
                            <!-- <p class="card-text" style="overflow: hidden; white-space:nowrap; text-overflow:ellipsis;">
                                <?= $data_kasus["deskripsi_kasus"] ?>
                            </p> -->
>>>>>>> 2004111010070
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
</body>

</html>
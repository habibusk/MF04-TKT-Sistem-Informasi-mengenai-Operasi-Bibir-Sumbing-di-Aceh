<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contac.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CONTAC US | FullSenyum</title>
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
            .konten {
                flex-direction: column;
            }

            .foot {
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
                    <a class="nav-link" href="Kasus.php">Kasus</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="donasi.php">Donasi</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION["login"])) {
                echo '<a href="login.php">
                <button class="tmbllgn" type="submit">Login</button>
                </a>';
            } else {
                echo '<a href="logout.php">
                <button class="tmbllgn" type="submit">Logout</button>
                </a>';
            }
            ?>
        </div>

    </nav>
    <!-- end navbar menu navigasi -->



    <!-- start konten -->
    <div class="konten">
        <div class="kontak">
            <h6>KONTAK KAMI</h6>
            <h3>Ada Yang Bisa Kami Bantu ?</h3>
            <p>Isi Form Di Samping Untuk Mengirimkan Pesan Ke Kami</p>
            <div class="narahubung">
                <ul>
                    <li><img src="img/FACE.png" alt="">&nbsp&nbsp Fullsenyumindonesia</li>
                    <li><img src="img/MAIL.png" alt="">&nbsp fullysmile@mail.com</li>
                    <li><img src="img/INSTA.png" alt="">&nbsp FullSenyum.id</li>
                    <li><img src="img/PHONE.png" alt="">&nbsp 62 8123 456</li>
                </ul>
            </div>
        </div>
        <div class="form">
            <div class="kotak">
                <form action="send.php" method="post" target="_blank">
                    <ul>
                        <li>
                            <label for="nama">Nama </label>
                            <input type="text" class="form-control" size="50" name="nama">
                        </li>
                        <li>
                            <label for="mail">Email</label>
                            <input type="text" class="form-control" size="50" name="mail">
                        </li>
                        <li>
                            <label for="sub">Subject</label>
                            <input type="text" class="form-control" size="50" name="sub">
                        </li>
                        <li>
                            <label for="pesan">Message</label>
                            <textarea name="pesan" class="form-control" id="" cols="30" rows="5"></textarea>
                        </li>
                        <input type="hidden" class="form-control" size="50" name="nowa" value="6281260754155">
                    </ul>
                    <div class="submit">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end konten -->



    <!-- footer -->
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
                <li>Beranda</li>
                <li>Kasus</li>
                <li>Donasi</li>
                <li>Hubungi Kami</li>
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

</html
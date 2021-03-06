<?php
session_start();
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
    <title>TENTANG KAMI | FullSenyum</title>
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

        .ilus img {
            width: 500px;
            padding-right: 70px;
        }



        .desc {
            padding: 50px;
            margin-top: 10px;

        }

        .deskripsi {
            margin: 40px;
            padding: 30px;
        }

        .judulnya {
            font-family: 'poppins', sans-serif;
            font-weight: 400;
            color: #0099B8;
        }

        .paragraf {
            color: #c4c4c4;
            font-size: 18px;
        }

        .parag2 {
            display: flex;
            padding: 20px;
            color: #c4c4c4;
            font-size: 18px;
        }

        @media screen and (max-width: 424px) {

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

    <!-- start banner website -->
    <div class="banner">
        <div class="tagline">
            <p>APA ITU <br><img src="img/logo2.png" alt=""></p>
        </div>
        <div class="ilus">
            <img src="img/charity.png" alt="">
        </div>
    </div>


    <!-- start about us -->
    <div class="deskripsi">
        <div class="judulnya">
            <h4><i>Deskripsi</i></h4>
        </div>
        <div class="paragraf">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis nam ratione unde, facere fugiat tenetur magni iusto illo, hic, temporibus tempora totam. Laboriosam pariatur, consectetur iusto libero dolore neque.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis nam ratione unde, facere fugiat tenetur magni iusto illo, hic, temporibus tempora totam. Laboriosam pariatur, consectetur iusto libero dolore neque.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis nam ratione unde, facere fugiat tenetur magni iusto illo, hic, temporibus tempora totam. Laboriosam pariatur, consectetur iusto libero dolore neque.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis nam ratione unde, facere fugiat tenetur magni iusto illo, hic, temporibus tempora totam. Laboriosam pariatur, consectetur iusto libero dolore neque.
            </p>
        </div>
        <div class="parag2">
            <div class="ft_tentang">
                <img src="img/ilus_tentang.png" alt="" width="300px">
            </div>
            <div class="desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odit qui in nam iste laudantium praesentium tenetur nisi sequi facilis sint deserunt eius voluptates quas quam ex, officiis, ullam assumenda!</p>
            </div>
        </div>
    </div>

    <div class="dokumentasi">
        <h2><i>Dokumentasi<i></h2>
        <div class="dok">
            <img src="img/image 3.png" alt="">
            <img src="img/image 4.png" alt="">
            <img src="img/image 6.png" alt="">
        </div>

    </div>

    <div class="testimoni">


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
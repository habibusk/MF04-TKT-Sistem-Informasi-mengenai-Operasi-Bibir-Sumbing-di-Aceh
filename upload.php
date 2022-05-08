<?php
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

    <!-- FORM UPLOAD -->

    <form action="" method="post" enctype="multipart/form-data">
        <div class="forminputan">
            <div class="upfoto">
                <div class="priview">
                    <!-- <img id="output" height="150px" width="150px"> -->
                </div>
                <div class="input-gambar">
                    <input type="file" accept="image/*" onchange="readURL(this);" name="foto" require>

                </div>
            </div>
            <div class="input-data">
                <ul>
                    <li>
                        <label for="nama">NAMA :</label><br>
                        <input type="text " id="nama" name="nama" required>
                    </li>
                    <li>
                        <label for="umur">UMUR :</label><br>
                        <input type="text " id="umur" name="umur" required>
                    </li>
                    <li>
                        <label for="alamat">ALAMAT :</label><br>
                        <input type="text " id="alamat" name="alamat" required>
                    </li>
                    <li>
                        <label for="deskripsi">Deskripsi :</label><br>
                        <textarea name="deskripsi" id="deskripsi" cols="52" rows="5" required></textarea>
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

</body>


</html>
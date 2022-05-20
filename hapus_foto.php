<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location : index.php");
    exit;
}
session_start();
if (!isset($_SESSION["login"])) {
    header("location : index.php");
    exit;
}
require 'function.php';

$id_foto = $_GET["id_foto"];


#cek masok apa ngga datanya
if (hapus_foto($id_foto) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data Dokumentasi');
        document.location.href = 'dasb_dokumentasi.php';
        </script>";
} else {
    echo "<script>
        alert('Gagal Menghapus Data Dokumentasi');
        document.location.href = 'dasb_dokumentasi.php';
        </script>";
}

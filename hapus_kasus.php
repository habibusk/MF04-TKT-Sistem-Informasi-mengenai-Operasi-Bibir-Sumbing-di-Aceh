<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("location: index.php");
    exit;
}
require 'function.php';

$id_kasus = $_GET["id_kasus"];


#cek masok apa ngga datanya
if (hapus($id_kasus) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data Kasus');
        document.location.href = 'dasb_index.php';
        </script>";
} else {
    echo "<script>
        alert('Gagal Menghapus Data Kasus');
        document.location.href = 'dasb_index.php';
        </script>";
}

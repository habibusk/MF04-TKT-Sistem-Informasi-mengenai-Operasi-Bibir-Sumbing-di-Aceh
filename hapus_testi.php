<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("location: login_dashboard.php");
    exit;
}
require 'function.php';

$id_testi = $_GET["id_testi"];


#cek masok apa ngga datanya
if (hapus_testi($id_testi) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data Testimoni');
        document.location.href = 'dasb_testimoni.php';
        </script>";
} else {
    echo "<script>
        alert('Gagal Menghapus Data Testimoni');
        document.location.href = 'dasb_testimoni.php';
        </script>";
}

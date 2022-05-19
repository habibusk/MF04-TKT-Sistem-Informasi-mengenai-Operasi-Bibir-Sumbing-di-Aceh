<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("location: login_dashboard.php");
    exit;
}
require 'function.php';

$id_user = $_GET["id_user"];


#cek masok apa ngga datanya
if (hapus_user($id_user) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data User');
        document.location.href = 'dasb_kasus.php';
        </script>";
} else {
    echo "<script>
        alert('Gagal Menghapus Data User');
        document.location.href = 'dasb_kasus.php';
        </script>";
}

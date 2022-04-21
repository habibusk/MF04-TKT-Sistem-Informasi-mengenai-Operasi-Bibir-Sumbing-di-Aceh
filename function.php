<?php
// koneksi database
$connect = mysqli_connect("localhost", "root", "", "bibir_sumbing");

function query($query)
{
    global $connect;

    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_data($kasus)
{
    // globalkan koneksi
    global $connect;
    //ambil data
    $nama_psn = htmlspecialchars($kasus["nama"]);
    $umur_psn = htmlspecialchars($kasus["umur"]);
    $almt_psn = htmlspecialchars($kasus["alamat"]);
    $dsc_psn  = htmlspecialchars($kasus["deskripsi"]);
    $ft_psn   = upload();

    if (!$ft_psn) {
        return false;
    }


    //Query Tambah
    $query = "INSERT INTO db_kasus VALUES('', '$nama_psn', '$umur_psn', '$almt_psn', '$dsc_psn', '$ft_psn')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

//function untuk menjalankan upload foto
function upload()
{
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($error === 4) {
        echo "<script>
        alert('Upload Data terlebih dahulu');
    </script>";
        return false;
    }

    $extensi_gambar_valid = ['jpg', 'jpeg', 'png'];
    $extensi_gambar = explode('.', $nama_file);
    $extensi_gambar = strtolower(end($extensi_gambar));

    if (!in_array($extensi_gambar, $extensi_gambar_valid)) {
        echo "<script>
        alert('Pastika File Adalah jpg, jpeg, png');
    </script>";
        return false;
    }

    if ($ukuran_file > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
    </script>";
        return false;
    }
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $extensi_gambar;
    move_uploaded_file($tmpName, 'img/gambarkasus/' . $nama_file_baru);

    return $nama_file;
}

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

// start backend kasus

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

// function hapus kasus
function hapus($id_kasus)
{
    global $connect;

    mysqli_query($connect, "DELETE FROM db_kasus WHERE id_kasus = $id_kasus");

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

    return $nama_file_baru;
}
#untuk ubah data
function ubah_data($kasus)
{
    global $connect;

    //ambil data
    $id_kasus = $kasus["id_kasus"];
    $nama_psn = htmlspecialchars($kasus["nama_pasien"]);
    $umur_psn = htmlspecialchars($kasus["umur_pasien"]);
    $almt_psn = htmlspecialchars($kasus["alamat_pasien"]);
    $dsc_psn  = htmlspecialchars($kasus["deskripsi_kasus"]);
    $ft_lama   = htmlspecialchars($kasus["foto_lama"]);

    #cek apakah ada tomol ubah ter tekan
    if ($_FILES['foto']['error'] === 4) {
        $ft_psn = $ft_lama;
    } else {
        $ft_psn = upload();
    }

    #query ubah 
    $query = "UPDATE db_kasus SET nama_pasien = '$nama_psn', umur_pasien = '$umur_psn', alamat_pasien ='$almt_psn', deskripsi_kasus ='$dsc_psn', foto_pasien ='$ft_psn'
    
                WHERE id_kasus = $id_kasus";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}
#untuk cari
function cari($search)
{
    $query = "SELECT * FROM db_kasus 
            WHERE nama_pasien LIKE '%$search%' 

            
            ";

    return query($query);
}

// END DATA BACKEND KASUS


// START DATA BACKEND DOKUMENTASI
#tambah Foto
function tambah_foto($foto)
{
    // globalkan koneksi
    global $connect;
    //ambil data
    $title_ft = htmlspecialchars($foto["title_foto"]);
    $desc_ft = htmlspecialchars($foto["desc_foto"]);
    $foto = upload();

    if (!$foto) {
        return false;
    }


    //Query Tambah
    $query = "INSERT INTO db_dokumentasi VALUES('', '$foto', '$title_ft', '$desc_ft')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

// function hapus kasus
function hapus_foto($id_foto)
{
    global $connect;

    mysqli_query($connect, "DELETE FROM db_dokumentasi WHERE id_foto = $id_foto");

    return mysqli_affected_rows($connect);
}

#untuk ubah data
function ubah_foto($foto)
{
    global $connect;

    //ambil data
    $id_ft = $foto["id_foto"];
    $title_ft = htmlspecialchars($foto["title_foto"]);
    $desc_ft = htmlspecialchars($foto["desc_foto"]);
    $ft_lama = htmlspecialchars($foto["foto_lama"]);


    #cek apakah ada tomol ubah ter tekan
    if ($_FILES['foto']['error'] === 4) {
        $ft_dok = $ft_lama;
    } else {
        $ft_dok = upload();
    }

    #query ubah 
    $query = "UPDATE db_dokumentasi SET nama_foto = '$ft_dok', title_foto = '$title_ft',  desc_foto ='$desc_ft'
    
                WHERE id_foto = $id_ft";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}


// START DATA BACKEND REGISTRASI
function buat_akun($daftar)
{
    global $connect;

    $username = strtolower(stripslashes($daftar["username"]));
    $foto_profil = $daftar["foto_profil"];
    $sebagai = htmlspecialchars($daftar["sebagai"]);
    $nama_user = htmlspecialchars($daftar["nama_user"]);
    $email = htmlspecialchars($daftar["email"]);
    $pass = mysqli_real_escape_string($connect, $daftar["inputPassword"]);
    $pass2 = mysqli_real_escape_string($connect, $daftar["konfirPassword"]);

    //cek ada duplikat user/atau user yang udah digunakan
    $cek_user = mysqli_query($connect, "SELECT username FROM db_user WHERE username = '$username'");

    if (mysqli_fetch_assoc($cek_user)) {
        echo "<script>
                alert('username tidak tersedia / sudah digunakan')
        </script>";
        return false;
    }

    // cek sama atau tidaknya password dan konfir password
    if ($pass !== $pass2) {
        echo "<script>
                alert('password anda tidak cocok')
        
        </script>";
        return false;
    }
    //enskripsi password yang di masukkan
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // masukkan data regisrtrasi user ke db
    mysqli_query($connect, "INSERT INTO db_user VALUES('','$foto_profil','$username','$nama_user', '$email', '$pass', '$sebagai')");

    return mysqli_affected_rows($connect);
}

function tambah_testi($testi)
{
    // globalkan koneksi
    global $connect;
    //ambil data

    $id_user = $testi["id_user"];
    $testimoni = htmlspecialchars($testi["testimoni"]);

    //Query Tambah
    $query = "INSERT INTO db_testi VALUES('', '$id_user', '$testimoni')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}
#user
function hapus_user($id_user)
{
    global $connect;

    mysqli_query($connect, "DELETE FROM db_user WHERE id_user = $id_user");

    return mysqli_affected_rows($connect);
}

function hapus_testi($id_testi)
{
    global $connect;

    mysqli_query($connect, "DELETE FROM db_testi WHERE id_testi = $id_testi");

    return mysqli_affected_rows($connect);
}

#untuk ubah data
function ubah_user($user)
{
    global $connect;

    //ambil data
    $id_usr = $user["iduser"];
    $ft_user = htmlspecialchars($user["foto_lama"]);
    $nm_user = htmlspecialchars($user["nama"]);
    $sbg = htmlspecialchars($user["jenis"]);
    $mail = htmlspecialchars($user["email"]);


    #cek apakah ada tomol ubah ter tekan
    if ($_FILES['foto']['error'] === 4) {
        $user_foto = $ft_user;
    } else {
        $user_foto = upload();
    }

    #query ubah 
    $query = "UPDATE db_user SET foto_user = '$user_foto', nama_user = '$nm_user',  email ='$mail', jenis_user ='$sbg'
    
                WHERE id_user = $id_usr";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

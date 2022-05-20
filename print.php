<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$kasus = query("SELECT * FROM db_kasus");



$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(event) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<h1>DATA OBAT TERBARU</h1>
<table border="1px solid" cellpadding="10" cellspacing="0">
<tr style="background-color: salmon;">
    <th>NO</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Umur</th>
    <th>Deskripsi</th>

</tr>';

$i = 1;

foreach ($kasus as $data_kasus) {
    $html .= '<tr>
        <td>' . $i++ . '</td>
        <td><img src="img/gambarkasus/' . $data_kasus["foto_pasien"] . '" width="200px"></td>
        <td>' . $data_kasus["nama_pasien"] . '</td>
        <td>' . $data_kasus["alamat_pasien"] . '</td>
        <td>' . $data_kasus["umur_pasien"] . '</td>
        <td>' . $data_kasus["deskripsi_kasus"] . '</td>
    </tr>';
};

$html .= '</table>
</body>
</html>';

$waktu = time();

$mpdf->writeHTML($html);
// $mpdf->Output($name = 'Data Obat ' . $waktu . ' .pdf', $dest = '\Mpdf\Output\Destination::DOWNLOAD');
$mpdf->Output('Data Pasien ' . date("d-m-Y", $waktu) . '.pdf', 'D');

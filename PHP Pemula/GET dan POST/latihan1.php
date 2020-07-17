<?php

// cek apakah tidak ada data di $_GET

// fungsi isset untuk mengecek VARIABEL sudah dibuat atau belum

var_dump($_GET);

if (
    !isset($_GET["judul"]) ||
    !isset($_GET["penulis"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["kategori"]) ||
    !isset($_GET["gambar"])
) {

    // redirect, yaitu memindahkan user dari sebuah halaman ke halaman lain, seperti contoh dibawah :
    header("Location: GET.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>

    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>" alt="">
        </li>
        <li>Judul : <?= $_GET["judul"]; ?></li>
        <li>Penulis : <?= $_GET["penulis"]; ?></li>
        <li>Penerbit : <?= $_GET["penerbit"]; ?></li>
        <li>Kategori : <?= $_GET["kategori"]; ?></li>
    </ul>

    <a href="GET.php">Kembali</a>
</body>

</html>
<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL

$id = $_GET["id"];


// query data buku berdasarkan id nya

$buku = query("SELECT * FROM buku WHERE id = $id")[0];
// function query itu menghasilkan array numerik jadi tambahkan indeks awal nya yaitu 0

// var_dump($buku);


if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href= 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Diubah');
        document.location.href= 'index.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Buku</title>
</head>

<body>

    <h1>Ubah Data Buku</h1>

    <form method="post" action="" enctype="multipart/form-data">

        <!-- Input type hidden digunakan untuk menyembunyikan data input dari user -->
        <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $buku["gambar"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" value="<?= $buku["judul"]; ?>">
            </li>
            <li>
                <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis" value="<?= $buku["penulis"]; ?>">
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" value="<?= $buku["penerbit"]; ?>">
            </li>
            <li>
                <label for="kategori">Kategori :</label>
                <input type="text" name="kategori" id="kategori" value="<?= $buku["kategori"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="img/<?= $buku["gambar"]; ?>" alt="gambar" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>




</body>

</html>
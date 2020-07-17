<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

    // var_dump($_POST); // ini untuk mengecek terhadap file gambar yang dikirim
    // var_dump($_FILES);
    // die;



    // fungsi header didalam JS gunakan seperti dibawah !

    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href= 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambahkan');
        document.location.href= 'index.php';
    </script>";
    }



    // ini untuk mengecek apakah data berhasil di tambahkan atau tidak, jika ada sebuah data yang masuk, update
    // dan delete maka hasil yang dikeluarkan adalah 1 dan jika error maka hasilnya -1
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal!";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>

<body>

    <h1>Tambah Data Buku</h1>

    <!-- enctype digunakan untuk bisa mengelola dua buah data sekaligus, misal untuk string akan dikelola -->
    <!-- oleh $_POST dan untuk file dikelola oleh $_FILES dengan syarat hrs menambahkan atribut enctype -->
    <!-- yang isi atribut nya harus multipart/form-data -->

    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis" required>
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="kategori">Kategori :</label>
                <input type="text" name="kategori" id="kategori" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>




</body>

</html>
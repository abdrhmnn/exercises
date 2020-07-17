<?php

if (isset($_POST["submit"])) {
    if ($_FILES["gambar"]["error"] == 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu !');
            document.location.href= 'coba.php';
        </script>";
        return false;
    }
    echo "<script>
            alert('Data Berhasil Ditambahkan');
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Pemrograman Web Enterprise Pertemuan 9</title>
</head>

<body>
    <h1>Forum Pemrograman Web Enterprise</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul">Masukan Nama Judul :</label>
                <input type="text" name="judul" id="judul">
            </li>
            <li>
                <label for="penulis">Masukan Nama Penulis :</label>
                <input type="text" name="penulis" id="penulis">
            </li>
            <li>
                <label for="gambar">Masukan Gambar Sampul :</label>
                <input type="file" name="gambar" id="gambar2">
            </li>
            <li>
                <button type="submit" name="submit">Masukan Data !</button>
            </li>
        </ul>
    </form>

</body>

</html>
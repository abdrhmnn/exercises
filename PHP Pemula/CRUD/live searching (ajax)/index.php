<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php'; // ini menghubungkan antara file php

$buku = query("SELECT * FROM buku");



// tombol cari ditekan
if (isset($_POST["cari"])) {
    $buku = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">logout</a>

    <h1>Daftar Buku</h1>

    <a href="tambah.php">Tambah Data Buku</a>
    <br><br>

    <form method="post" action="">

        <!-- Atribut autocomplete berfungsi untuk menghapus seluruh HISTORY didalam keyword pencarian -->
        <input type="text" name="keyword" size="40" placeholder="Masukan Keyword Pencarian" autofocus autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="cari">Cari</button>

    </form>
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Kategori</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($buku  as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" alt="buku" width="50"></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["penulis"]; ?></td>
                    <td><?= $row["penerbit"]; ?></td>
                    <td><?= $row["kategori"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>

        </table>
    </div>




    <script src="js/script.js"></script>
</body>

</html>
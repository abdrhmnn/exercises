<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php'; // ini menghubungkan antara file php


// konfigurasi pagination
// tentukan berapa data yang ada didalam halaman
$jumlahDataPerHalaman = 2;

// menentukan total dari jumlah halaman, cara hitungnya total data / data per halaman
// query ini mengembalikan array assosiative maka kalo mau menghitung ada berapa data didalam array assosiative
// gunakan fungsi count()
$jumlahData = count(query("SELECT * FROM buku"));
// var_dump($jumlahData);



// mencari tahu jumlah halaman nya berapa dari total data
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// fungsi round digunakan untuk membulatkan bilangan pecahan ke desimal terdekatnya
// fungsi floor digunakan untuk membulatkan bilangan pecahan ke desimal ke bawah
// fungsi ceil digunakan untuk membulatkan bilangan pecahan ke desimal ke atas
// var_dump($jumlahHalaman);



// mengetahui halaman yang sedang aktif
$halamanAktif = (isset($_GET["page"]) ? $_GET["page"] : $halamanAktif = 1);

// if (isset($_GET["page"])) {
//     $halamanAktif = $_GET["page"];
// } else {
//     $halamanAktif = 1;
// }

// var_dump($halamanAktif);


// menentukan data awal setiap halaman
$dataAwal = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
// jadi jika jumlah data per halaman adalah 3 terus dikalikan dengan halaman aktif, misalnya = 2
// maka 3 * 2 = 6 terus dibagi jumlah data per halaman yaitu 3
// sehingga data awal yang muncul ialah indeks ke 3 didalam halaman ke 2





// cara dengan menggunakan mysqli_query, mengembalikan nilai object
// $result = mysqli_query($conn, "SELECT * FROM buku");
// $totalBuku = mysqli_num_rows($result);
// var_dump($totalBuku);





$buku = query("SELECT * FROM buku LIMIT $dataAwal, $jumlahDataPerHalaman");
// limit digunakan untuk membatasi data yang tampil, harus menambahkan 2 nilai setelah :
// 1. data nya mau di mulai dari data ke berapa (berdasarkan indeks data)
// 2. mau berapa data yang di tampilkan


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
        <input type="text" name="keyword" size="40" placeholder="Masukan Keyword Pencarian" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>
    <br>


    <!-- Navigasi Pagination nya -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>



    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>


    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <br>

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




</body>

</html>
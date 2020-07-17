<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// urutan parameter mysqli nya :
// 1. nama host dari database nya
// 2. username dari mysql nya
// 3. password dari mysql nya
// 4. nama database nya



// ambil data dari tabel buku (query data)
$result = mysqli_query($conn, "SELECT * FROM buku");
// parameter nya ada 2 yaitu :
// 1. sebuah koneksi ke database nya
// 2. query nya mau apa (gunakan sintaks SQL)

// NOTICE : jika kita menggunakan query data dengan mysqli_query maka TIDAK ada pesan BERHASIL atau GAGAL dari
// query yang dilakukan, untuk menyelesaikan kasus tersebut maka buat kedalam kondisi yaitu :
if ($result == false) {
    echo mysqli_error($conn);
}



// ambil data (fetch) buku dari object result, terdapat 4 cara :
// 1. mysqli_fetch_row(), mengembalikan nilai yaitu berupa array numerik
// 2. mysqli_fetch_assoc(), mengembalikan nilai yaitu berupa array assosiative
// 3. mysqli_fetch_array(), mengembalikan nilai yaitu berupa array numerik dan assosiative
// 4. mysqli_fetch_object(), mengembalikan nilai yaitu berupa object


// untuk menampilkan SELURUH data didalam database, gunakan while seperti cara dibawah :
// while ($buku = mysqli_fetch_assoc($result)) {
//     var_dump($buku);
// }






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Buku</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Sampul</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="#">ubah</a> ||
                    <a href="#">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="buku" width="50"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["penulis"]; ?></td>
                <td><?= $row["penerbit"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>




</body>

</html>
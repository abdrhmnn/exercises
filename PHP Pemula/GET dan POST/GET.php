<?php

// 1. $_GET

// cara menambahkan isi dari variabel superglobals $_GET di dalam code kita
// $_GET["nama"] = "Abdu";


// cara mengirimkan data menggunakan metode request get yaitu menggunakan URL, contohnya :
// http://localhost/GET%20dan%20POST/Variable%20Superglobals.php?nama=abdu%20rahman&nim=123


// tambahkan tanda tanya (?) diakhir url trs masukan isi yang ingin dikirimkan dengan memasukkan antara

// key dan value, jika ingin mengirim data lebih dari satu gunakan pemisah nya yaitu tanda dan (&)

// data yang dikirim dengan metode request GET ini akan ditangkap oleh variable superglobals $_GET


// var_dump($_GET);

$buku = [
    // "array" =>
    [
        "judul" => "Kekasih Impian",
        "penulis" => "Wardah Maulina",
        "penerbit" => "Falcon Publishing",
        "kategori" => "Romance",
        "gambar" => "buku1.jpg"
    ],
    // "array2" =>
    [
        "judul" => "IKIGAI",
        "penulis" => "Hector Garcia & Francesc Miralles",
        "penerbit" => "Turos Pustaka",
        "kategori" => "Pengembangan Diri",
        // "tugas" => [100, 80, 70],
        "gambar" => "buku2.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan variabel scope</title>
</head>

<body>

    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($buku as $b) : ?>
            <li>
                <a href="latihan1.php?gambar=<?= $b["gambar"]; ?>&judul=<?= $b["judul"]; ?>&penulis=<?= $b["penulis"]; ?>&penerbit=<?= $b["penerbit"]; ?>&kategori=<?= $b["kategori"]; ?>"><?= $b["judul"]; ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>
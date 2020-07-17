<?php

// Array Assosiative
// key nya adalah String adalah yang kita buat sendiri.
// nama adalah indeks yang kita buat sendiri, caranya asosiasikan nama indeksnya seperti contoh dibawah :


// contoh penggabungan array numerik dan assosiative

$mahasiswa = [
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
        "gambar" => "buku2.jpg",
        "test" => [
            [1, 2, 3]
        ]
    ]
];

var_dump($mahasiswa);
echo "<br>";
var_dump($mahasiswa[1]["test"][0][0]);
// Untuk menampilkan array Assosiative
// echo $mahasiswa[1]["tugas"][1];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="gambar">
            </li>
            <li>Judul : <?= $mhs["judul"]; ?></li>
            <li>Penulis : <?= $mhs["penulis"]; ?></li>
            <li>Penerbit : <?= $mhs["penerbit"]; ?></li>
            <li>Kategori : <?= $mhs["kategori"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
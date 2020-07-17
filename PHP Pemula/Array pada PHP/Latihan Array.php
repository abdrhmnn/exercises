<?php


$mahasiswa = [
    ["Abdu", "4192018301", "Sistem Informasi", "abdu@gmail.com"],
    ["Rahman", "4192018222", "Akuntansi", "rahman@gmail.com"]
];

var_dump($mahasiswa);

// Array mahasiswa disebut dengan Array NUMERIK, yaitu array yang INDEX nya ANGKA

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
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
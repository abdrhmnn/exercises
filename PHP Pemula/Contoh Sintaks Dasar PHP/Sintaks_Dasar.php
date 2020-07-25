<?php

// KOMENTAR PADA PHP
// Untuk membuat komentar pada php gunakan  ' // '
// Untuk membuat komentar lebih dari satu bari  ' /* */ '


// Standart Output pada PHP, contoh echo, print, print_r dan var_dump
// var_dump akan memberikan informasi tipe data dan ukuran (length) nya berapa
// var_dump juga berfungsi untuk mencetak sebuah variabel, array dan objek


echo "Hello World";
var_dump("Hello World");


// Penulisan sintaks PHP
// Menulis PHP didalam HTML atau HTML didalam PHP

$lanjut = 'asdadsa';




// Variabel dan Tipe Data pada PHP
$nama = "Abdu"; // variabel tidak boleh didahului oleh angka tetapi boleh mengandung angka

echo "Halo, $nama"; // kalo menggunakan kutip dua itu menjalankan INTERPOLASI sedangkan kutip satu TIDAK MENJALAN
// KAN INTERPOLASINYA

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>

    <!-- Contoh PHP didalam HTML -->
    <h1>Halo, selamat datang <?= $lanjut; ?></h1>


    <!-- Contoh HTML didalam PHP -->
    <?php echo "<h2>Hello World!</h2>" ?>
</body>

</html>

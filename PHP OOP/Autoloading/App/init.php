<?php


// file ini untuk menginisialisasi semua class nya


// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';



// melakukan hal yang sama tetapi menggunakan fungsi yang khusus untuk melakukan autoloading semua class
// spl_autoload_register();
// fungsi ini digunakan untuk mengakses semua file dengan ekstensi .php yang ada didalam folder produk
// cara nya seperti dibawah, jadi kita gaperlu lagi menginisialisasi setiap class nya kyk cara sebelumnya
// jika ada class baru yang ditambahkan kedalam folder produk maka akan langsung otomatis kepanggil dengan 
// menggunakan cara ini
spl_autoload_register(function ($class) {
    require_once 'Produk/' . $class . '.php';
});

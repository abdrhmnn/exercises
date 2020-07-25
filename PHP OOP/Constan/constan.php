<?php

// Constan atau Constanta adalah sebuah identifier untuk menyimpan nilai dan nilai nya tidak dapat berubah
// ada 2 cara untuk membuat constan :
// 1. define()
// 2. const


// parameter pertama yaitu nama dari constanta nya dan paramter kedua yaitu value dari constan nya
// biasakan jika memberikan nama pada constanta selalu gunakan huruf kapital semua
// untuk membedakan antara variabel constanta dengan variabel biasa
define('NAMA', 'Abdu');

// ini untuk memanggil constanta nya
echo NAMA;


echo "<br>";


// cara kedua
const UMUR = 20;
echo UMUR;

echo "<br>";



// perbedaan dari kedua cara tersebut adalah, kalo define itu tidak bisa dimasukkan kedalam class antara lain
// hanya bisa di instansilasi sebagai constanta global sedangkan const bisa dimasukkan ke dalam class sehingga
// bisa digunakan dalam konsep OOP

// contohnya :
class Coba
{
    // define('NAMA', 'abdu');
    const NAMA1 = 'Abdu';
}

// cara mengakses constanta nya, bisa gunakan static keyword
echo Coba::NAMA1;
echo "<hr>";




// Magic Constant yang ada didalam PHP

// echo __LINE__; // ini berfungsi untuk menampilkan baris dimana constan ini ditulis
// echo __FILE__; // ini berfungsi untuk menampilkan alamat dari file yang bersangkutan
// echo __DIR__; // ini berfungsi untuk menampilkan directory dari file yang bersangkutan
// echo __FUNCTION__; // ini berfungsi untuk mengetahui kita sedang berada di function (method) apa
// echo __CLASS__; // ini berfungsi untuk mengetahui kita sedang berada di class apa
// echo __METHOD__; // ini berfungsi untuk mengetahui kita sedang berada di method apa

class Coba1
{
    public $angka = 1;

    public function getAngka()
    {
        return __METHOD__;
    }
}

$obj = new Coba1;
echo $obj->getAngka();


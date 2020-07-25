<?php

// studi kasus sebuah toko yang menjual produk, produknya ada 2
// 1. produk nya ada komik dan game

class Produk
{

    // setiap membuat property(data) harus menambahkan visibility didepannya
    // yaitu public, private, protected
    public $judul = 'judul', // untuk mendefinisikan value nya secara DEFAULT 
        $penulis = 'penulis',
        $penerbit = 'penerbit',
        $harga = 0;


    // method adalah function yang ada didalam class
    public function getLabel()
    {
        // $this digunakan untuk mengambil isi dari property yang ada didalam class
        // dan juga bisa memanggil METHOD yang ada didalam class yang sama
        // jika tidak diberikan maka akan dibuat variabel penulis dan penerbit baru
        return "$this->penulis, $this->penerbit";
    }
}

class Coba
{
    public $halo;

    public function Samlekom()
    {
        $this->penulis;
    }
    public function hai()
    {
        $this->Samlekom();
    }
}

// $produk1 = new Produk();

// $produk1->judul = 'Naruto';
// ini adalah cara untuk menimpa isi default dari propertynya tetapi harus dibuat
// setelah objek nya di instasilasi
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = 'One Piece';


// bisa juga menambahkan property secara langsung tanpa harus menulis didalam classnya
// cara nya buat nama property yang baru beserta isinya
// $produk2->test = 'yohoho';
// var_dump($produk2);


// object produk lengkap nya
$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi Kishimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;
// var_dump($produk3);

// pakai echo untuk menuliskan property nya
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// ini untuk memanggil method dan sekaligus di cetak
// echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = 'One Piece';
$produk4->penulis = 'Eiichiro Oda';
$produk4->penerbit = 'Shonen Jump';
$produk4->harga = 50000;


$produk5 = new Coba();

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();


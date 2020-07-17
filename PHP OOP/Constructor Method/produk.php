<?php

// studi kasus sebuah toko yang menjual produk, produknya ada 2
// 1. produk nya ada komik dan game


// Constructor Method adalah sebuah method yang khusus yang ada didalam disebuah class
// yaitu method yang otomatis dijalankan ketika sebuah class kita instansilasi atau
// kita buat objek nya

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // jadi ini artinya method ini akan otomatis dijalankan setiap kita membuat
    // produk(object) baru
    // kalo mau memberikan nilai default maka berikan di constructor nya saja
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000);
$produk2 = new Produk('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000);

// jadi jika kita hanya memberikan satu nilai saja yaitu judul sehingga data yang
// ditampilkan selanjutnya adalah nilai default nya
$produk3 = new Produk('Samlekom');

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

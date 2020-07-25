<?php

// studi kasus sebuah toko yang menjual produk, produknya ada 2
// 1. produk nya ada komik dan game


class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    // method baru untuk menampilkan info secara lengkap
    public function getInfoProduk()
    {
        // output nya :
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


// ini adalah class CHILD nya jadi class komik ini bisa menggunakan apapun yang terdapat didalam
// class parent nya yaitu Produk
// jika tidak ada constructor didalam child class nya maka constructor yang akan dijalankan adalah milik 
// class parent nya 
class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}








class CetakInfoProduk
{
    public function Cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100, 0);
$produk2 = new Game('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->Cetak($produk1);


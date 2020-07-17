<?php

// studi kasus sebuah toko yang menjual produk, produknya ada 2
// 1. produk nya ada komik dan game


class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

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

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


// jika terdapat nama method dari child dan parent itu ada yg sama, maka gunakan keyword seperti dibawah
// jadi untuk menjalankan method miliki parent class nya gunakan keyword parent::
// karena dia variabel maka mau gak mau harus menambahkan concenate untuk menghubungkannya
class Komik extends Produk
{
    public $jmlHalaman;


    // jadi kita membuat construct function didalam child class komik dan sekaligus menjalankan constructor function miliki parent nya dengan keyword parent::
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,  $jmlHalaman = 0)
    {

        // jadi ini kita menggunakan construct milik parent dengan keyword parent yang menerima parameter,
        // sama seperti parent nya sekaligus menjalankan constructor function yang dimiliki parent nya 
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk()  .  " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,  $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " .  parent::getInfoProduk()  . " ~ {$this->waktuMain} Jam.";
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


$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->Cetak($produk1);

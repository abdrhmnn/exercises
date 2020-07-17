<?php


// visibility adalah konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah object
// terdapat 3 visibility :
// 1. public, property atau method nya dapat digunakan atau diakses dimana saja bahkan diluar kelas itu sendiri
// 2. protected, hanya bisa digunakan didalam sebuah kelas beserta turunannya (child dari class tersebut) inheritance
// 3. private, hanya dapat digunakan didalam sebuah kelas tertentu saja




class Produk
{
    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;


    private $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        // jadi ini kita mengurangkan harga berdasarkan diskon yang diberikan, rumusnya sama seperti dibawah :
        return $this->harga - ($this->harga * $this->diskon / 100);
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


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,  $jmlHalaman = 0)
    {
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

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
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
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
        return $str;
    }
}


$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


// cara ini untuk meminimalisir jika harga nya diubah, contohnya :
// $this->harga = 5000;
// maka kita ubah visibility dari property harga menjadi protected agar harga nya tidak bisa diubah
echo $produk2->getHarga();
echo "<br>";


$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<br>";








echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk2);

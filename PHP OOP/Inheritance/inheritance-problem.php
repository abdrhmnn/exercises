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
        $waktuMain,
        $tipe;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 'tipe')
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    // method baru untuk menampilkan info secara lengkap
    public function getInfoLengkap()
    {
        // output nya :
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "komik") {
            $str .=  " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
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





// jadi ini kita menambahkan 2 parameter baru yang jmlHalaman dan waktuMain serta tipe untuk menandakan bahwa
// produk tersebut adalah komik atau game
$produk1 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100, 0, "komik");
$produk2 = new Produk('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000, 0, 50, "game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->Cetak($produk1);

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
}


class CetakInfoProduk
{
    // jadi class ini akan menerima inputan object yang sudah dibuat dan fungsinya
    // hanya mencetak isi dari object nya saja
    // jadi untuk membuat fungsi cetak ini menerima data yang spesifik dari class
    // Produk maka tambahkan type nya didepan parameter nya 
    public function Cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}






$produk1 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000);
$produk2 = new Produk('One Piece', 'Eiichiro Oda', 'Shonen Jump', 50000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


// Mencetak fungsi cetak yang ada didalam class CetakInfoProduk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);

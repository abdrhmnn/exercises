<?php

class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method ini disebut dengan setter yang digunakan untuk set nilai baru
    // alasan menggunakan setter ini adalah untuk menambahkan sebuah validasi ke judul nya
    // ini sebagai contoh saja
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }

    // method ini disebut dengan getter karena dia merupakan celah untuk bisa mencetak property judul diluar
    // dari class nya
    public function getJudul()
    {
        return $this->judul;
    }


    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }


    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }


    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
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

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
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
$produk3 = new Produk();

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
$produk3->setJudul("Samlekom");
echo $produk3->getJudul();
echo "<hr>";



echo $produk2->getHarga();
echo "<br>";


$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<hr>";


$produk1->setPenulis("Hello");
echo $produk1->getPenulis();







// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";


// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->Cetak($produk1);


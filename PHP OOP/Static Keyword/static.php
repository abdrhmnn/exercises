<?php

// Static keyword berfungsi untuk bisa mengakses property dan method dari suatu class tanpa harus instansilasi
// terlebih dahulu, caranya tambahkan keyword static setelah visibility dari property atau method
// keyword static ini juga biasanya digunakan dalam framework yaitu di class - class utility

class ContohStatic
{

    public static $angka = 1;

    public static function halo()
    {
        // fungsi self:: digunakan untuk mengakses property yang dibuat dengan keyword static
        // tidak bisa menggunakan $this->angka karena $this akan bisa digunakan ketika class nya
        // di instanlilasi
        for (self::$angka; self::$angka < 10; self::$angka++) {
            echo "halo " . self::$angka  . " kali" . "<br>";
        }
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo  ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";


// Contoh lain dari Static Keyword yaitu nilai yang ada didalam property akan tetap meskipun kita melakukan
// instansilasi yang berulang

class ContohStatic2
{
    public static $angka = 1;

    public static function halo()
    {
        return "halo " .  self::$angka++ . " kali <br>";
    }
}

$obj = new ContohStatic2;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new ContohStatic2;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


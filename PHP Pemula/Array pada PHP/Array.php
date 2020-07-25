<?php


// Array adalah variabel yang dapat memiliki banyak nilai
// Elemen pada array bisa diberikan tipe data yang berbeda

// membuat array terdapat 2 cara :

// 1. cara lama
$hari = array("Senin", 123);


// 2. cara baru
$bulan = ["Januari", "Februari", true];


// mencetak array
// var_dump, menampilkan isi array dengan tipe data 
// print_r, menampilkan isi array tanpa tipe data
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";


// menampilkan satu element pada array
echo $hari[0];
echo "<br>";


// menambahkan element baru pada array
$hari[] = "Hello";
var_dump($hari);


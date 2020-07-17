<?php

// Variable Scope atau Lingkup Variabel

$x = 10; // variabel x yang ada diluar function itu adalah variabel LOKAL untuk satu halaman ini


function tampilX()
{
    // gunakan keyword global jika ingin menggunakan variabel yang berada diluar dari function
    // global $x;
    $x = 20;
    echo $x; // variabel x yang ada didalam function itu adalah variabel LOKAL untuk function nya saja
}

tampilX();

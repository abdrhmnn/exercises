<?php 

// Namespace adalah sebuah cara untuk mengemlompokkan program kedalam sebuah package tersendiri atau bagian yang
// memiliki identitas tersendiri atau bisa disebut dengan Enkapsulasi

// jadi jika kita punya nama class yang sama di program kita walaupun lokasi file nya berbeda itu bisa dihubungkan
// dengan menggunakan namespace ini, contohnya :


// namespace App\Produk;

// tambahkan keyword tersebut diawal script kode php nya, dan maksud keyword tersebut adalah untuk mengasi tahu
// bahwa file tersebut masuk ke namespace atau package apa
// App = vendor atau siapa yang bikinnya
// Produk = nama namespace nya
// SubNamespace

// dan juga harus memberikan namespace kepada setiap script kode yang ada di folder yang bersangkutan


// namespace Vendor\Namespace\SubNamespace;



// cara manggil nya yaitu :
// new App\Service\User(); harus memberikan nama namespace nya sebelum nama dari class nya



// cara untuk memberikan NAMA ALIAS pada namespace, gunakan keyword use dan as sebagai namaAlias nya
// use App\Service\User as ServiceUser;
// use App\Produk\User as ProdukUser;

// new ServiceUser();
// new ProdukUser(); 

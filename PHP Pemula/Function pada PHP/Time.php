<?php

// Fungsi Time

// UNIX Timestamp / EPOCH time
// time() menghasilkan DETIK yang sudah berlalu sejak 1 Januari 1970
// echo time();



// Menggabungkan fungsi date dan time

// 60 * 60 * 24 * 100 merupakan hitungan detik, menit, jam dan hari yang dikalikan dengan 100
// artinya kita akan melihat 100 hari kedepan itu hari apa

echo date("d M Y", time() + 60 * 60 * 24 * 100);

echo "<br>";


// Fungsi mktime, yaitu fungsi untuk membuat sendiri DETIK dari 1 Januari 1970 sampai DETIK yg diinginkan
// Memiliki 7 Parameter :
// 1. Jam
// 2. Menit
// 3. Detik
// 4. Bulan
// 5. Tanggal
// 6. Tahun

echo mktime(0, 0, 0, 3, 17, 2000);
echo "<br>";
echo date("l, d M Y", mktime(0, 0, 0, 3, 17, 2000));
echo "<br>";


// Fungsi strtotime, membuat detik dari format TANGGAL
// Atau kebalikan dari mktime()
echo strtotime("17 Mar 2000");
echo "<br>";

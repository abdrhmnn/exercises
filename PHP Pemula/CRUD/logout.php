<?php
session_start();

// ini adalah 3 cara untuk memastikan menghapus session yang sudah kita buat
$_SESSION = [];
session_unset();
session_destroy();



// ini adalah cara untuk menghapus cookie yaitu memberikan nama yang sama dan berikan WAKTU yang sudah LEWAT
// waktu mundur selama 1 jam merupakan saran dari php nya langsung jadi ikuti saja
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header("Location: login.php");
exit;

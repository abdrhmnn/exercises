<?php

// session adalah suatu cara untuk membuat user tidak bisa mengakses ke halaman tertentu sebelum melakukan
// login terlebih dahulu
// Informasi pada session disimpan didalam SERVER


session_start(); // harus selalu di panggil jika kita ingin menggunakan Session 
require 'functions.php';

// cek cookie ada atau tidak

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    // ambil username berdasarkan id nya
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row["username"])) {
        $_SESSION["login"] = true;
    }
}



if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}




if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek apakah username ada atau tidak didalam database nya
    // fungsi mysqli_num_rows yaitu untuk menghitung ada berapa baris yang dikembalikan dari fungsi select (query)
    // kalo ketemu menghasilkan angka 1, kalo ada username di tabel user jika tidak ada maka menghasilkan angka 0
    if (mysqli_num_rows($result) === 1) {

        // cek password didalam database
        //  kita ambil password dari dalam database berdasarkan username nya
        $row = mysqli_fetch_assoc($result);

        // fungsi password_verify berfungsi untuk mengecek sebuah string itu sama atau tidak dengan hash nya
        // atau kebalikan dari password_hash, ada dua parameter :
        // 1. String yg belum diacak
        // 2. String yg sudah diacak
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;


            // cek remember me
            if (isset($_POST["remember"])) {

                // buat cookie
                setcookie('id', $row["id"], time() + 60);
                setcookie('key', hash('sha256', $row["username"]), time() + 60);
                // fungsi hash adalah teknik mengacak untuk digunakan mengacak nilai hash, ada 2 parameter :
                // 1. tipe algoritma nya
                // 2. string yang mana yang mau di enkripsi
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>

    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>


    <form method="post" action="">

        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>


    </form>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: blue;
            padding: 8px;
            margin-bottom: 30px;
        }

        header h2 {
            text-transform: uppercase;
            font-weight: 400;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h2>form input data</h2>
    </header>
    <!-- Akhir Header -->

    <!-- Container -->
    <form method="post" action="">
        Nama : <input type="text" name="nama"><br>
        Jenis Kelamin : <input type="radio" name="kelamin" value="Pria">Pria
        <input type="radio" name="kelamin" value="Wanita">Wanita <br>
        Agama : <select name="agama">
            <option value="">---Pilih---</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budah">Budha</option>
        </select> <br>
        Hobi : <input type="checkbox" name="makan" value="Makan">Makan<br>
        <input type="checkbox" name="main" value="Main">Main<br>
        <input type="checkbox" name="tidur" value="Tidur">Tidur<br>
        Komentar : <textarea name="komentar" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="KIRIM" name="submit"> ||
        <input type="reset" value="CANCEL">
    </form>
    <!-- Akhir Container -->

</body>

</html>


<?php


if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kelamin = $_POST["kelamin"];
    $agama = $_POST["agama"];
    $komentar = $_POST["komentar"];

    echo "Nama anda adalah $nama <br>";
    echo "Jenis kelamin anda adalah $kelamin <br>";
    echo "Agama anda adalah $agama <br>";

    echo "Hobi : <br>";
    if (isset($_POST["makan"])) {
        echo "+ " . $_POST["makan"] . "<br>";
    }
    if (isset($_POST["main"])) {
        echo "+ " . $_POST["main"] . "<br>";
    }
    if (isset($_POST["tidur"])) {
        echo "+ " . $_POST["tidur"] . "<br>";
    }

    echo "Komentar : <i>$komentar</i><br>";
}





?>
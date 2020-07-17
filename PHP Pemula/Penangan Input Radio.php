<?php

if (isset($_POST["submit"])) {
    $jawaban = $_POST["jawaban"];
    echo "Jawaban anda adalah <i><font color='red'>$jawaban</font></i>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Radio</title>
</head>

<body>

    <form method="post" action="">
        <h2>Silahkan Pilih Jawaban di bawah ini !</h2>
        <input type="radio" name="jawaban" value="Ikan" checked>Binatang Laut<br>
        <input type="radio" name="jawaban" value="Buaya">Binatang Darat<br>
        <input type="radio" name="jawaban" value="Burung">Binatang Udara<br>
        <input type="submit" value="Klik Saya !" name="submit">
    </form>

</body>

</html>
<?php

if (isset($_POST["input"])) {
    $nama = $_POST["nama"];
    echo "Halo, Selamat Datang $nama";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba 1 Input Data</title>
</head>

<body>

    <form method="post" action="">
        Nama Anda : <input type="text" name="nama">
        <input type="submit" value="Klik Saya !" name="input">
    </form>

</body>

</html>
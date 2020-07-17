<?php

if (isset($_POST["submit"])) {
    $tinggal = $_POST["tinggal"];
    echo "Anda Tinggal di <b>$tinggal</b>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Combo Box</title>
</head>

<body>

    <form method="post" action="">
        <h2>Silahkan pilih daerah tempat tinggal anda !</h2>
        <select name="tinggal">
            <option value="Jakarta">Jakarta</option>
            <option value="Bandung">Bandung</option>
            <option value="Surabaya">Surabaya</option>
        </select>
        <input type="submit" value="Pilih" name="submit">
    </form>

</body>

</html>
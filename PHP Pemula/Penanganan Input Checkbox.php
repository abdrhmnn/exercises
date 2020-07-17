<?php


if (isset($_POST["pilih"])) {
    if (isset($_POST["sowon"])) {
        echo "+ " . $_POST["sowon"] . "<br>";
    }
    if (isset($_POST["yerin"])) {
        echo "+ " . $_POST["yerin"] . "<br>";
    }
    if (isset($_POST["eunha"])) {
        echo "+ " . $_POST["eunha"] . "<br>";
    }
    if (isset($_POST["yuju"])) {
        echo "+ " . $_POST["yuju"] . "<br>";
    }
    if (isset($_POST["sinb"])) {
        echo "+ " . $_POST["sinb"] . "<br>";
    }
    if (isset($_POST["umji"])) {
        echo "+ " . $_POST["umji"] . "<br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Checkbox</title>
</head>

<body>

    <form method="post" action="">
        <h2>Silahkan Pilih :</h2>
        <input type="checkbox" name="sowon" value="Sowon" checked>Sowon<br>
        <input type="checkbox" name="yerin" value="Yerin">Yerin<br>
        <input type="checkbox" name="eunha" value="Eunha">Eunha<br>
        <input type="checkbox" name="yuju" value="Yuju">Yuju<br>
        <input type="checkbox" name="sinb" value="Sin B">Sin B<br>
        <input type="checkbox" name="umji" value="Umji">Umji<br><br>
        <input type="submit" value="Pilih" name="pilih">
    </form>

</body>

</html>
<?php

if (isset($_POST["submit"])) {
    $komentar = $_POST["komentar"];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Text Area</title>
</head>

<body>

    <form method="post" action="">
        <h2>Masukan Komentar</h2>
        <textarea name="komentar" cols="40" rows="4"></textarea><br>
        <input type="submit" value="Upload" name="submit">
    </form>
    <?php if (isset($komentar)) : ?>
        <h1><?= $komentar; ?></h1>
    <?php endif; ?>
</body>

</html>
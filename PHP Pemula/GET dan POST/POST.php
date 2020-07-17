<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <!-- Atribut name didalam input akan menjadi KEY di dalam array assosiative pada $_POST -->
    <!-- Nilai default pada atribut method pada form adalah GET -->
    <!-- Nilai default pada atribut action yaitu mengirim data pada dirinya sendiri -->

    <form method="post" action="">
        Masukan Nama : <input type="text" name="nama"><br>

        <input type="submit" value="Kirim!" name="submit">
    </form>


</body>

</html>
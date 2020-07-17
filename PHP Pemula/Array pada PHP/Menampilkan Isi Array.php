<?php


// untuk menampilkan isi array maka gunakan pengulangan pada array
// for / foreach

$angka = [3, 2, 1, 32, 42];
$bilangan = [10, 21, 33, 2, 19, false];


// fungsi count, digunakan untuk menghitung JUMLAH ELEMENT yang ada didalam array


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <!-- Looping Array dengan for -->
    <?php for ($i = 0; $i < count($angka); $i++) : ?>

        <div><?php echo $angka[$i] ?></div>

    <?php endfor; ?>
    <!-- Akhir Looping Array dengan for -->


    <br><br><br>


    <!-- Looping Array dengan foreach -->
    <?php foreach ($bilangan as $a) : ?>

        <div><?php echo $a ?></div>

    <?php endforeach; ?>
    <!-- Akhir Looping Array dengan foreach -->



</body>

</html>
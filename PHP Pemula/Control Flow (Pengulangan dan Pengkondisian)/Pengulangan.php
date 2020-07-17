<?php

// Pengulangan

// 1. for

// for ($i = 0; $i <= 5; $i++) {
//     echo "Hello World <br>";
// }


// 2. while, selama kasus nya bernilai TRUE maka while akan menjalankannya 

// $i = 0;
// while ($i < 5) {
//     echo "Hello World <br>";
//     $i++;
// }



// 3. do.. while, selama kasusnya bernilai FALSE maka do.. while akan menjalankannya SATU KALI 

// $i = 0;
// do{
//     echo "Hello World! <br>";
//     $i++;
// } while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pengulangan</title>
    <style>
        .warna-baris {
            background-color: aquamarine;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php

        for ($i = 1; $i <= 3; $i++) {

            echo "<tr>";

            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i : $j</td>";
            }

            echo "</tr>";
        }

        ?>
    </table>
    <br><br>




    <!-- Dengan menggunakan teknik TEMPLATING, yaitu memisahkan antara TAG PHP dan HTML -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($a = 1; $a <= 5; $a++) : ?>
            <?php if ($a % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr style="background-color: rosybrown;">
                <?php endif; ?>
                <?php for ($b = 1; $b <= 5; $b++) : ?>

                    <td><?= $a, $b; ?></td>

                <?php endfor; ?>
                </tr>

            <?php endfor; ?>
    </table>

    <br><br>

    <?php $p = 0;
    while ($p < 5) : ?>
        <?php echo "Hello World";
        $p++;
        ?>
    <?php endwhile; ?>

</body>

</html>
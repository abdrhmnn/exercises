<?php

require '../functions.php';

// tangkap keyword
$keyword = $_GET["keyword"];


// gunakan keyword kedalam query
$query = "SELECT * FROM buku 
WHERE judul LIKE '%$keyword%' OR
penulis LIKE '%$keyword%' OR
penerbit LIKE '%$keyword%' OR
kategori LIKE '%$keyword%'
";

$buku = query($query);

// var_dump($buku);
?>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Sampul</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Kategori</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($buku  as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="buku" width="50"></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["penulis"]; ?></td>
            <td><?= $row["penerbit"]; ?></td>
            <td><?= $row["kategori"]; ?></td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>

</table>
<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    // var_dump(mysqli_fetch_assoc($result));
    if (!$result) {
        echo mysqli_error($conn);
        exit;
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{

    global $conn;

    // fungsi dari htmlspecialchars adalah untuk mengolah data yang dimasukan oleh user jika user mengirim
    // sintaks html
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $kategori = htmlspecialchars($data["kategori"]);

    // upload gambar dulu
    $gambar = upload();
    if (!$gambar) {
        return false;
    }



    // query insert data
    $query = "INSERT INTO buku VALUES ('', '$judul', '$penulis', '$penerbit', '$kategori', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}





function upload()
{

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];


    // cek apakah tidak ada gambar yang di upload
    // angka 4 berarti menampilkan sebuah pesan jika gambarnya tidak di upload
    if ($error == 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu !');
        </script>";
        return false; // ini untuk memberhentikan function upload nya dan jika function upload nya gagal
        // maka kode yg ada didalam function tambah tidak akan dijalankan
    }



    // cek apakah yang di upload gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

    // mengambil ekstensi file dari gambar yang di upload
    $ekstensiGambar = explode('.', $namaFile);
    // fungsi explode digunakan untuk memecah sebuah string menjadi array dengan menggunakan delimiter 
    // contohnya jika ada nama file gambar abdu.jpg maka menjadi ['abdu', 'jpg']


    // mengambil namaFile
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // fungsi strtolower digunakan untuk mengubah ekstensinya ke huruf kecil semua
    // jadi fungsi end digunakan untuk mengambil isi paling akhir dari array
    // ini untuk meminimalisir jika terdapat nama file abdu.rahman.jpg


    // mengecek apakah ekstensi gambar yang diupload sudah ada atau belum
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // fungsi in_array berfungsi untuk mengecek ada atau tidaknya string didalam array
    // string nya adalah ekstensiGambar
    // array nya adalah ekstensiGambarValid
    // fungsi ini akan menghasilkan nilai BOOLEAN



    // cek jika ukuran gambarnya terlalu besar
    if ($ukuranFile > 1000000) { // satu juta tersebut merupakan angka biner yang mempresentasikan ukuran 1MB
        echo "<script>
            alert('Ukuran gambar terlalu besar !');
        </script>";
        return false;
    }




    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid(); // fungsi uniqid digunakan untuk membangkitkan STRING RANDOM
    // var_dump($namaFileBaru);
    // die;
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // var_dump($namaFileBaru);
    // die;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    // fungsi ini digunakan untuk memindahkan file dari tempat sementara ($tmpName) ke tempat tujuannya
    // dan tujuannya ada di img/ (didalam folder img)
    // dan tentukan sendiri nama file nya mau apa

    return $namaFileBaru; // maksud dari mengembalikan namaFileBaru nya yaitu untuk bisa di masukkan kedalam database
    // liat dan coba pahami function tambah nya
}





function hapus($data)
{

    global $conn;

    mysqli_query($conn, "DELETE FROM buku WHERE id = $data");

    return mysqli_affected_rows($conn);
}






function ubah($data)
{

    global $conn;

    $id = ($data["id"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES["gambar"]["error"] == 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }





    // query insert data
    $query = "UPDATE buku SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', 
    kategori = '$kategori', gambar = '$gambar' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function cari($keyword)
{
    // keyword LIKE berfungsi sebagai wildcard dimana jika kita mencari data dengan nama depannya saja maka
    // semua data yang berkaitan akan di tampilkan
    $query = "SELECT * FROM buku 
    WHERE judul LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' OR
    penerbit LIKE '%$keyword%' OR
    kategori LIKE '%$keyword%'
    ";

    // karena hasilnya berupa array assosiative pada function query
    return query($query);
}





function registrasi($data)
{
    global $conn;

    // fungsi stripslashes untuk membersihkan karakter backslash
    $username = strtolower(stripslashes($data["username"]));

    // fungsi mysqli_real_escape_string untuk memungkinkan user bisa memasukkan password dengan tanda kutip
    // dan tanda kutip nya dimasukkan ke dalam database secara aman
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar !');
            </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }


    // enkripsi password nya
    $password = password_hash($password, PASSWORD_DEFAULT);
    // fungsi password_hash adalah teknik untuk mengenkripsi password atau untuk mengacak string menjadi hash.
    // parameternya ada dua yaitu :
    // 1. password mana yang ingin kita enkripsi
    // 2. jenis algoritma apa yang ingin kita gunakan, nilai default nya adalah PASSWORD_DEFAULT
    // yaitu algoritma yang dipilih dari php nya dan algoritma ini akan terus berubah ketika ada cara 
    // pengamanan yang baru

    // var_dump($password);


    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

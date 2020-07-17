// ajax adalah ansicronys javascript and xml


// ambil elemen2 yang dibutuhkan
const keyword = document.querySelector('#keyword');
const cari = document.querySelector('#cari');
const tabel = document.querySelector('#container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {

    // console.log(keyword.value);
    // value adalah ambil input dari apapun yang di ketikkan oleh user

    // buat object ajax
    const xhr = new XMLHttpRequest();
    // hanya terdapat di browser terbaru

    // mengecek kesiapan ajax
    xhr.onreadystatechange = function () {

        // angka 4 itu untuk memastikan bahwa sumber nya sudah ready
        // angka 200 juga memastikan bahwa sumber nya sudah ok
        if (xhr.readyState == 4 && xhr.status == 200) {

            tabel.innerHTML = xhr.responseText;

            // fungsi responseText akan berisi apapun isi dari sumber nya
            // kan sumber nya adalah buku.php jadi apapun isi yg ada didalamnya dia akan masuk sebagai
            // responseText

        }
    }


    // eksekusi ajax
    xhr.open('GET', 'ajax/buku.php?keyword=' + keyword.value, true);
    // terdapat dua parameter untuk eksekusi ajax nya
    // 1. request method nya 
    // 2. sumber nya dari mana
    // 3. mau sincronus atau ansincronus, ansincronus = true sedangkan sincronus = false


    // menjalankan ajax
    xhr.send();



});
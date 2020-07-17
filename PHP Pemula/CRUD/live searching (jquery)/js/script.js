// JQuery adalah kumpulan sintaks JavaScript

// jadi maksud dari document ready adalah melakukan semua sintaks yang ada didalam blok statement nya ketika
// halamannya sudah ready walaupun script.js ditaruh di dalam head nya
$(document).ready(function () {

    // menghilangkan tombol cari
    $('#cari').hide();
    // fungsi hide digunakan untuk menghilangkan yang muncul



    // buat event ketika keyword ditulis
    // fungsi on merupakan AddEventListener versi jquery
    $('#keyword').on('keyup', function () {

        // munculkan icon loading
        $('.loader').show();
        // fungsi show digunakan untuk memunculkan yang hilang


        // memanggil ajax dengan $.get()
        $.get('ajax/buku.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);

            // menghilangkan loader nya
            $('.loader').hide();
        });

        // parameter data itu sama seperti xhr.responseText yaitu untuk menampilkan data dari ajax nya





        // ajax dengan menggunakan load
        // memanggil ajax dengan menggunakan jquery
        // $('#container').load('ajax/buku.php?keyword=' + $('#keyword').val());

        // fungsi load digunakan untuk mengubah isi dari element container dari data yang diambil dari sumber
        // yaitu buku.php, fungsi load hanya bisa digunakan untuk metode GET saja

        // fungsi val digunakan untuk mengambil value dari element keyword, sama seperti keyword.value versi
        // JavaScript
    });

});
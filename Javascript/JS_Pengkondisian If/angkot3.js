var jmlAngkot = 10;
var AngkotBeroperasi = 6;

for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
    if (noAngkot <= 6) {
        console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
    } else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
    }
}



// Ini adalah contoh 2 penkondisian pada JS, tambahkan else if jika ingin menambahkan lebih dari satu 
// pengkondisian 

let main = true;
while (main) {
    var angka = parseInt(prompt('Masukan Angka :'));
    if (angka % 2 == 0) {
        alert(angka + ' adalah bilangan GENAP !');
    } else if (angka % 2 == 1) {
        alert(angka + ' adalah bilangan GANJIL !');
    } else {
        alert('Anda tidak memasukkan Angka');
    }

    main = confirm('coba lagi?');
}
alert('Terima kasih sudah bermain! Yeayyy');
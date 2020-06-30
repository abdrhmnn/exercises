var jmlAngkot = 10;
var AngkotBeroperasi = 4;
var noAngkot = 1;

while (noAngkot <= AngkotBeroperasi) {
    console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
    noAngkot++;
}


for (noAngkot = AngkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++) {
    console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
}

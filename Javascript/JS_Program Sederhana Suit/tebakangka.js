alert('Welcome to our game');
alert('Silahkan pilih angka antara 1 - 10');
var run = true;
while (run) {
    var bot = Math.floor(Math.random() * 10) + 1;

    console.log(bot);
    var i = 3;
    while (i > 0) {
        var game = prompt('Anda Memiliki ' + i + ' Kesempatan\nInput Your Number...')

        if (game == bot) {
            alert('Pilihan Angka anda TEPAT\nSelamat!!');
            i = 0;
        } else if (game > bot) {
            alert('Pilihan Angka anda terlalu BESAR!');
        } else if (game < bot) {
            alert('Pilihan Angka anda terlalu KECIL');
        } else {
            alert('Pilihan anda salah!');
        }

        if (i == 1) {
            alert('You Lose the number is ' + bot + '');
        } else if (i == 2) {
            alert('This is your last chance...');
        }
        i--;
    }
    run = confirm('Mau main lagi?');
}
alert('Terima kasih telah bermain! Yeaayyy')
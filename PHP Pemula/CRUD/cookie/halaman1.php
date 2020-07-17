<?php

// membuat cookie
// kalo kita membuat cooki dengan key dan value nya saja maka cookie nya hanya berlaku selama SATU sesi saja
// untuk itu kita bisa berikan waktu berlaku kepada cookie nya
setcookie('nama', 'abdu', time() + 60);
// terdapat beberapa parameter :
// 1. nama cookie nya 
// 2. value atau isinya 

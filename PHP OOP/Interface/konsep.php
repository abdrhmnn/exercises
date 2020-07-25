<?php


// Interface adalah class abstrak yang sama sekali tidak memiliki implementasi didalamnya, murni template untuk
// class turunannya dan tidak boleh memiliki property, hanya deklarasi method saja
// serta semua method harus dideklarasikan dengan visibility public 
// boleh mendeklarasikan __construct()
// satu class boleh mengimplementasikan banyak interface


// contohnya

interface buah
{
    public function Coba($coba);
}

// gunakan keyword implements untuk mengimplementasikan method yang ada di class interface nya
class Apel implements buah
{
    public function Coba($coba)
    {
        return "Hello World " . $coba;
    }
}


$obj = new Apel;
echo $obj->Coba("Abdu");


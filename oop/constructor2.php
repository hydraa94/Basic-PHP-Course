<?php

class produk
{

    //property/variable
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //constructor method
    public function __construct(
        $judul = "noData",
        $penulis = "noData",
        $penerbit = "noData",
        $harga = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    //method/function
    // public function hello()
    // {
    //     return "Hello World";
    // }

    public function getInfo()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

//print berdasarkan construct
//!!URUTAN HARUS SAMA!!
$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "25000");
$produk2 = new produk("Minecraft", "Notch", "Mojang Studio", '$29.99');
$produk3 = new produk("Boruto");
echo "Judul, Penulis, Penerbit, Harga" . "<br>" . $produk1->getInfo();
echo "<br>";
echo  $produk2->getInfo();
echo "<br>";
echo $produk3->getInfo();
var_dump($produk3);

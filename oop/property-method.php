<?php

class produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function hello()
    {
        return "Hello World";
    }

    public function getInfo()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

//property/variable
//menimpa property/variable dan print/var_dump
$produk1 = new produk();
$produk1->judul = "Naruto";
var_dump($produk1);

//membuat property baru diluar class
$produk2 = new produk();
$produk2->judul = "Valorant";
$produk2->newProperty = "newProperty";
var_dump($produk2);

// print property dengan echo
$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 25000;
echo "Komik: $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
echo "<br>";

//method/function
// print method
echo $produk3->getInfo();

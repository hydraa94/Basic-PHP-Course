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
        return "$this->penulis, $this->penerbit, $this->harga";
    }
}

class cetakInfo
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | 
        {$produk->getInfo()} | ";
        return "$str";
    }
}

// print berdasarkan construct
// !!URUTAN HARUS SAMA!!
$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "25000");
$produk2 = new produk("Minecraft", "Notch", "Mojang Studio", '$29.99');
// jika parameter yg dimasukkan kurang dari satu dan class 
// tidak mengharuskan untuk memasukkan parameter dengan jumlah yang sama, 
// maka hasil yang ditampilkan default
$produk3 = new produk("Boruto");

// echo "Judul, Penulis, Penerbit, Harga" . "<br>" . $produk1->getInfo();
echo "<br>";
echo  $produk2->getInfo();
echo "<br>";
echo $produk3->getInfo();
echo "<br>";
// var_dump($produk3);

$infoProduk1 = new cetakInfo();
echo $infoProduk1->cetak($produk1);

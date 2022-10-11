<?php

class produk
{

    //property/variable
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHal,
        $playTime;

    //constructor method
    public function __construct($judul = "noData", $penulis = "noData", $penerbit = "noData", $harga = 0)
    {
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

    public function getInfoProduk()
    {
        $str = "{$this->judul}, (Rp. {$this->getInfo()})";


        return $str;
    }
}

class komik extends produk
{
    public function __construct($judul = "noData", $penulis = "noData", $penerbit = "noData", $harga = 0, $jmlHal = "noData")
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHal = $jmlHal;
    }
    public function getInfoProduk()
    {
        $str = "komik : " . parent::getInfoProduk() . " - {$this->jmlHal} Halaman";
        return $str;
    }
}

class game extends produk
{
    public function __construct($judul = "noData", $penulis = "noData", $penerbit = "noData", $harga = 0, $playTime = "noData")
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->playTime = $playTime;
    }
    public function getInfoProduk()
    {
        $str = "game : " . parent::getInfoProduk() . " ~ {$this->playTime} Jam";
        return $str;
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
$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", "Rp. 25000", 50);
$produk2 = new game("Minecraft", "Notch", "Mojang Studio", "$29.99", 10);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

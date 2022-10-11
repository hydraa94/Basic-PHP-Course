<?php

class produk
{

    //property/variable
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHal,
        $playTime,
        $tipe;

    //constructor method
    public function __construct($tipe = "noData", $judul = "noData", $penulis = "noData", $penerbit = "noData", $harga = 0, $jmlHal = "noData", $playTime = "noData")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->playTime = $playTime;
        $this->tipe = $tipe;
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

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul}, (Rp. {$this->getInfo()})";
        if ($this->tipe == "komik") {
            $str .= "- {$this->jmlHal} Halaman";
        } else if ($this->tipe == "game") {
            $str .= "~ {$this->playTime} Jam";
        }

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
$produk1 = new produk("komik", "Naruto", "Masashi Kishimoto", "Shonen Jump", "Rp. 25000", 50);
$produk2 = new produk("game", "Minecraft", "Notch", "Mojang Studio", '$29.99', 10);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

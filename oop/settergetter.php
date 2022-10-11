<?php

class produk
{

    //property/variable
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;


    //constructor method
    public function __construct($judul = "noData", $penulis = "noData", $penerbit = "noData", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("BUKAN STRING");
        }
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfo()
    {
        return "$this->penulis, $this->penerbit, Rp. $this->harga";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul}, {$this->getInfo()}";


        return $str;
    }
}

class komik extends produk
{
    public $jmlHal;
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
    public $playTime;

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
$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 50);
$produk2 = new game("Minecraft", "Notch", "Mojang Studio", 2900, 10);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(0);
echo $produk1->getHarga();
echo "<br>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";
$produk1->setJudul("Boruto");
echo $produk1->getJudul();
echo "<br>";
$produk1->setPenulis("Ngab Owi");
echo $produk1->getPenulis();

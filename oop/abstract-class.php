<?php

abstract class produk
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

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit, Rp. $this->harga";
    }

    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->judul}, {$this->getLabel()}";


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
        $str = "komik : " . $this->getInfo() . " - {$this->jmlHal} Halaman";
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
        $str = "game : " . $this->getInfo() . " ~ {$this->playTime} Jam";
        return $str;
    }
}


class cetakInfoProduk
{
    public $daftarProduk = [];
    public function tambahProduk(produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// print berdasarkan construct
// !!URUTAN HARUS SAMA!!
$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 50);
$produk2 = new game("Minecraft", "Notch", "Mojang Studio", 2900, 10);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

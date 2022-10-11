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

    public function getInfo()
    {
        $str = "{$this->judul}, {$this->getLabel()}";


        return $str;
    }
}

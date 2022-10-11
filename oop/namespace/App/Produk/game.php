<?php

class game extends produk implements InfoProduk
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

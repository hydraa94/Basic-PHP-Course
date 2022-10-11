<?php
class komik extends produk implements InfoProduk
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

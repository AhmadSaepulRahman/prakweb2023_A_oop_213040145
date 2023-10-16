<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga; 
    }

    public function getLabel() {
        return "$this->penulis,  $this->penerbit";
    }

} 


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Dragon Ball", "Ahmad", "Gramedia", 50000);
$produk2 = new Produk("Uncharted", "Neil Drukcmann", "Sony Computer", 250000);


echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();


$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
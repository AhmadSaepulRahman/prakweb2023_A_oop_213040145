<?php

class Produk {
    public  $judul = "judul",
            $penulis ="penulis",
            $penerbit ="penerbit",
            $harga =0;

    public function getLabel() {
        return "$this->penulis,  $this->penerbit";
    }

} 

//$produk1 = new Produk();
//$produk1->judul ="kabuto";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk->judul = "tekken5";
//$produk2->tambahProperty = "kamuhebat";
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Kisah Anak Sukses";
$produk3->penulis = "Daffa";
$produk3->penerbit = "Gramedia";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Drukcmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

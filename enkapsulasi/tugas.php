<?php

class Resep{
    public $nama_pembeli;
    protected $makanan = "puding";
    protected $hrg = 20000;
    private $resep = "agar,gula,air"

    public function makanan_disert(){
        return $this->makanan;
    }
    public function tampilkan_hrg(){ 
        return $this->hrg;
    }
    public function resep(){
        return $this->resep;
    }
}

$disert = new Kulkas();
$disert1= new Kulkas();
$disert2= new Kulkas();
$disert->nama_pembeli="dadan";
echo"pembeli disert: " .$disert->nama_pembeli."<br> makanan disert : ".$disert->makanan_disert()."<br> harga : Rp." ."<br> resep : ".
$disert2->tampilkan_resep(); 



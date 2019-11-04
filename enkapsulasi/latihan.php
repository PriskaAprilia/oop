<?php

class KUlkas{
    public $nama_pembeli;
    protected $merk = "LG";
   private $hrg = 10000000;

    public function merk_pendigin(){
        return $this->merk;
    }
    public function tampilkan_hrg(){ 
        return $this->hrg;
    }
}

$pendingin = new Kulkas();
$pendingin1= new Kulkas();
$pendingin2= new Kulkas();
$pendingin->nama_pembeli="dadan";
echo"pembeli Pendingin : " .$pendingin->nama_pembeli."<br> merk pendingin : ".$pendingin->merk_pendigin()."<br> harga : Rp." .
$pendingin2->tampilkan_hrg(); 



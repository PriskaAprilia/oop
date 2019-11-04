<?php
class Sekolah
{
    public $nama;
    public $alamat;

    public function datasekolah($a="smk assalam",$b="situ tarate")
    {
        $this->nama =$a;
        $this ->alamat=$b;
        return "nama Sekolah : $a,alamat sekolah :$b";

    }
}
$sekolah1 =new Sekolah();
echo $sekolah1->datasekolah("SMA assalam","cibaduyut"); 

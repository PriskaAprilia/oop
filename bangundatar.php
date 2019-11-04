<?php
 class Lingkaran{
     
    public $jari;
    public $fi;

    public function __construct($jari=0, $fi=3.14){
        $this->jari = $jari;
        $this->fi = $fi;
    }
    public function kel(){
        $kel = 2 * $this->fi *$this->jari;
        return $kel;
    }
    public function luas(){
        $luas = $this->fi * $this->jari * $this->jari;
        return $luas;
    }
 }
 $lingkaran1 = new Lingkaran(10);
 echo"Jari - jari = ".$lingkaran1->jari. "<br>";
 echo"Keliling = {$lingkaran1->kel1()}<br>";
 echo "Las = {$lingkaran1->luas()}<br>";
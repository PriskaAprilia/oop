<?php
class Siswa
{
    public $nama,$alamat,$umur;
    
    public function _construct ($a,$b,$c)
    {
        $this->nama=sa;
        $this->alamat=$b;
        $this->umur=$c;
    }
    public function datasiswa()
    {
        return"hallo";
        
            
        }
    }
$aceng = new Siswa('Aceng pilek','Bojong',17);
echo $aceng->datasiswa() .
"Nama saya $aceng->nama,
Alamat di $aceng->alamat,
Umur saya $aceng->umur tahun";
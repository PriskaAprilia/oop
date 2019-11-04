<?php
class RPL2{
     
    public $siswa;
    public $laki;
    public $cewe;
    public $wakel;
    public $ketua;
    public function sekolah(){
        return "SMK ASSALAAM";
    }public function jurusan(){
        return "RPL";
    }


}
$a = new RPL2;
$a->siswa=32;
$a->laki=22;
$a->cewe=10;
$a->wakel="WILDAN ABDUL AZIS S.Kom";
$a->ketua="REFANA BAGAS";
echo "Di ".$a->jurusan()."2, terdiri dari $a->siswa siswa, yang diantara nya : <br>";
echo "siswa laki-laki : $a->laki<br>";
echo "siswa perempuan : $a->cewe<br>";
echo "wali kelas : $a->wakel<br>";
echo "ketua kelas : $a->ketua<br><br>";

$a1 = new RPL2;
$a1->siswa=32;
$a1->laki=22;
$a1->cewe=10;
$a1->wakel="WILDAN ABDUL AZIS S.Kom";
$a1->ketua="REFANA BAGAS";
echo "Di ".$a->jurusan()."2, terdiri dari $a->siswa siswa, yang diantara nya : <br>";
echo "siswa laki-laki : $a->laki<br>";
echo "siswa perempuan : $a->cewe<br>";
echo "wali kelas : $a->wakel<br>";
echo "ketua kelas : $a->ketua<br><br>";
?>
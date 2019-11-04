<?php
class  siswa{

    public $nama,$alamat,$usia,$hobi;
    
    public function datadiri($nama=null,$alamat=null,$usia=null)
    {
        $this->nama=$nama;
        $this->alamat=$alamat;
        $this->usia=$usia;
        return "nama : $nama,alamat :$alamat, usia : $usia"; 
}
public function hobi($hobi)
{
    $this->hobi=$hobi;
    return $this->datadiri($this->nama,$this->alamat,$this->usia)."hobi : $hobi";
    }

}
$siswa1=new siswa();
$siswa1->datadiri('ahmad','bandung','18');
echo $siswa1->hobi("mancing");

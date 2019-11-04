<?php
class Aritmatika{

    public function tambah($bilangan1=null,$bilangan2=null,$hitung=null){
        $aku=$bilangan1 + $bilangan2;
        return"<br>perhitungan $bilangan1 + $bilangan2 =".aku;
    }
    public function kurang($bilangan1=null,$bilangan2=null){
        $aku=$bilangan1 - $bilangan2;
        return"<br>perhitungan $bilangan1 - $bilangan2 =".aku;
    }
    public function kali($bilangan1=null,$bilangan2=null){
        $aku=$bilangan1 * $bilangan2;
        return"<br>perhitungan $bilangan1 * $bilangan2 =".aku;
    }
    public function bagi($bilangan1=null,$bilangan2=null){
        $aku=$bilangan1 - $bilangan2;
        return"<br>perhitungan $bilangan1 / $bilangan2 =".aku;
    
    }
}
$Aritmatika_aku = new Aritmatika();
echo $Aritmatika_aku->tambah(20,10);
echo $Aritmatika_aku->kurang(20,10);
echo $Aritmatika_aku->kali(20,10);
echo $Aritmatika_aku->bagi(20,10);

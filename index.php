<?php 
class kucing{
    public $warna ='putih';
    public $jumlah_kaki= 4;
  


public function berlari()
{
    return "bermain";
}

} 

$kelinci = new kucing;
echo $kelinci->warna;
echo'<br>' .$kelinci->jumlah_kaki;
echo'<br>' .$kelinci->memburu();
echo'<br>' .$kucing_asli->makana('tikus','ikan asin');
echo'<br>' .$kucing_asli->sare('');


echo '<hr>';
$kucing_garong = new kucing;
echo $kucing_garong->warna="hitam";
echo '<br>'.$kucing_garong->jumlah_kaki =3;
echo '<br>'.$kucing_garong->makan('wiskas','bodrex');
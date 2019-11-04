<?php
class kecing {
    public $warna ='kucing';
    public $jumlah_kaki = 4;


    public function makan()
    {
        return"memburu ikan";
    


   }
}

$kucing_asli = new kucing;
echo $kucing_asli->warna;echo'<br>' .$kucing_asli->jumlah_kaki;
echo'<br>' .$kucing_asli->memburu();
echo'<br>' .$kucing_asli->makana('tikus','ikan asin');
echo'<br>' .$kucing_asli->sare('');


echo '<hr>';
$kucing_garong = new kucing;
echo $kucing_garong->warna="hitam";
echo '<br>'.$kucing_garong->jumlah_kaki =3;
echo '<br>'.$kucing_garong->makan('wiskas','bodrex');
echo'<br>' .$kucing_asli->jumlah_kaki;
echo'<br>' .$kucing_asli->memburu();
echo'<br>' .$kucing_asli->makana('tikus','ikan asin');
echo'<br>' .$kucing_asli->sare('');


echo '<hr>';
$kucing_garong = new kucing;
echo $kucing_garong->warna="hitam";
echo '<br>'.$kucing_garong->jumlah_kaki =3;
echo '<br>'.$kucing_garong->makan('wiskas','bodrex');
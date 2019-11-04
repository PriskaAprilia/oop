<?php
class laptop 
{
    // buat protected property
    protected $pemilik;
    // buaat protected method
    protected function hidupkan_laptop()
    {
        return "HIdupkan Laptop";
    }
}

//buat objek dari class laptop
$laptop_anto = new laptop();
//set project propert akan menghasilkan error
$laptop_anto->pemilik =" Anto";
//fatal error : cannot access protected property laptop ::$pen 

//tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
//fatal error: cannot access protected property laptop:: $pen
// jalankan protected method akan menghasilkan error
echo $laptop_anto->hidupkan_laptop();
//fatal error : call to protected method laptop :: hidupkan_lap
// from context
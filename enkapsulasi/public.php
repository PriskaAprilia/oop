<?php
// buat class laptop
class laptop 
{
    public $pemilik;
    //buat public method
    public function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }
}

// buat objek dari class laptop (instatansiasi)
$laptop_anto = new laptop();
//set property
$laptop_anto->pemilik="Anto";
// tampilan property
echo $laptop_anto->pemilik; // Anto
// tampilan method 
echo $laptop_anto->hidupkan_laptop();// "hidupkan laptop"
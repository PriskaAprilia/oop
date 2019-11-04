<!DOCTYPE html>
<html>
<head>
   <title>Bangun Datar</title>
   </head>
   <body>
     <form action = "" method="post">
     <pre>
       Masukan Alas   :<input type="number" name="alas"    value="alas">
       Masukan Tinggi :<input type="number" name="tinngi"  value="tinggi">
       <input type="submit" name="input" value="input">
       </pre>
       </form>
    </body>
    </html>

    <?php
    class BangunDatar {
        public $alas,$tinggi;

        public function __construct($a,$t)
        {
            $this->alas = $a;
            $this->tinggi = $t; 
        }
        public function luas()
    }
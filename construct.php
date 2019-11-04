<?php
class Siswa
{
    public function __destruct()
    {
        echo"<br>int adalah destructor";
    }
    public function __hallo()
    {
        return "<br>Hello PHP";
    }
    public function __construct()
    {
        echo "Ini adalah Construct";
    }
}
$hello = new Siswa();
echo $hello->hello();
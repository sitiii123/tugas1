<?php

echo "Hewan";
echo "<hr>";

class Hewan
{
    public $jumlah_kaki, $bisa_terbang;
}

class Bebek extends Hewan
{
    function bersuara()
    {
        return "kwek kwek";
    }
}
class Anjing extends Hewan
{
    function bersuara()
    {
        return "Guk guk guk";
    }
}
class Sapi extends Hewan
{
    function bersuara()
    {
        return "mooo";
    }
}
class Kucing extends Hewan
{
    function bersuara()
    {
        return "meong meong";
    }
}

echo "animal <br>";
echo "<hr>";

//Bebek
$Ducky = new Bebek;
$Ducky->jumlah_kaki = 2;
$Ducky->bisa_terbang = "bisa terbang";

echo   "Ducky adalah bebek kesayanganku <br>";
echo   "Punya kaki sebanyak :" . $Ducky->jumlah_kaki . "<br>";
echo   $Ducky->bisa_terbang . "<br>";
echo   "Suaranya : " . $Ducky->bersuara() . "<br>";

echo "<hr>";

//Anjing
$Puri = new Anjing;
$Puri->jumlah_kaki = 4;
$Puri->bisa_terbang = "tidak bisa terbang";
echo   "Puri adalah seekor anjing <br>";
echo   "Punya kaki sebanyak :" . $Puri->jumlah_kaki . "<br>";
echo   $Puri->bisa_terbang . "<br>";
echo   "Suaranya : " . $Puri->bersuara() . "<br>";

echo "<hr>";

//Sapi
$Nano = new Sapi;
$Nano->jumlah_kaki = 4;
$Nano->bisa_terbang = "tidak bisa terbang";
echo   "Nano adalah seekor sapi <br>";
echo   "Punya kaki sebanyak :" . $Nano->jumlah_kaki . "<br>";
echo   $Nano->bisa_terbang . "<br>";
echo   "Suaranya: " . $Nano->bersuara() . "<br>";


echo "<hr>";

//Kucing
$Momo = new Kucing;
$Momo->jumlah_kaki = 4;
$Momo->bisa_terbang = "tidak bisa terbang";
echo   "Momo adalah seekor anak kucing <br>";
echo   "Punya kaki sebanyak :" . $Momo->jumlah_kaki . "<br>";
echo   $Momo-> bisa_terbang. "<br>";
echo   "Suaranya: " . $Momo->bersuara() . "<br>";

echo "<hr>";

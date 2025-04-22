<?php

$ad = "Abdulmelik Derinkök";
$ad = "Derinkök";

$sebzeler = array();

$sebzeler[] = "domates";
$sebzeler[] = "havuç";


print_r($sebzeler);
echo "<br>";
$meyveler = array("elma", "çilek", "erik", "kayısı");
$kisi = ["isim" => "Abdulmelik", "soyisim" => "Derinkök", "yas" => 18, "memleket" => "Malatya"]; // array() = []

echo $kisi["isim"] . "<br>";

$kisiler = [
    ["ad" => "Abdulmelik", "soyad" => "Derinkök", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],
    ["ad" => "Ahmet", "soyad" => "Yılmaz", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],
    ["ad" => "Ayşe", "soyad" => "Demir", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],];


echo $kisiler[2]["ad"]." ".$kisiler[2]["soyad"].
    " öğrencisinin final notu:". $kisiler[2]["notlar"]["türkçe"]["final"] . "<br>";
//  $key => $value
//echo $kisi[0];
$meyveler[0] = "portakal";
echo "<br>";
print_r($meyveler);
echo "<br>";
//echo $meyveler[2];

print_r($kisi);
echo "<br>";
array_splice($meyveler,1,1);
echo "<br>";
print_r($meyveler);
echo "<br>";

unset($meyveler[0]);
echo "<br>";
print_r($meyveler);
echo "<br>";
echo count($meyveler);


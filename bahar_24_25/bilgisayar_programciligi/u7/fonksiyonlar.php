<?php
echo ("metin<br>");

$dizi = array(1,2,3,5,6,9);

echo count($dizi);
echo "<br>";

array_splice($dizi, 0,1);

print_r($dizi);

echo "<br>";

$metin = "Merhaba Dünya";

echo rtrim($metin,"Dünya");
echo "<br>";

print_r(str_split("Pazaryeri"));
echo "<br>";

echo str_shuffle("Merhaba Dunya!");


echo "<br>";
$metinsel = "Merhaba Dünya";
echo str_replace("Dünya","Türkiye",$metinsel);

echo "<br>";

echo substr("Merhaba Dünya",7);

echo "<br>";

echo strlen("Pazaryeri");

echo "<br>";

echo rand(8,36);

/*
1-99 arası rastgele sayılar üretilecek.
Üretilen her bir değer diziye eklenerek depolanacak.
Eklenen bir değer tekrar diziye eklenmeyecek.
Toplamda dizi eleman sayısı 30 olana kadar işlem devam edecek.*/
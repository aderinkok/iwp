<?php

$ad="29/04/2025";
$ayrac="/";
$dizi=explode($ayrac,$ad);

echo count($dizi);

print_r($dizi);
echo  "<br>";

$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");

echo "<br>";

print_r(str_split("Merhaba"));

echo "<br>";

echo str_shuffle("Hello World");

echo "<br>";

echo str_replace("Dünya","Türkiye","Merhaba Dünya");

echo "<br>";

echo substr("Hello world",6);

echo "<br>";

echo strlen("Merhaba Dünya");

echo "<br>";

echo rand(5,20);


/* 1-99 arası rastgele sayılar üretilecek.
Üretilen her bir değer diziye eklenerek depolanacak.
Eklenen bir değer tekrar diziye eklenmeyecek.
Toplamda dizi eleman sayısı 30 olana kadar işlem devam edecek.

<?php
echo "Hafta2";
echo "<br>";
$sayi1= 5;
$sayi2= 5;
$test = null;
$test2 = "null";
$esitMi = $sayi1==$sayi2;   // = =
$esitMi2 = $sayi1!=$sayi2; // ! =

echo $esitMi;

var_dump($esitMi);
var_dump($esitMi2);

echo "<br>";

$sayiBir= 5;
$sayiIki= 0;
//$sonuc = $sayiBir / $sayiIki;


if($sayiIki==0){
    echo "Sayı iki sıfırdan büyük.";
    echo "<br>";
}

$sayi1 = 100;
$sayi2 = 1000;
$ad ="Zeynep";
$soyad ="Derinkök";

if($ad == "Zeynep" || $ad == "Sare" ){
    echo "Koşul doğru";
    echo "<br>";
}else{
    echo "Koşul yanlış";
    echo "<br>";
}

/*
 * Yapılacaklar:
 * - Sayı1>sayi2 durumunda eğer sayı2 sayı1 farkı
 * sayı1 den büyükse "fark çok büyük",
 * sayı1'in yarısından büyük ya da sayı1 kadarsa fark normal
 * sayı1 den küçükse fark az yazdıracak şekilde ifadeyi tamamlayınız.
 * */
if($sayi1>$sayi2){
    echo "Sayı 1 sayı 2den BÜYÜK";
    echo "<br>";
}elseif($sayi1<$sayi2){
    echo "Sayı 1 sayı 2den KÜÇÜK";
    echo "<br>";
}else{
    echo "Sayı 1 sayı 2ye EŞİT";
    echo "<br>";
}



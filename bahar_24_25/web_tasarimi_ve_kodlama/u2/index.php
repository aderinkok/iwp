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

$sayi1 = 149;
$sayi2 = 100;
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
 * sayı2 den büyükse "fark çok büyük",
 * sayı2'in yarısından büyük ya da sayı2 kadarsa fark normal
 * sayı2 den küçükse fark az yazdıracak şekilde ifadeyi tamamlayınız.
 * */

echo "Sayı 1:".$sayi1;
echo "<br>";
echo "Sayı 2:".$sayi2;
echo "<br>";
echo "Fark:".$sayi1-$sayi2;
echo "<br>";
if($sayi1>$sayi2){
    echo "Sayı 1 sayı 2den BÜYÜK";
    echo "<br>";
    $fark = $sayi1 - $sayi2;

    if($fark > $sayi2){
        echo "Fark çok büyük";
        echo "<br>";
    }elseif($fark<=$sayi2 && ($sayi2/2)<= $fark ){
        echo "Fark  Normal";
        echo "<br>";
    }
    else{
        echo "Fark çok küçük";
        echo "<br>";
    }

}elseif($sayi1<$sayi2){
    echo "Sayı 1 sayı 2den KÜÇÜK";
    echo "<br>";
}else{
    echo "Sayı 1 sayı 2ye EŞİT";
    echo "<br>";
}



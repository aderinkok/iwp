<?php

$sayi1= 10;
$sayi2 = 100;
$sayi3 = "10";
//$sonuc = $sayi1 / $sayi2;

//echo $sonuc;

$cikti = ($sayi1==$sayi2);

var_dump($sayi1);
echo "<br>";
var_dump($sayi3);

if($sayi1 !== $sayi3) {
    echo " Sayılar eşit DEĞİL";
}
else{
    echo "sayılar eşit ";

}

echo "<br>";
$ad = "Zeynep";
$soyad = "Derinkök";

if ($ad == "Sare" || $ad="Zeynep") {
    echo "Koşul doğru";
    echo "<br>";

}else{
    echo "Koşul yanlış";
    echo "<br>";
}

/*
 * Yapılacaklar:
 * - Sayı1>sayi2 durumunda eğer sayı1 sayı2 farkı
 * sayı2 den büyükse "fark çok büyük",
 * sayı2'in yarısından büyük ya da sayı2 kadarsa fark normal
 * sayı2 den küçükse fark az yazdıracak şekilde ifadeyi tamamlayınız.
 * */
$deger1 = 80;
$deger2 = 50;
if($deger1 > $deger2) {
    echo "Sayı 1 sayı 2 den BÜYÜK";
    echo "<br>";
    $fark = $deger1-$deger2;
    if($fark>$deger2){
        echo "Fark çok büyük";
        echo "<br>";
    }
  //elseif($fark>=$deger2/2){
    elseif($fark<=$deger2 && ($deger2/2)<=$fark){
        echo "Fark  normal";
        echo "<br>";
    }
    else{
        echo "Fark çok küçük";
        echo "<br>";
    }
}
elseif ($deger1 < $deger2) {
    echo "Sayı 1 sayı 2 den KÜÇÜK";
    echo "<br>";
}else{
    echo "Sayı 1 sayı 2 ye EŞİT";
    echo "<br>";
}

echo "<br>";
echo "Çıktı";


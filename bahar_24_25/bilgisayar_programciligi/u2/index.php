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
 * - Sayı1>sayi2 durumunda eğer sayı2 sayı1 farkı
 * sayı1 den büyükse "fark çok büyük",
 * sayı1'in yarısından büyük ya da sayı1 kadarsa fark normal
 * sayı1 den küçükse fark az yazdıracak şekilde ifadeyi tamamlayınız.
 * */
$deger1 = 5;
$deger2 = 50;
if($deger1 > $deger2) {
    echo "Sayı 1 sayı 2 den BÜYÜK";
    echo "<br>";
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


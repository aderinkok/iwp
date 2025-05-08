<?php

function selamla()
{
    echo "Merhaba Dünya<br>";
}

function toplama($sayi1,$sayi2){
    echo $sayi1+$sayi2."<br>";

}

function islem($sayi1,$sayi2,$islem="+")
{
    $sonuc = 0;
   if(is_numeric($sayi1) && is_numeric($sayi2)){
    if($islem == "+"){
        $sonuc = $sayi1+$sayi2;
    }
    if($islem == "-"){
        $sonuc = $sayi1-$sayi2;
    }
    if($islem == "*"){
        $sonuc = $sayi1*$sayi2;
    }
    if($islem == "/"){
        if($sayi2!=0){
            $sonuc = $sayi1/$sayi2;
        }
    }
   echo "İşlemin sonucu: $sonuc<br>";
    return $sonuc;
   }else{
       echo "Lütfen sayısal değerler giriniz.<br>";
   }

}

 selamla();
toplama(5,6);
toplama(23,46);

$cikti = islem(2,10,"/");

echo $cikti."<br>";





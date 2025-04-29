<?php


 function islem($sayi1,$sayi2,$islem="+"){
     $sonuc=0;
     if(is_numeric($sayi1) && is_numeric($sayi2) ) {
         if ($islem == "+") {
             $sonuc = $sayi1 + $sayi2;
         }
         if ($islem == "-") {
             $sonuc = $sayi1 - $sayi2;
         }
         if ($islem == "/") {
             if($sayi2!=0){
                 $sonuc = $sayi1 / $sayi2;
             }
         }
         if ($islem == "*"){
             $sonuc = $sayi1 * $sayi2;}
     }else{
         echo "Girilen değerlerin tümü sayısal olmalıdır.";
     }
    return $sonuc;
 }

 function selamla($ad="İsimsiz",$soyad="İsimsiz")
 {
     echo "Merhaba <b> $ad $soyad </b>, hoşgeldin.<br>";
 }


 echo islem(5,10,"*");

echo "<br>";

selamla();
selamla("Abdulmelik","Derinkök");
selamla("Abdulmelik","Derinkök");
selamla("Abdulmelik","Derinkök");
selamla("Abdulmelik","Derinkök");
selamla("Abdulmelik","Derinkök");
selamla("Abdulmelik","Derinkök");





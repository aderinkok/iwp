<?php
$isim = "Abdulmelik Derinkök";

function isimYazdir(){
    $ad = $GLOBALS["isim"];
    echo $ad;

}

isimYazdir();
echo "<br>";

print_r($GLOBALS);

echo "<br>";
echo "<hr>";
echo "Cookieler";
echo "<hr>";

if(!isset($_COOKIE['isim'])){
    setcookie("isim","Abdulmelik Derinkök",time()+600,"/");
}

foreach($_COOKIE as $k=>$v){
    echo "$k: $v <br>";

}


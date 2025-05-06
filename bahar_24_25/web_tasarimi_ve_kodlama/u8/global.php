<?php
$isim = "Abdulmelik";


function isimYazdir(){
    $ad = $GLOBALS["isim"];
    echo "Merhaba $ad <br>";

}

isimYazdir();
//setcookie(name, value, expire, path, domain, secure, httponly);
//setcookie("cerezAdi", "CerezDeğeri", time() + 600,"/");

echo time();
foreach ($_COOKIE as $key => $value) {

    echo $key . " :" . $value . "<br>";
}

echo "<br>";

if(!isset($_COOKIE["cerezAdiX"])){
    echo "ilgili değer yok.<br>";
}
echo $_COOKIE["cerezAdi"];


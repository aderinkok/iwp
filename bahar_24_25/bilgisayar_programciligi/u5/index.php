<?php
$ad = "Abdulmelik";

echo "Benim adım: \"$ad\" ";

echo "while<br>";
$sayi = 1;
while ($sayi<10){
    echo "$sayi - Merhaba<br>";
    $sayi++;
}

$x=1;
while(false){
    if($x==13){
        break;
    }
    echo "-$x- <br>";
    $x++;
}

for($i=10;$i<5;$i++){
    echo "for çalıştı";

}

echo "do-while<br>";
$y=11;

do{
    echo "$y - Merhaba<br>";
    $y++;
}while($y<10);
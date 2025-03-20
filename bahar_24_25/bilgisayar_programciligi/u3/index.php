<?php
$gun = 2;
$ay = "Mart";
switch($gun){
    case 1:
        echo "Pazartesi";
        echo "<br>";
        break;

    case 2:
        echo "Salı";
        echo "<br>";
        break;

    case 3:
        echo "Çarşamba";
        echo "<br>";
        break;
    case 4:
        echo "Perşembe";
        echo "<br>";
        break;
    case 5:
        echo "Cuma";
        echo "<br>";
        break;
    case 6:
        echo "Cumartesi";
        echo "<br>";
        break;
    case 7:
        echo "Pazar";
        echo "<br>";
        break;

    default:
        echo "Tanımsız";
        echo "<br>";
        break;

}

switch($ay){
    case "Haziran":
        echo 6;
        echo "<br>";
        break;
    case "Temmuz":
        echo 7;
        echo "<br>";
        break;
    case "Ağustos":
        echo 8;
        echo "<br>";
        break;

}
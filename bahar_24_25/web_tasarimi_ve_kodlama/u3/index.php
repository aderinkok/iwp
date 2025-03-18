<?php


$gun= 4;
$ay = "Haziran";
switch ($gun) {
    case 1:
        echo "Pazartesi";
        break;
    case 2:
        echo "Salı";
        break;
    case 3:
        echo "Çarşamba";
        break;
    case 4:
        echo "Perşembe";
        break;
    case 5:
        echo "Cuma";
        break;
    case 6:
        echo "Cumartesi";
        break;
    case 7:
        echo "Pazar";
        break;
    default:
        echo "Tanımsız";
        break;
}
echo "<br>";
switch ($ay) {
    case "Ocak":
        echo "1";
        break;
    case "Şubat":
        echo "2";
        break;
    case "Mart":
        echo "3";
        break;
    default:
        echo "Tanımsız";
        break;
}
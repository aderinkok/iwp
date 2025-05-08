<?php

if(isset($_POST["gonder"])){
    echo "(POST)Merhaba".$_POST["ad"]." ".$_POST["soyad"]."<br>";
}

if(isset($_GET["gonder"])){
    echo "(GET)Merhaba".$_GET["ad"]." ".$_GET["soyad"]."<br>";
}

?>


<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM</title>
</head>
<body>
<h1>Form işlemleri</h1>
<form action="form.php" method="get">
    <label for="ad">Adınız:</label>
    <input type="text" id="ad" name="ad">
    <label for="soyad">Soyadınız:</label>
    <input type="text" id="soyad" name="soyad">
    <input type="submit" value="Gönder" name="gonder">

</form>

</body>
</html>
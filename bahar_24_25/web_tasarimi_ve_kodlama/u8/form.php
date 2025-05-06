<?php
if(isset($_GET["form"])){
    echo "Merhaba ".$_GET["ad"]." ".$_GET["soyad"]. " veri GET ile geldi";

}
if(isset($_POST["form"])){
    echo "Merhaba ".$_POST["ad"]." ".$_POST["soyad"]. " veri POST ile geldi";

}

?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formlar</title>
</head>
<body>
<h1>Form işlemleri</h1>

<form action="form.php" method="get" name="formAdi">
    <label for="ad">Adınız:</label>
    <input type="text" id="ad" name="ad"><br>
    <label for="soyad">Soyadınız:</label>
    <input type="text" id="soyad" name="soyad"><br>
    <input type="submit" value="Gönder" name="form">
</form>
</body>
</html>
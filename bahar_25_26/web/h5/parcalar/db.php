<?php
$host = 'localhost'; // Veritabanı sunucusu
$dbname = 'web'; // Veritabanı adı
$user = 'root'; // Veritabanı kullanıcı adı
$pass = ''; // Veritabanı şifresi


try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Bağlantı başarılı!";

}catch(PDOException $e){
        echo "Bağlantı hatası: ". $e->getMessage();
}
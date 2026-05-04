<?php

$host = 'localhost'; // Veritabanı sunucusu
$dbname = 'web'; // Veritabanı adı
$user = 'root'; // Veritabanı kullanıcı adı
$pass = ''; // Veritabanı şifresi


try{
$nesne = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$nesne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Bağlantı başarılı!";

}catch(PDOException $e){
        echo "Bağlantı hatası: ". $e->getMessage();
}
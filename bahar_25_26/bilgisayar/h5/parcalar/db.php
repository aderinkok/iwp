<?php
$host = 'localhost'; // Veritabanı sunucusu
$dbname = 'bilgisayar'; // Veritabanı adı
$user = 'root'; // Veritabanı kullanıcı adı
$pass = ''; // Veritabanı şifresi

try {
    $nesne = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $nesne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $mesaj = "Bağlantı hatası: " . $e->getMessage();
    $bilgi = true;
}

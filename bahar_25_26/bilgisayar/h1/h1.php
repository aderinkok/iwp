<?php
/*
 * =========================================================================
 * İLERİ WEB PROGRAMLAMA - DERS 1: Temeller, Sözdizimi ve Değişkenler
 * =========================================================================
 */

// -------------------------------------------------------------------------
// 1. TEMEL KAVRAMLAR VE 2. ÇALIŞMA ORTAMI
// -------------------------------------------------------------------------
/*
 * PHP, sunucu tarafında çalışan ve HTML ile kolayca entegre olabilen 
 * betik bir dildir.
 * Yorumlayıcı (interpreter) tabanlıdır, kod makine diline önceden derlenmez; 
 * satır satır işlenerek HTML çıktısı olarak tarayıcıya iletilir.
 * Bu kodların çalışması için dosyaların (.php uzantılı) XAMPP gibi bir programda, 
 * Apache sunucusunun "htdocs" dizininde bulunması gerekir.
 */


// -------------------------------------------------------------------------
// 3. PHP SÖZDİZİMİ (SYNTAX)
// -------------------------------------------------------------------------

// PHP komutları her zaman <?php ile başlar ve ? > ile biter.
// Not: Kısa etiket (short tag) kullanımı (<? ? >) sunucu ayarları gerektirebildiği 
// için uyumluluk açısından pek tavsiye edilmez.

// Her çalıştırılabilir PHP komutu noktalı virgül (;) ile bitmek zorundadır.

// --- Yorum Satırları ---
// Bu bir tek satırlık yorumdur.
# Bu da tek satırlık alternatif bir yorumdur.
/* Bu ise 
   birden fazla satıra yayılan 
   yorum bloğudur.
*/

// --- Ekrana Çıktı Alma ---
echo "Merhaba Dünya!<br>"; // Çıktı almak için en sık kullanılan fonksiyondur.
print "PHP Öğrenmeye Başlıyoruz...<br>"; // echo ile temelde aynı işi yapar.

// --- Büyük/Küçük Harf Duyarlılığı ---
// PHP'de anahtar kelimeler, fonksiyonlar ve sınıflarda BÜYÜK/küçük harf duyarlılığı YOKTUR.
ECHO "Bu satır ECHO ile yazıldı.<br>"; // Çalışır.
// Ancak, DEĞİŞKEN isimlerinde kesinlikle BÜYÜK/küçük harf duyarlılığı VARDIR! 


// -------------------------------------------------------------------------
// 4. DEĞİŞKENLER VE VERİ TÜRLERİ
// -------------------------------------------------------------------------

/*
 * Değişkenler verileri hafızada tutmak için kullanılır.
 * PHP'de tüm değişken isimleri Dolar ($) işareti ile başlamak zorundadır.
 * * Kurallar:
 * - Sayı ile başlayamaz (Örn: $1sayi yanlıştır).
 * - Boşluk içeremez (Örn: $ad soyad yanlıştır).
 * - Türkçe karakter kullanılmamalıdır (Örn: $sayı yanlıştır).
 * - Değişkene değer atamak için "=" operatörü kullanılır.
 */

// --- Değişken Tanımlama Örnekleri ---
$isim = "Abdulmelik"; // Doğru.
$ad_soyad = "Abdulmelik Derinkök"; // Kelimeler arası alt tire kullanımı doğru ve yaygındır.
$sayi1 = 10; // Doğru (Sayısal değerler tırnak içine alınmaz).
$sayi3 = 7; // Doğru (Sayı sonda veya ortada olabilir).


// --- Veri Türleri (Data Types) ---
// PHP'de değişkene atadığınız değere göre tür otomatik belirlenir.

// 1. String (Dizge - Metinsel): Tek (') veya çift (") tırnak içine yazılır.
$sehir = 'Bilecik'; 
$ders = "İleri Web Programlama";
// 2. Number (Sayısal): Tırnaksız yazılır.
$tamSayi = 44; // Integer.
$ondalikSayi = 5.2; // Float (Ondalık ayracı için her zaman NOKTA kullanılır).

// 3. Boolean (Mantıksal): Sadece true (doğru) veya false (yanlış) değerini alır.
$onay = true; 

// 4. Array (Dizi): Birden fazla veriyi tek değişkende listeler.
$ogrenciler = array('Ali', 'Ahmet', 'Ayşe'); 

// --- Değişken İnceleme Fonksiyonları ---
// Değişkenlerin yapısı hakkında teknik detay almak için kullanılır.

echo "<br><b>var_dump() Örneği:</b> Değişkenin türünü ve değerini detaylı gösterir.<br>";
var_dump($isim); // Çıktı: string(10) "Abdulmelik" (Tür, karakter sayısı ve değer).
echo "<br>";

echo "<br><b>print_r() Örneği:</b> Özellikle dizi (array) değişkenleri okunaklı basmak için kullanılır.<br>";
print_r($ogrenciler); // Array yapısını ekrana dizer.
echo "<br><br>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP ve HTML Birlikte</title>
</head>
<body>
    <h2><?php echo "HTML Etiketleri Arasında PHP Çıktısı"; ?></h2>
    
    <ul>
        <li><b>Ders adı:</b> <?php echo $ders; ?></li>
        <li><b>Bulunduğu Şehir:</b> <?php echo $sehir; ?></li>
        <li><b>Öğrenci Sayısı (Sayısal):</b> <?php echo $tamSayi; ?></li>
    </ul>
    
    <p>
        <?php 
        // HTML etiketleri PHP stringleri içinde de kullanılabilir.
        echo "<em>Not: PHP'nin HTML ile bu kadar kolay harmanlanması, onu web geliştirme için çok güçlü kılar.</em>"; 
        ?>
    </p>
</body>
</html>
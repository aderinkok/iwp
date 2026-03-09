<?php
/*
 * =========================================================================
 * İLERİ WEB PROGRAMLAMA - 2: Operatörler, Sayılar, Stringler ve Kontrol Yapıları
 * =========================================================================
 */

// -------------------------------------------------------------------------
// 1. OPERATÖRLER
// -------------------------------------------------------------------------

/* --- A. Aritmetik Operatörler --- */
// Toplama (+), Çıkarma (-), Çarpma (*), Bölme (/), Mod/Kalan (%), Üs Alma (**).
$x = 10;
$y = 3;
echo "Toplama: " . ($x + $y) . "<br>"; // 13 
echo "Mod (Kalan): " . ($x % $y) . "<br>"; // 10'un 3'e bölümünden kalan: 1 
echo "Üs Alma: " . ($x ** $y) . "<br><br>"; // 10^3 = 1000 

/* --- B. Atama Operatörleri --- */
// Bir değişkene değer atamak veya var olan değeri işleyerek tekrar atamak için kullanılır.
$sayi = 5; // Temel atama.
$sayi += 3; // $sayi = $sayi + 3 demektir. Yeni değer: 8.

/* --- C. Karşılaştırma Operatörleri --- */
// İki değeri karşılaştırır ve geriye Boolean (true/false) döner.
$a = 5;
$b = "5";
// == (Eşittir): Sadece değerleri karşılaştırır.
var_dump($a == $b); // true döner, çünkü ikisi de 5.
echo "<br>";
// === (Denktir): Hem değeri hem de VERİ TÜRÜNÜ karşılaştırır.
var_dump($a === $b); // false döner, çünkü biri Integer, diğeri String! 
echo "<br>";
// Diğerleri: != (Eşit değil), > (Büyük), < (Küçük), >= (Büyük eşit), <= (Küçük eşit).

/* --- D. Artırma/Azaltma Operatörleri (ÖNEMLİ FARK!) --- */
$sayac = 10;
echo "Sonek (Postfix) Kullanımı: " . $sayac++ . "<br>"; // Önce 10 yazdırır, SONRA değeri 11 yapar.
echo "Önek (Prefix) Kullanımı: " . ++$sayac . "<br><br>"; // Önce değeri 12 yapar, SONRA 12 yazdırır.

/* --- E. Mantıksal ve Koşullu Operatörler --- */
// and (&&), or (||), ! (Değil) .
// ?: Üçlü (Ternary) koşul operatörüdür. Tek satırda if-else yazmayı sağlar.
$yas = 20;
$durum = ($yas >= 18) ? "Reşit" : "Reşit Değil";
echo "Durum: " . $durum . "<br><br>";


// -------------------------------------------------------------------------
// 2. SAYISAL İFADELER İLE ÇALIŞMA
// -------------------------------------------------------------------------

/*
 * PHP'de sayılar Tam Sayılar (Integer) ve Ondalıklı Sayılar (Float) olarak iki temel türdedir.
 * Ondalık ayracı olarak her zaman . (nokta) kullanılır.
 */
$intSayi = 10;
$floatSayi = 3.5;

// Otomatik Tür Dönüşümü: Bir tamsayı ile ondalıklı sayı toplanırsa sonuç otomatik olarak float olur.
$toplam = $intSayi + $floatSayi; 
var_dump($toplam); // float(13.5) 
echo "<br>";

// Bölme İşlemi: Bölme işlemi daima float türünde sonuç döndürür, hatta iki tam sayı ile yapılsa bile (ör: 10/2 = 5.0).
// Sıfıra Bölme: Sayı sıfıra bölünemez. Eğer böyle bir işlem yapılırsa PHP ZeroDivisionError hatası üretir.
// // $hata = 10 / 0; // (Çalışmayı durdurmaması için yorum satırına alındı) 

// Matematiksel İşlem Önceliği: Parantezler > çarpma/bölme > toplama/çıkarma.
echo "Öncelik 1: " . (10 + 5 * 2) . "<br>"; // Sonuç: 20 (Önce çarpma) 
echo "Öncelik 2: " . ((10 + 5) * 2) . "<br><br>"; // Sonuç: 30 (Önce parantez) 


// -------------------------------------------------------------------------
// 3. STRİNG İFADELER İLE ÇALIŞMA 
// -------------------------------------------------------------------------

$isim = "Abdulmelik"; // 

// Çift Tırnak ve Tek Tırnak Farkı (EN SIK YAPILAN HATA)
// Çift tırnak ("") içinde değişkenler işlenir (değeri okunur).
echo "İsim: $isim <br>"; // Çıktı: İsim: Abdulmelik

// Tek tırnak ('') içinde değişkenler düz metin olarak kabul edilir, işlenmez!
echo 'İsim: $isim <br>'; // Çıktı: İsim: $isim 

// Süslü Parantez Kullanımı: Değişkenin metinle karışmasını önler.
echo "Merhaba, {$isim}Bey!<br>"; 

// Kaçış Karakteri (\): Metin içinde tırnak işareti kullanmamızı sağlar.
echo "Dedem hep şöyle derdi: \"Çok çalış!\" <br>"; 

// String Birleştirme (. operatörü) 
$ad = "Yağız";
$soyad = "Derinkök";
$tamAd = $ad . " " . $soyad; // Araya boşluk ekleyerek birleştirdik.
echo $tamAd . "<br><br>";


// -------------------------------------------------------------------------
// 4. KONTROL YAPILARI (KARAR MEKANİZMALARI) 
// -------------------------------------------------------------------------
// 



/*
 * Programın akışını yönlendirmek ve farklı durumlara göre farklı işlemler 
 * gerçekleştirmek için kullanılır.
 */

/* --- A. IF - ELSEIF - ELSE Yapısı --- */
// Parantez içindeki koşul true (doğru) üretirse ilgili süslü parantez bloğu çalışır.
$not = 75; 

if ($not >= 85) {
    echo "Başarılı: A<br>"; 
} elseif ($not >= 70) {
    // elseif bitişik yazılır! 
    echo "Başarılı: B<br>"; // Bu blok çalışır.
} else {
    // Hiçbir koşul sağlanmazsa burası çalışır.
    echo "Başarısız<br>"; 
}

// EKSTRA: Mantıksal operatörlerle çoklu koşul kontrolü
$kullaniciAdi = "admin";
$sifre = "123456";

if ($kullaniciAdi === "admin" && $sifre === "123456") {
    echo "Sisteme giriş başarılı!<br>";
} else {
    echo "Hatalı bilgi girdiniz!<br>";
}


/* --- B. SWITCH - CASE Yapısı --- */
// Belirli bir değişkenin değerine göre çok sayıda durumu test etmek için if-else'den daha okunaklıdır.
$renk = "kırmızı"; 

switch ($renk) {
    case "mavi":
        echo "Seçilen renk mavi.<br>"; 
        break; // Her case sonuna break konulmalıdır
    case "kırmızı":
        echo "Seçilen renk kırmızı.<br>"; 
        break; // Eğer break unutulursa, kod bir sonraki case'i de çalıştırır (fall-through).
    case "yeşil":
        echo "Seçilen renk yeşil.<br>";
        break;
    default:
        // Hiçbir değer eşleşmezse default bloğu çalışır.
        echo "Renk tanımlı değil.<br>";
        break;
}

?>
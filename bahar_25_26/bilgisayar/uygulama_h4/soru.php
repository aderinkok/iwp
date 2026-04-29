<?php
// GÖREV 1: Session (Oturum) başlatma kodu eksik! Buraya ekleyiniz.
/*
Ders İçi Etkinlik: Form ile Öğrenci Not Sorgulama ve Oturum (Session) Yönetimi

Süre: 35-40 Dakika
Kapsanan Konular: Süper Globaller ($_POST, $_SESSION), Form İşlemleri (GET/POST mantığı), XSS Güvenliği, Fonksiyonlar, İlişkisel Diziler (Associative Arrays), Karar Yapıları.


Aşağıda, öğrencilerin kendi numaralarını girerek notlarını ve geçme/kalma durumlarını öğrendikleri basit bir "Not Sorgulama Ekranı" kodlanmıştır. Başarılı giriş yapan öğrencinin adı, sistemde "Oturum (Session)" olarak tutulmak istenmektedir.
Ancak stajyer geliştirici kodu tamamlarken form metotlarını karıştırmış, güvenlik açığı bırakmış ve oturum başlatmayı unutmuştur.

Öğrenciden İstenen Görevler:

Oturum Hatasını Çözün: Sayfada $_SESSION süper globali kullanılmış  ancak oturum başlatma fonksiyonu unutulmuştur. Gerekli kodu ekleyin.


Metot Uyuşmazlığını Giderin: HTML formunda belirtilen method ile PHP tarafında veriyi yakalayan süper global dizi ($_POST veya $_GET) birbiriyle uyuşmuyor. İkisini de daha güvenli olan POST metoduna göre senkronize edin.


Güvenlik Açığını Kapatın: Kullanıcıdan alınan form verisi doğrudan ekrana basılma riski taşımaktadır. Çapraz Site Betik Çalıştırma (XSS) saldırılarını önlemek için ilgili fonksiyonu kullanın.


Döngü ile Arama İşlemini Tamamlayın: $arananNo değişkenindeki numarayı, $ogrenciVeritabani dizisinde bulmak için bir foreach döngüsü  yazın. Numara eşleşirse öğrencinin adını session'a kaydedip, geçme durumunu hesaplayan fonksiyonu çağırın ve ekrana yazdırın.



*/

// İlişkisel Dizi yapısında örnek veritabanı
$ogrenciVeritabani = [
    "101" => ["ad" => "Ali Yılmaz", "not" => 85],
    "102" => ["ad" => "Zeynep Kaya", "not" => 45],
    "103" => ["ad" => "Kerem Can", "not" => 70]
];

// Not hesaplayan fonksiyon
function gectiMi($not) {
    return ($not >= 50) ? "Geçti" : "Kaldı"; 
}

// GÖREV 2: Form methodu ile PHP'de yakalama methodu uyuşmuyor! Düzeltiniz.
if (isset($_POST['ogrenci_no'])) {
    
    // GÖREV 3: Güvenlik açığı! Kullanıcıdan alınan veriyi filtreleyen fonksiyonu kullanın.
    $arananNo = $_POST['ogrenci_no']; 
    $bulundu = false;

    // GÖREV 4: $ogrenciVeritabani içinde $arananNo'yu bulmak için foreach döngüsü oluşturun.
    // İPUCU: foreach ($ogrenciVeritabani as $okulNo => $bilgiler) şeklinde kullanabilirsiniz.
    
    // DÖNGÜ BURAYA YAZILACAK...
    // Eğer eşleşme olursa:
    // 1. Öğrenci adını $_SESSION['aktif_ogrenci'] değişkenine aktarın.
    // 2. gectiMi() fonksiyonunu kullanarak durumu hesaplayın.
    // 3. Ekrana "Hoş geldin [ad], Notun: [not] - Durum: [durum]" yazdırın.
    // 4. $bulundu değişkenini true yapın.
    
    
    if (!$bulundu) {
        echo "<p style='color:red;'>Sistemde böyle bir öğrenci numarası bulunamadı!</p>";
    }
}
?>

<hr>
<h3>Not Sorgulama Sistemi</h3>
<form action="" method="GET"> 
   Öğrenci No Giriniz: <input type="text" name="ogrenci_no" required>
   <input type="submit" value="Sorgula">
</form>
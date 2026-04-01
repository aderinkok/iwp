<?php
// GÖREV 2: durumBul($ortalama) fonksiyonunu buraya yazınız.
// Eğer ortalama >= 50 ise "Geçti", değilse "Kaldı" döndürecek.
/* 


Elinizde bir sınıftaki öğrencilerin isim, vize ve final notlarını tutan çok boyutlu bir dizi (array) bulunmaktadır. Kodu yazan kişi iskeleti oluşturmuş ancak bazı hesaplama hataları yapmış ve eksik fonksiyonlar bırakmıştır.


Öğrenciden İstenen Görevler:

İşlem Önceliği Hatasını Düzeltin: Vize notunun %40'ını, final notunun ise %60'ını alarak ortalamayı hesaplayan satırda klasik bir matematiksel öncelik hatası yapılmıştır . Doğru hesaplamayı parantezleri veya oranları kullanarak düzeltin.

Fonksiyon Yazın: Kodun en üstüne durumBul adında yeni bir fonksiyon tanımlayın. Bu fonksiyon parametre olarak $ortalama değerini almalı ve eğer ortalama 50'ye eşit veya büyükse geriye "Geçti", 50'den küçükse geriye "Kaldı" string (metin) değerini döndürmelidir (return kullanın).


Döngüyü Tamamlayın: foreach döngüsü içinde bu fonksiyonu çağırın ve öğrencilerin adını, hesaplanan doğru ortalamasını ve geçip kalma durumunu HTML <br> etiketiyle alt alta düzgünce birleştirerek (string concatenation) ekrana yazdırın.

*/


// Sınıftaki öğrencilerin verilerini tutan çok boyutlu dizi
$ogrenciler = [
    ["isim" => "Ali", "vize" => 40, "final" => 40],
    ["isim" => "Zeynep", "vize" => 80, "final" => 90],
    ["isim" => "Kerem", "vize" => 50, "final" => 60],
    ["isim" => "Ayşe", "vize" => 20, "final" => 80]
];

echo "<h3>Sınıf Not Listesi</h3>";

// Döngü ile dizinin içinde gezinme
foreach ($ogrenciler as $ogrenci) {
    
    // GÖREV 1: Vizenin %40'ı, finalin %60'ı alınmalıdır. 
    // Aşağıdaki işlemde mantık/öncelik hatası var, düzeltiniz!
    $ortalama = $ogrenci["vize"] + $ogrenci["final"] / 2; 

    // GÖREV 3: Yazdığınız fonksiyonu burada çağırarak $durum değişkenine aktarın.
    $durum = ""; 
    
    // Ekrana yazdırma
    echo "Öğrenci Adı: " . $ogrenci["isim"] . " | Ortalama: " . $ortalama . " | Durum: " . $durum . "<br>";
}
?>
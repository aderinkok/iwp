<?php
// GÖREV 2 ÇÖZÜMÜ: Parametre alan ve değer döndüren kullanıcı tanımlı fonksiyon
function durumBul($ortalama) {
    if ($ortalama >= 50) {
        return "<strong style='color:green;'>Geçti</strong>";
    } else {
        return "<strong style='color:red;'>Kaldı</strong>";
    }
}

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
    
    // GÖREV 1 ÇÖZÜMÜ: Matematiksel işlem önceliği ve doğru oran hesaplaması
    // Yanlış olan: $ogrenci["vize"] + $ogrenci["final"] / 2
    // Doğru olan: ($ogrenci["vize"] * 0.4) + ($ogrenci["final"] * 0.6)
    $ortalama = ($ogrenci["vize"] * 0.4) + ($ogrenci["final"] * 0.6); 

    // GÖREV 3 ÇÖZÜMÜ: Fonksiyonu çağırma ve değeri değişkene atama
    $durum = durumBul($ortalama); 
    
    // Ekrana yazdırma
    echo "Öğrenci Adı: " . $ogrenci["isim"] . " | Ortalama: " . $ortalama . " | Durum: " . $durum . "<br>";
}
?>
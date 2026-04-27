<?php
// GÖREV 1 ÇÖZÜMÜ: Oturumları yönetmek için session_start() kullanılmalıdır.
session_start(); 

$ogrenciVeritabani = [
    "101" => ["ad" => "Ali Yılmaz", "not" => 85],
    "102" => ["ad" => "Zeynep Kaya", "not" => 45],
    "103" => ["ad" => "Kerem Can", "not" => 70]
];

function gectiMi($not) {
    return ($not >= 50) ? "<span style='color:green;'>Geçti</span>" : "<span style='color:red;'>Kaldı</span>"; 
}

// GÖREV 2 ÇÖZÜMÜ: Form POST metoduyla gönderileceği için $_POST süper globali kullanıldı.
if (isset($_POST['ogrenci_no'])) {
    
    // GÖREV 3 ÇÖZÜMÜ: htmlspecialchars() kullanılarak olası XSS (Betik) saldırıları önlendi. 
    $arananNo = htmlspecialchars($_POST['ogrenci_no']); 
    $bulundu = false;

    // GÖREV 4 ÇÖZÜMÜ: İlişkisel dizi üzerinde foreach ile gezinme ve kontrol.
    foreach ($ogrenciVeritabani as $okulNo => $bilgiler) {
        if ($okulNo == $arananNo) {
            // Eşleşme bulundu, session'a kaydediyoruz 
            $_SESSION['aktif_ogrenci'] = $bilgiler['ad'];
            
            // Fonksiyon çağrımı
            $durum = gectiMi($bilgiler['not']);
            
            // Ekrana çıktı
            echo "<p style='color:blue;'>Hoş geldin, <strong>" . $_SESSION['aktif_ogrenci'] . "</strong>. Yıl Sonu Notun: " . $bilgiler['not'] . " - Durum: " . $durum . "</p>";
            
            $bulundu = true;
            break; // Öğrenciyi bulduğumuz için döngünün devam etmesine gerek yok.
        }
    }
    
    if (!$bulundu) {
        echo "<p style='color:red;'>Sistemde böyle bir öğrenci numarası bulunamadı!</p>";
    }
}
?>

<hr>
<h3>Not Sorgulama Sistemi</h3>
<form action="" method="POST"> 
   Öğrenci No Giriniz: <input type="text" name="ogrenci_no" required>
   <input type="submit" value="Sorgula">
</form>
<?php
// --- İK Personel Bilgi Ekranı (ÇÖZÜM) ---
$calisanAd = "Zeynep";
$tecrubeYili = 5;
$tabanMaas = 20000;
$primTutari = 2000;

// GÖREV 1 ÇÖZÜMÜ: Tek tırnakta değişkenler işlenmez. Çift tırnak kullanılmalı. 
// Metnin içindeki "Değerli" kelimesinin çift tırnaklarını korumak için kaçış karakteri (\") kullanıldı.
echo "Hoş geldin $calisanAd. Şirketimizin \"Değerli\" personelisin! <br>";

// GÖREV 2 ÇÖZÜMÜ: Matematiksel işlem önceliği (Parantezler > Çarpma > Toplama)
// Hatalı kod önce primi 2 ile çarpıp sonra maaşı ekliyordu. Parantez ile düzeltildi.
$odenecekMaas = ($tabanMaas + $primTutari) * 2;
echo "Ödenecek Toplam Maaş: " . $odenecekMaas . " TL <br>"; 
// Doğru Çıktı: 44000 TL

// GÖREV 3 ÇÖZÜMÜ: Denk mi? (===) Eşit mi? (==)
// === (Denktir) operatörü hem tür (integer vs string) hem değer kontrolü yapar. 
// "5" (String) ve 5 (Integer) denk değildir. Sadece değer kontrolü yapmak için == (Eşittir) kullanılmalıdır.
$hedefTecrube = "5";
$durum = ($tecrubeYili == $hedefTecrube) ? "Plaket Kazandınız!" : "Plaket İçin Erken.";
echo "Plaket Durumu: " . $durum . "<br>";

// GÖREV 4 ÇÖZÜMÜ: Artırma Operatörü (Prefix/Postfix)
// $tecrubeYili++ (Sonek) önce değeri yazdırır, sonra artırır. 
// ++$tecrubeYili (Önek) ise önce artırır, sonra yazdırır.
echo "Yeni Tecrübe Yılınız: " . ++$tecrubeYili . "<br>";
?>
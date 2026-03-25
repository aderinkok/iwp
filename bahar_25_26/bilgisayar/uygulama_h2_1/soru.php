<?php
// --- İK Personel Bilgi Ekranı ---
$calisanAd = "Zeynep";
$tecrubeYili = 5;
$tabanMaas = 20000;
$primTutari = 2000;

// GÖREV 1: Çift Tırnak / Tek Tırnak ve Kaçış Karakteri Sorunu
// Aşağıdaki satırın çıktısı 'Hoş geldin Zeynep. Şirketimizin "Değerli" personelisin!' olmalıdır.
// Ancak şu an değişken işlenmiyor. Bu satırı doğru tırnak kurallarıyla yeniden yazın.
echo 'Hoş geldin $calisanAd. Şirketimizin "Değerli" personelisin! <br>';

// GÖREV 2: İşlem Önceliği Hatası
// İstenen: Personelin taban maaşı ile prim tutarı toplanmalı, çıkan sonuca iki katı ( * 2 ) zam yapılmalıdır.
// Aşağıdaki hesaplama hatalı sonuç veriyor. Matematiksel işlem önceliğini kullanarak düzeltin.
$odenecekMaas = $tabanMaas + $primTutari * 2;
echo "Ödenecek Toplam Maaş: " . $odenecekMaas . " TL <br>";

// GÖREV 3: Denk mi? (===) Eşit mi? (==)
// Sistem sadece tecrübesi sayısal olarak tam 5 olanlara plaket vermelidir.
// Ancak aşağıdaki if bloğu çalışmıyor. İlgili karşılaştırma operatörünü düzelterek çalışmasını sağlayın.
$hedefTecrube = "5";
$durum = ($tecrubeYili === $hedefTecrube) ? "Plaket Kazandınız!" : "Plaket İçin Erken.";
echo "Plaket Durumu: " . $durum . "<br>";

// GÖREV 4: Artırma Operatörü (Prefix/Postfix)
// Aşağıdaki echo komutu ekrana direkt "Yeni Tecrübe Yılınız: 6" yazdırmalıdır. 
// Ancak şu an önce 5 yazdırıp, sonra arkada 6 yapıyor. İlgili kodu düzeltin.
echo "Yeni Tecrübe Yılınız: " . $tecrubeYili++ . "<br>";
?>
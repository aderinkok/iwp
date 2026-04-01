<?php
echo "<b>Soru 1 Çıktısı:</b><br>";

$matris2x3 = [];
$sayac = 1;

// Dış döngü satırları temsil eder (0 ve 1. satır -> Toplam 2 satır)
for ($i = 0; $i < 2; $i++) {
    // İç döngü sütunları temsil eder (0, 1 ve 2. sütun -> Toplam 3 sütun)
    for ($j = 0; $j < 3; $j++) {
        $matris2x3[$i][$j] = $sayac; // Diziye değeri atıyoruz
        echo $matris2x3[$i][$j] . " "; // Ekrana yazdırıyoruz
        $sayac++; // Sayacı bir artırıyoruz
    }
    echo "<br>"; // Her satır bittiğinde bir alt satıra geçiyoruz
}
/*
Açıklama:

    Dış döngü ($i) yavaş çalışır, iç döngü ($j) hızlı çalışır. $i=0 iken iç döngü tamamen döner ($j 0, 1, 2 olur). Bu sayede ilk satır olan 1 2 3 doldurulur ve yazdırılır.

    Bağımsız bir $sayac değişkeni kullanmak, sayıların döngü indekslerinden bağımsız olarak 1'den 6'ya kadar artmasını sağlar.
    */


echo "<br><b>Soru 2 Çıktısı:</b><br>";

$matris3x2 = [];
$sayac = 1;

// Dış döngü satırları temsil eder (0, 1 ve 2. satır -> Toplam 3 satır)
for ($i = 0; $i < 3; $i++) {
    // İç döngü sütunları temsil eder (0 ve 1. sütun -> Toplam 2 sütun)
    for ($j = 0; $j < 2; $j++) {
        $matris3x2[$i][$j] = $sayac;
        echo $matris3x2[$i][$j] . " ";
        $sayac++;
    }
    echo "<br>";
}
/*
Açıklama:

    Mantık Soru 1 ile tamamen aynıdır. Tek fark, döngülerin bitiş noktalarıdır.

    Satır sayısını 3 yapmak için dış döngüyü $i < 3 olarak ayarladık.

    Sütun sayısını 2 yapmak için iç döngüyü $j < 2 olarak ayarladık.
    */


echo "<br><b>Soru 3 Düzeltilmiş Çıktı:</b><br>";

$matris = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// DÜZELTME 1: İndeksler 0'dan başladığı için 3 elemanlı dizide son indeks 2'dir.
// Bu yüzden <= 3 yerine < 3 (veya <= 2) kullanılmalıdır. Aksi halde "Undefined offset" hatası alınır.
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        
        // DÜZELTME 2: Karşılaştırma operatörü == (veya ===) olmalıdır. 
        // Tek eşittir (=) atama yapar ve her zaman 'true' döner.
        if ($i == $j) {
            echo $matris[$i][$j] . " ";
        }
        
    }
}
/*
Açıklama:

    Sınır Hatası (Out of Bounds): Diziler 0. indeksten başlar. 3 elemanlı bir dizinin indeksleri 0, 1, 2'dir. Eğer döngüyü <= 3 yaparsan, kod 3. indeksi arar ve PHP "Undefined offset" (Tanımsız indeks) uyarısı verir.

    Atama vs Karşılaştırma Hatası: if ($i = $j) ifadesi, $j'nin değerini $i'ye atar ve koşul işlemi her zaman doğru kabul edilir (sıfır hariç). Eşitliği kontrol etmek için çift eşittir (==) kullanılmalıdır.
    */



    //Cevap 4


echo "<br><b>Orijinal 4x2 Matris:</b><br>";

$matris4x2 = [];
$sayac = 1;

// 1. ADIM: 4x2 Orijinal Matrisi Oluşturma
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $matris4x2[$i][$j] = $sayac;
        echo $matris4x2[$i][$j] . " ";
        $sayac++;
    }
    echo "<br>";
}

echo "<br><b>Dönüştürülmüş 2x4 Matris:</b><br>";

// 2. ADIM: 4x2'yi 2x4'e Dönüştürme
$matris2x4 = [];
$yeniSatir = 0;
$yeniSutun = 0;

// Orijinal matrisi okumak için tekrar dönüyoruz
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        
        // Eski matristeki değeri yeni matrise aktarıyoruz
        $matris2x4[$yeniSatir][$yeniSutun] = $matris4x2[$i][$j];
        echo $matris2x4[$yeniSatir][$yeniSutun] . " ";
        
        // Yeni matrisin sütun indeksini ilerletiyoruz
        $yeniSutun++;
        
        // Eğer sütun sayısı 4'e ulaştıysa (0, 1, 2, 3) 
        // Sütunu sıfırla ve yeni satıra geç!
        if ($yeniSutun == 4) {
            $yeniSutun = 0; // Sütunu başa sar
            $yeniSatir++;   // Satırı bir aşağı kaydır
            echo "<br>";    // Ekranda da alt satıra geç
        }
    }
}

/*
Açıklama:

    Burada en kritik nokta indeks takibidir. Orijinal matrisi dönerken $i ve $j değişkenleri kullanılır, ancak yeni matrisi doldururken onun boyut kurallarına (2 satır, 4 sütun) uymamız gerekir.

    Bu yüzden yeni matrisin satır ve sütunlarını takip etmek için dışarıda $yeniSatir ve $yeniSutun adında iki ayrı rehber değişken tanımladık.

    İç döngü her çalıştığında $yeniSutun artar. Eğer $yeniSutun 4 olursa (yani 4 eleman yan yana dizildiyse), bir alt satıra geçmesi gerektiğini anlar ve satırı artırıp sütunu sıfırlar. Bu, bir daktilonun satır sonuna geldiğinde başa dönmesi mantığıyla tamamen aynıdır.

*/


// Başlangıç: 4x2 matrisimizi tanımlıyoruz
$x = [
    [1, 2],
    [3, 4],
    [5, 6],
    [7, 8]
];

echo "<b>Orijinal Matris Durumu:</b> (Arka planda 4x2)<br>";

// 1. ADIM: $x içindeki tüm elemanları sırayla tek boyutlu bir düz listeye çek
$geciciListe = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $geciciListe[] = $x[$i][$j]; // Verileri güvene aldık
    }
}

// 2. ADIM: Orijinal $x değişkenini sıfırla (Eski 4x2 yapısını yıkıyoruz)
$x = [];

// 3. ADIM: $x değişkenini 2 satır, 4 sütun olacak şekilde baştan inşa et
$indeks = 0; // Düz listedeki elemanları sırayla almak için
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $x[$i][$j] = $geciciListe[$indeks]; // Yeni koordinatlara veriyi yerleştir
        $indeks++;
    }
}

// 4. ADIM: Sonucu Yazdır (Artık $x değişkeni 2x4 formatında!)
echo '<br><b>Dönüştürülmüş $x Matrisi (2x4):</b><br>';
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $x[$i][$j] . " ";
    }
    echo "<br>";
}

/*
Açıklama:

    Veri Kaybını Önlemek: Doğrudan $x[0][2] = $x[1][0] gibi atamalar yapmaya kalkarsak, döngü ilerledikçe eski verilerin üzerine yazıp onları sonsuza dek kaybederiz. Bu yüzden matrisin şeklini kökten değiştirirken verileri bir $geciciListe içine düz bir sıra halinde (1, 2, 3, 4, 5, 6, 7, 8) aldık.

    Yeniden İnşa ($x = []): Değişkeni [] ile sıfırlamak, bellekteki eski 4x2'lik oda yapısını yıkar. Artık $x bomboştur.

    Yeni Format: Ardından klasik 2x4 (dış döngü 2, iç döngü 4) döngümüzü kurduk ve düz listeye dizdiğimiz verileri sırasıyla bu yeni odalara yerleştirdik.

    */

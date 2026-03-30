<?php
/*
Soru 1: Sıfırdan Kodlama (2x3 Matris Oluşturma)
Boş bir dizi (array) ve iç içe for döngüleri kullanarak 2 satır ve 3 sütundan oluşan aşağıdaki matrisi oluşturun ve ekrana (HTML <br> etiketlerini kullanarak) yazdırın.
Beklenen Çıktı:
1 2 3
4 5 6

Soru 2: Sıfırdan Kodlama (3x2 Matris Dönüşümü)
Bu kez 1'den 6'ya kadar olan sayıları kullanarak 3 satır ve 2 sütundan oluşan bir matris oluşturun. Yine boş bir dizi ile başlayın ve iç içe döngülerle değerleri atayıp ekrana yazdırın.
Beklenen Çıktı:
1 2
3 4
5 6

Soru 3: Hata Ayıklama (Köşegen Elemanları Bulma)
Aşağıdaki kod, 3x3'lük bir matrisin sadece ana köşegeninde bulunan elemanları (1, 5 ve 9) bulup yazdırmayı hedefliyor. Ancak kodda iki adet kritik hata (mantık/sözdizimi) var. Bu hataları bulun ve kodu düzeltin.
*/
//Soru1





//Soru2






// Soru 3
$matris = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Köşegen elemanları yazdırmaya çalışan hatalı kod:
for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        // Eğer satır ve sütun indeksi eşitse yazdır
        if ($i = $j) {
            echo $matris[$i][$j] . " ";
        }
    }
}


/*Soru 4

Soru 4: Matris Boyutunu Dönüştürme (4x2'den 2x4'e)
Öncelikle 1'den 8'e kadar sayıları içeren 4 satır ve 2 sütunlu (4x2) bir matris oluşturun. Ardından, bu matrisin içindeki verileri döngülerle okuyarak yeni bir 2 satır ve 4 sütunlu (2x4) matrise aktarın. Sonuçta her iki matrisi de ekrana yazdırın.

Beklenen Çıktı:
Orijinal 4x2 Matris:
1 2
3 4
5 6
7 8

Dönüştürülmüş 2x4 Matris:
1 2 3 4
5 6 7 8
*/

//Soru 4




/*
Soru 5: Aynı Değişken Üzerinde Boyut Dönüşümü (In-place Reshape)
İçinde 1'den 8'e kadar sayıların bulunduğu 4x2 boyutunda bir $x matrisi oluşturun. Ardından, başka bir matris değişkeni kullanmadan, sadece mevcut $x değişkenini işleyerek boyutunu 2x4 yapacak şekilde yeniden boyutlandırın. İşlem bittikten sonra dönüştürülmüş $x matrisini ekrana yazdırın.

Beklenen Çıktı:
1 2 3 4
5 6 7 8
*/

//Soru 5


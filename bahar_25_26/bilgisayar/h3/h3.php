<?php
/*
 * =========================================================================
 * İLERİ WEB PROGRAMLAMA - 3: Döngüler, Fonksiyonlar ve Diziler
 * =========================================================================
 */

// -------------------------------------------------------------------------
// 1. DÖNGÜLER (LOOPS) 
// -------------------------------------------------------------------------
// Belirli bir kod bloğunu birden fazla kez çalıştırmak için kullanılır. 
// Genellikle bir koşul doğru olduğu sürece veya diziler üzerinde işlem yapmak için tercih edilir.
// 

/* --- A. FOR Döngüsü --- */
// Başlangıç ve bitiş değerleri belli olan, sayaç kontrollü durumlar için uygundur.
echo "<b>For Döngüsü:</b><br>";
for ($i = 1; $i <= 5; $i++) { 
    echo "Sayı: $i <br>"; 
}
echo "<br>";

echo "<b>Hatalı For Döngüsü (Sonsuz Döngü):</b><br>";
/*for ($j = 100; $j<=25; $j-=5){
    echo "J Değişkeni Sayı: $j <br>";
}*/

/* --- B. WHILE Döngüsü --- */
// Koşul doğru olduğu sürece çalışır, koşul her adımda (başlangıçta) kontrol edilir. 
echo "<b>While Döngüsü:</b><br>";
$x = 1; 
while ($x <= 3) { 
    echo "Değer: $x <br>"; 
    $x++;
}
echo "<br>";

/* --- C. DO-WHILE Döngüsü --- */
// Koşul, döngü çalıştıktan SONRA kontrol edildiği için koşul yanlış olsa bile en az BİR KEZ çalışması garanti edilir.
echo "<b>Do-While Döngüsü:</b><br>";
$y = 1; 
do { 
    echo "Sayı: $y <br>"; 
    $y++; 
} while ($y <= 3); 

/*do { 
    echo "Sayı: $y <br>"; 
    $y++; 
} while ($y >= 3);
echo "<br>";*/

/* --- D. FOREACH Döngüsü --- */
// Diziler (arrays) ve koleksiyonlar üzerinde dolaşmak için özel olarak tasarlanmıştır. 
echo "<b>Foreach Döngüsü:</b><br>";
$renkler = ["kırmızı", "mavi", "yeşil"]; 


//foreach ($renkler as $key => $value) { 
foreach ($renkler as $renk) { 
    echo "Renk: $renk <br>"; 
}
echo "<br>";

for ($i=0;$i<10;$i++){
       if($i==3){
        continue; // O anki adımı atlar, döngü devam eder
    }
    echo "Break Değişkeni Sayı: $i <br>";
 
    if($i==5){
        break; // Döngüyü tamamen durdurur
    }   
}

/* --- Break ve Continue --- */
// break: Döngüyü tamamen durdurur ve döngüden çıkar. 
// continue: Döngünün o anki adımını atlayıp bir sonraki adıma geçer.


// -------------------------------------------------------------------------
// 2. FONKSİYONLAR (FUNCTIONS) 
// -------------------------------------------------------------------------
// Belirli bir işlemi gerçekleştirmek için oluşturulan özelleştirilmiş kod bloklarıdır. 
// Kod tekrarını önler, okunabilirliği artırır ve bakımı kolaylaştırır. 
// PHP'de String, Sayısal ve Dizi işlemleri için yüzlerce yerleşik (built-in) fonksiyon vardır.

/* --- A. Parametresiz Fonksiyon --- */


function selamVer() { 
    echo "Merhaba, PHP!<br>"; 
}
 selamVer();// Fonksiyonlar çağrılmadıkça çalıştırılmaz. 

/* --- B. Parametre Alan ve Değer Döndüren Fonksiyon --- */
function topla($a, $b) { 
    return $a + $b; // return ile işlem sonucu geriye döndürülür. 
}

echo "Toplam: " . topla(5, 8) . "<br>"; 

/* --- C. Varsayılan (Default) Parametreli Fonksiyon --- */
function merhaba($isim = "Ziyaretçi") { 
    // Eğer fonksiyona değer gönderilmezse, varsayılan değer kullanılır. 
    echo "Merhaba, $isim!<br>"; 
    }
merhaba("Abdulmelik"); // Çıktı: Merhaba, Abdulmelik! 
merhaba();             // Çıktı: Merhaba, Ziyaretçi! 

/* --- D. Referans ile Parametre Gönderimi (&$degisken) --- */
// Değişkenin kopyası değil, doğrudan bellekteki kendisi fonksiyona gönderilir. İçerideki değişiklik dışarıyı da etkiler.
function degeriArtirNormal($sayi) { 
    $sayi++; 
}
function degeriArtir(&$sayi) { 
    $sayi++; 
}
$deger = 5;
$degerNormal = 10; 
echo "Başlangıç değeri Referans: $deger <br>"; // Çıktı: 5
echo "Başlangıç değeri Normal: $degerNormal <br>"; // Çıktı: 5
degeriArtir($deger); 
degeriArtirNormal($degerNormal); 
echo "Referans ile artan değer: $deger <br><br>"; // Çıktı: 6 
echo "Normal fonksiyon ile artan değer: $degerNormal <br><br>"; // Çıktı: 6 


// -------------------------------------------------------------------------
// 3. DİZİLER (ARRAYS) 
// -------------------------------------------------------------------------
// Birden fazla değeri tek bir değişken altında saklamak için kullanılan veri yapılarıdır. 
// array() fonksiyonu veya köşeli parantez [] kullanılarak oluşturulabilir.

/* --- A. İndeksli Diziler --- */
// Elemanlara yalnızca sayısal anahtarlarla erişilir. Anahtarlar genellikle 0'dan başlar. 

$mevsimler = ["İlkbahar", "Yaz", "Sonbahar", "Kış"]; 
echo "İlk mevsim: " . $mevsimler[0] . "<br>"; // Çıktı: İlkbahar 

// Diziye yeni eleman ekleme:
$renkler2 = ["Kırmızı", "Mavi"]; 
$renkler2[] = "Yeşil"; // Doğrudan sonuna yeni eleman ekler 
$renkler2[2] = "Sarı"; // Var olan bir indeksi günceller veya yeni bir indeks oluşturur
echo $renkler2[2];


/* --- B. İlişkisel Diziler (Associative Arrays) --- */
// Anahtarlar (key), string veya sayı olabilen özelleştirilmiş değerlerdir. Veriyi açıklayıcı depolamak için idealdir.

$iliskiselDizi = ["isim" => "Abdulmelik", "soyisim" => "Derinkök", "yas" => 18]; 
$deneme = ["isim" => "Zeynep","soyisim"=>"Derinkök", "yas"=>3];
echo "Öğrenci: " . $iliskiselDizi["isim"] . " " . $iliskiselDizi["soyisim"] . "<br>"; 

// İlişkisel diziye yeni eleman ekleme:
$iliskiselDizi["not"] = 85; // Yeni bir anahtar-değer çifti ekler 
$deneme["not"]= 90;

/* --- C. Çok Boyutlu Diziler (Multidimensional Arrays) --- */
// Dizi içinde başka diziler barındıran yapılardır. 
$sinif = [
    ["isim" => "Abdulmelik", "yas" => 18],
    ["isim" => "Zeynep", "yas" => 23]      
];
echo "İlk öğrencinin adı: " . $sinif[0]["isim"] . "<br>"; // Çıktı: Abdulmelik


$bilgisayar = [ 
    "bolum"=> "Bilgisayar", 
    "ogrenciler"=>[
        ["ad"=> "Abdulmelik", "soyad"=> "Derinkök", "yas"=>18],
        ["ad"=> "Ali", "soyad"=> "Veli", "yas"=>19],
        ["ad"=> "Ayşe", "soyad"=> "Demir", "yas"=>20]
    ]    
    ];

    echo $bilgisayar["bolum"]."<br>"; 
    echo $bilgisayar["ogrenciler"][2]["soyad"]."<br>"; 

   /* 
   
    1  2  3 
    4  5  6
    
    1 4
    2 5
    3 6
*/

$sayac=1;
for($i=1;$i<=2;$i++){
    for($j=1;$j<=4;$j++){
        
          echo $sayac." ";
        
        
        $sayac++;
    }
    
    echo "<br>";
}
?>
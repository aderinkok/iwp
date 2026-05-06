<?php
/*
 * =========================================================================
 * İLERİ WEB PROGRAMLAMA - 5: Veritabanı İşlemleri (MySQL ve PDO ile CRUD)
 * =========================================================================
 */

// -------------------------------------------------------------------------
// 0. VERİTABANI HAZIRLIĞI ( phpMyAdmin üzerinden yapılacak)
// -------------------------------------------------------------------------
/*
  CREATE DATABASE okul_db;
  USE okul_db;
  CREATE TABLE ogrenci_notlar (
      id INT AUTO_INCREMENT PRIMARY KEY,
      ad_soyad VARCHAR(100) NOT NULL,
      vize INT DEFAULT 0,
      final INT DEFAULT 0,
      butunleme INT DEFAULT NULL
  );
*/

// -------------------------------------------------------------------------
// 1. VERİTABANI BAĞLANTISI (PDO KULLANIMI)
// -------------------------------------------------------------------------
/*
 * PHP ile MySQL veritabanı işlemleri gerçekleştirirken PDO (PHP Data Objects) kullanmak, güvenlik, esneklik ve performans açısından büyük avantajlar sağlar. 
 * PDO, farklı veritabanı sistemleriyle çalışabilen tutarlı bir arayüz sunar ve SQL injection gibi güvenlik açıklarını önlemeye yardımcı olur.
 */

$host = 'localhost'; // Veritabanı sunucusu 
$dbname = 'okul_db'; // Veritabanı adı
$user = 'root'; // Veritabanı kullanıcı adı 
$pass = ''; // Veritabanı şifresi 

echo "<h3>1. PDO Bağlantı Durumu</h3>";

try {
    // PDO bağlantısı oluştur 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    // Hata modunu istisna (exception) olarak ayarla 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p style='color:green;'>Veritabanına bağlantı başarılı!</p>";
} catch (PDOException $e) {
    // Hata durumunda catch bloğu devreye girer 
    die("<p style='color:red;'>Bağlantı hatası: " . $e->getMessage() . "</p>");
}

echo "<hr>";

// -------------------------------------------------------------------------
// 2. CREATE (OLUŞTURMA - Veri Ekleme)
// -------------------------------------------------------------------------
/*
 * Veritabanında bir tabloya yeni bir kayıt eklemek için INSERT sorgusu kullanılır.
 * Öğrencinin vize ve final notunu sisteme ekleyelim.
 */
echo "<h3>2. Create (Yeni Not Girişi Ekleme)</h3>";

try {
    $yeniOgrenci = "Ahmet Yılmaz";
    $vizeNotu = 45;
    $finalNotu = 30; // Finalden düşük aldığı için bütünlemeye kalacak kurgusu
    
    // SQL sorgusu 
    $sqlInsert = "INSERT INTO ogrenci_notlar (ad_soyad, vize, final) VALUES (:ad_soyad, :vize, :final)";
    
    // Hazırlanmış ifade (prepared statement) oluştur
    $stmtInsert = $pdo->prepare($sqlInsert);
    
    // Parametreleri bağla ve sorguyu çalıştır 
    // Çalıştırmadan önce tablonun boş olup olmadığını kontrol edelim ki sayfayı her yenilediğimizde aynı öğrenciyi defalarca eklemesin
    $kontrol = $pdo->query("SELECT COUNT(*) FROM ogrenci_notlar WHERE ad_soyad = 'Ahmet Yılmaz'")->fetchColumn();
    
    if($kontrol == 0) {
        $stmtInsert->execute(['ad_soyad' => $yeniOgrenci, 'vize' => $vizeNotu, 'final' => $finalNotu]);
        echo "<p>Yeni öğrenci kaydı eklendi: $yeniOgrenci (Vize: $vizeNotu, Final: $finalNotu)</p>";
    } else {
        echo "<p>Öğrenci zaten sistemde kayıtlı.</p>";
    }

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage() . "<br>";
}

echo "<hr>";

// -------------------------------------------------------------------------
// 3. UPDATE (GÜNCELLEME - Veri Değiştirme)
// -------------------------------------------------------------------------
/*
 * Mevcut bir kaydı güncellemek için UPDATE sorgusu kullanılır.
 * Öğrenci finalden düşük aldığı için bütünleme sınavına girdi. Notunu güncelleyelim.
 */
echo "<h3>3. Update (Bütünleme Notunu Girme)</h3>";

try {
    $guncellenecekOgrenci = "Ahmet Yılmaz";
    $butunlemeNotu = 75; // Bütünlemede yüksek aldı
    
    // SQL sorgusu 
    $sqlUpdate = "UPDATE ogrenci_notlar SET butunleme = :butunleme WHERE ad_soyad = :ad_soyad";
    
    // Hazırlanmış ifade (prepared statement) oluştur 
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    
    // Parametreleri bağla ve sorguyu çalıştır 
    $stmtUpdate->execute(['butunleme' => $butunlemeNotu, 'ad_soyad' => $guncellenecekOgrenci]);
    
    echo "<p>$guncellenecekOgrenci adlı öğrencinin bütünleme notu sisteme girildi ($butunlemeNotu).</p>";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage() . "<br>";
}

echo "<hr>";

// -------------------------------------------------------------------------
// 4. READ (OKUMA - Verileri Listeleme)
// -------------------------------------------------------------------------
/*
 * Veritabanından kayıtları okumak için SELECT sorgusu kullanılır.
 * Sınıftaki tüm öğrencilerin not durumlarını çekip listeleyelim.
 */
echo "<h3>4. Read (Öğrenci Not Listesini Görüntüleme)</h3>";

try {
    // SQL sorgusu 
    $sqlSelect = "SELECT * FROM ogrenci_notlar";
    
    // Sorguyu çalıştır 
    $stmtSelect = $pdo->query($sqlSelect);
    
    // Tüm kayıtları al 
    $ogrenciler = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr style='background-color:#f2f2f2;'><th>ID</th><th>Ad Soyad</th><th>Vize</th><th>Final</th><th>Bütünleme</th><th>Durum</th></tr>";
    
    // Kayıtları ekrana yazdır 
    foreach ($ogrenciler as $ogrenci) {
        $id = $ogrenci['id'];
        $adSoyad = $ogrenci['ad_soyad'];
        $vize = $ogrenci['vize'];
        $final = $ogrenci['final'];
        $butunleme = $ogrenci['butunleme'] !== null ? $ogrenci['butunleme'] : "Girmedi";
        
        // Geçme Notu Hesaplama (Vize %40, Final/Bütünleme %60)
        $gecerliFinal = ($ogrenci['butunleme'] !== null && $ogrenci['butunleme'] > $final) ? $ogrenci['butunleme'] : $final;
        $ortalama = ($vize * 0.4) + ($gecerliFinal * 0.6);
        $durum = ($ortalama >= 50) ? "<span style='color:green;'>Geçti ($ortalama)</span>" : "<span style='color:red;'>Kaldı ($ortalama)</span>";
        
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$adSoyad</td>";
        echo "<td>$vize</td>";
        echo "<td>$final</td>";
        echo "<td>$butunleme</td>";
        echo "<td><strong>$durum</strong></td>";
        echo "</tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage() . "<br>";
}

echo "<hr>";

// -------------------------------------------------------------------------
// 5. DELETE (SİLME - Veri Kaldırma)
// -------------------------------------------------------------------------
/*
 * Bir kaydı silmek için DELETE sorgusu kullanılır.
 * Not: Bu işlemi doğrudan çalıştırırsak eklediğimiz kaydı anında sileceği için tabloyu boş görürüz.
 * Bu sebeple derste canlı göstermek için butona bağlı bir kurgu yapıyoruz.
 */
echo "<h3>5. Delete (Kayıt Silme)</h3>";

if(isset($_POST['sil_id'])) {
    try {
        $silinecekId = $_POST['sil_id'];
        
        // SQL sorgusu 
        $sqlDelete = "DELETE FROM ogrenci_notlar WHERE id = :id";
        
        // Hazırlanmış ifade (prepared statement) oluştur 
        $stmtDelete = $pdo->prepare($sqlDelete);
        
        // Parametreleri bağla ve sorguyu çalıştır 
        $stmtDelete->execute(['id' => $silinecekId]);
        
        echo "<p style='color:red;'>ID'si $silinecekId olan kayıt veritabanından başarıyla silindi!</p>";
        echo "<p><em>Silinen kaydı görmek için sayfayı yenileyiniz.</em></p>";
    } catch (PDOException $e) {
        echo "Hata: " . $e->getMessage() . "<br>";
    }
}
?>

<form action="" method="POST">
    <label>Silmek İstediğiniz Öğrencinin ID'sini Girin:</label>
    <input type="number" name="sil_id" required>
    <input type="submit" value="Kaydı Sil" style="background-color: #ff4c4c; color: white; border: none; padding: 5px 10px; cursor: pointer;">
</form>
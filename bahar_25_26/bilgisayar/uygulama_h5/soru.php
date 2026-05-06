<?php
/*
 Kütüphane Kitap Yönetim Sistemi ve Güvenlik

Süre: 40-45 Dakika


Aşağıda, kütüphaneye yeni kitap eklemeyi ve mevcut kitapları listelemeyi sağlayan bir PHP betiği bulunmaktadır. Ancak kodu yazan kişi veritabanı güvenliği konusunda bilgisiz olduğu için sisteme devasa bir SQL Injection açığı bırakmıştır. Ayrıca listeleme döngüsünü ve silme işlemini yarım bırakmıştır.


Güvenlik Açığını Kapatın (Create): INSERT işlemi şu an doğrudan $_POST verilerini alarak yapılmaktadır. Bu yapıyı silip, PDO'nun güvenli yöntemi olan prepare() ve execute() (Hazırlanmış İfadeler) yapısına dönüştürün .

Kategori Fonksiyonunu Yazın: Kitapların sayfa sayısına göre kategorisini belirleyen kategoriBul($sayfa) fonksiyonunu tamamlayın. Sayfa sayısı 300'den büyükse "Kalın Kitap", 300 veya daha az ise "İnce Kitap" döndürmelidir .

Listelemeyi Tamamlayın (Read): Veritabanından çekilen $kitaplar dizisini ekrana bir HTML tablosu olarak basmak için eksik bırakılan foreach döngüsünü tamamlayın .


Silme İşlemi Ekleyin (Delete): Eğer URL'de ?sil_id=5 gibi bir GET parametresi varsa, o ID'ye sahip kitabı veritabanından güvenli bir şekilde silen PDO DELETE bloğunu yazın .

*/

// Veritabanı Bağlantısı (Varsayalım ki kutuphane_db adında bir veritabanı ve kitaplar tablosu var)
$host = 'localhost'; 
$dbname = 'kutuphane_db'; 
$user = 'root'; 
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

// GÖREV 4: GET ile 'sil_id' parametresi gelmişse silme (DELETE) işlemini buraya yazın.


// GÖREV 2: kategoriBul($sayfa) fonksiyonunu buraya yazın.



// Form Gönderildiğinde Yeni Kitap Ekleme (CREATE)
if (isset($_POST['kitap_adi'])) {
    $kitapAdi = $_POST['kitap_adi'];
    $sayfaSayisi = $_POST['sayfa_sayisi'];

    // GÖREV 1: DİKKAT! Aşağıdaki kod SQL Injection'a tamamen açıktır. 
    // Bu yapıyı silin ve güvenli (prepare/execute) yöntemiyle tekrar yazın.
    $sql = "INSERT INTO kitaplar (baslik, sayfa) VALUES ('$kitapAdi', '$sayfaSayisi')";
    $pdo->query($sql); 
    
    echo "<p>Kitap Eklendi!</p>";
}

// Kitapları Çekme (READ)
$stmt = $pdo->query("SELECT * FROM kitaplar");
$kitaplar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="" method="POST">
    Kitap Adı: <input type="text" name="kitap_adi" required>
    Sayfa Sayısı: <input type="number" name="sayfa_sayisi" required>
    <input type="submit" value="Kitabı Ekle">
</form>
<hr>

<h3>Kitap Listesi</h3>
<table border="1">
    <tr>
        <th>ID</th><th>Kitap Adı</th><th>Sayfa</th><th>Kategori</th><th>İşlem</th>
    </tr>
    <?php
    // GÖREV 3: $kitaplar dizisini foreach ile döndürerek yukarıdaki tablo yapısına uygun şekilde ekrana basın.
    // İpucu: Kategori sütununda yazdığınız kategoriBul() fonksiyonunu çağırın.
    // İşlem sütununa silme işlemi için: <a href="?sil_id=İLGİLİ_ID">Sil</a> linki koyun.
    
    ?>
</table>
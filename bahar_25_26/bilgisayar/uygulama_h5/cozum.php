<?php
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

// GÖREV 4 ÇÖZÜMÜ: DELETE İşlemi (Güvenli)
if (isset($_GET['sil_id'])) { 
    $sil_id = $_GET['sil_id'];
    $stmtSil = $pdo->prepare("DELETE FROM kitaplar WHERE id = :id"); 
    $stmtSil->execute(['id' => $sil_id]); 
    echo "<p style='color:red;'>Kitap sistemden silindi!</p>";
}

// GÖREV 2 ÇÖZÜMÜ: Fonksiyon
function kategoriBul($sayfa) { 
    return ($sayfa > 300) ? "Kalın Kitap" : "İnce Kitap";
}

// GÖREV 1 ÇÖZÜMÜ: CREATE İşlemi (Güvenli - SQL Injection Korumalı)
if (isset($_POST['kitap_adi'])) { 
    $kitapAdi = $_POST['kitap_adi'];
    $sayfaSayisi = $_POST['sayfa_sayisi'];

    // Hazırlanmış ifade (prepared statement) kullanımı 
    $sqlEkle = "INSERT INTO kitaplar (baslik, sayfa) VALUES (:baslik, :sayfa)"; 
    $stmtEkle = $pdo->prepare($sqlEkle); 
    $stmtEkle->execute(['baslik' => $kitapAdi, 'sayfa' => $sayfaSayisi]); 
    
    echo "<p style='color:green;'>Kitap Güvenle Eklendi!</p>";
}

// READ İşlemi
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
    // GÖREV 3 ÇÖZÜMÜ: Döngü ve Listeleme
    foreach ($kitaplar as $kitap) { 
        echo "<tr>";
        echo "<td>" . $kitap['id'] . "</td>";
        echo "<td>" . $kitap['baslik'] . "</td>";
        echo "<td>" . $kitap['sayfa'] . "</td>";
        echo "<td>" . kategoriBul($kitap['sayfa']) . "</td>";
        echo "<td><a href='?sil_id=" . $kitap['id'] . "'>Sil</a></td>";
        echo "</tr>";
    }
    ?>
</table>
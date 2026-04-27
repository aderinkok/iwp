<?php
/*
 * =========================================================================
 * İLERİ WEB PROGRAMLAMA - 4: Süper Global Değişkenler ve Form İşlemleri
 * =========================================================================
 */

// Oturum verilerini (Session) kullanabilmek için sayfanın en başında session başlatılmalıdır.
session_start();

// -------------------------------------------------------------------------
// 1. GLOBAL DEĞİŞKENLER (SUPERGLOBALS)
// -------------------------------------------------------------------------
/*
 * Superglobal değişkenler, betiğin herhangi bir yerinden (fonksiyon içi dahil) erişilebilen 
 * ve özel amaçlar için kullanılan önceden tanımlanmış PHP değişkenleridir
 * Büyük harfle yazılırlar ve genellikle $_ ile başlarlar
 */

echo "<h3>1. Superglobals (Süper Globaller)</h3>";

/* --- A. $GLOBALS --- */
// Amacı: Global kapsamdaki tüm değişkenlere erişmek için kullanılır
$isim = "Abdulmelik"; 
echo "\$GLOBALS Kullanımı: " . $GLOBALS['isim'] . "<br>"; 

/* --- B. $_SERVER --- */
// Amacı: Sunucu, başlıklar ve çalışma ortamıyla ilgili bilgileri içerir
// Kullanım Alanı: URL, IP adresi, dosya yolları gibi bilgilere erişmek.

echo "SERVER<br>";

$test = [1,2,3,4,5];
foreach($_SERVER as $key => $value) {
    //echo "<b>$key</b>: $value <br>";
}
echo "<br>-----";
print_r($_SESSION); 
echo "<br>-----";
echo "\$_SERVER['PHP_SELF'] (Çalışan Dosya): " . $_SERVER['PHP_SELF'] . "<br>"; 
echo "\$_SERVER['SERVER_NAME'] (Sunucu Adı): " . $_SERVER['SERVER_NAME'] . "<br>"; 

/* --- C. $_SESSION --- */
// Amacı: Oturum (session) verilerini saklamak ve yönetmek için kullanılır.
// Kullanım Alanı: Kullanıcı oturumlarını yönetmek (örneğin, giriş yapmış kullanıcı bilgileri).
$_SESSION['kullanici_rolu'] = "Eğitmen"; // Oturuma veri ekliyoruz.
echo "\$_SESSION['kullanici_rolu']: " . $_SESSION['kullanici_rolu'] . "<br>";

/* --- D. $_COOKIE --- */
// Amacı: Tarayıcıda saklanan çerez (cookie) verilerine erişmek için kullanılır.
// Not: Çerez oluşturmak için setcookie() fonksiyonu kullanılır.
// setcookie('tema', 'karanlık', time() + 3600); // 1 saatlik çerez oluşturur.
//setcookie('tema', 'dark', time() + 3600);
if(isset($_COOKIE['tema'])) {
    echo "\$_COOKIE['tema']: " . $_COOKIE['tema'] . "<br>";
}

// -------------------------------------------------------------------------
// 2. FORM İŞLEMLERİ (GET VE POST METOTLARI)
// -------------------------------------------------------------------------
/*
 * PHP ile form işlemleri, web uygulamalarında kullanıcıların veri göndermesi 
 * ve bu verilerin sunucu tarafında işlenmesi için kullanılır.
 * Form verilerini işlemek için genellikle GET ve POST metodları kullanılır.
 */
// 

echo "<h3>2. Form İşlemleri</h3>";

/* --- Form Verilerini İşleme (PHP Kısmı) --- */

// A. GET Metodunu Yakalama
// GET metodu, form verilerini URL üzerinden gönderir (Örn: sayfa.php?arama=php).
// Genellikle veri çekmek/arama yapmak için kullanılır.


if (isset($_GET['arama_kelimesi'])) {
    
$kategori  = $_GET["kategori"];

    echo htmlspecialchars("<h1>$kategori</h1>");
    $arama = $_GET['arama_kelimesi'];
    // htmlspecialchars(): Kullanıcıdan gelen verideki HTML etiketlerini zararsız hale getirerek XSS saldırılarını önler.
    echo "<div style='background:#e7f3fe; padding:10px;'>";
    echo "<strong>GET İşlemi Sonucu:</strong> Aranıyor -> " . htmlspecialchars($arama) . "";
    echo "</div><br>";
}

// B. POST Metodunu Yakalama
// POST metodu, form verilerini HTTP isteğinin gövdesi üzerinden gönderir (URL'de görünmez, daha güvenlidir).
// Genellikle veritabanına kayıt eklemek, giriş yapmak gibi işlemler için kullanılır.
if (isset($_POST['kullanici_email'])) {
    $email = $_POST['kullanici_email'];
    echo "<div style='background:#e7ffe7; padding:10px;'>";
    echo "<strong>POST İşlemi Sonucu:</strong> Kayıt alınan E-posta -> " . htmlspecialchars($email) . ""; 
    echo "</div><br>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form İşlemleri</title>
    <style>
        .form-kutu { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; width: 300px; }
    </style>
</head>
<body>

    <div class="form-kutu">
        <h4>Arama Yap (GET Metodu)</h4>
        <form action="" method="GET"> <label>Ne arıyorsunuz?</label><br>
            <input type="text" name="arama_kelimesi" required><br><br>
            <select name="kategori">
                <option value="kitap">Kitap</option>
                <option value="elektronik">Elektronik</option>
                <option value="giyim">Giyim</option>
            </select><br><br>
            <input type="submit" value="Ara">
        </form>
    </div>

    <div class="form-kutu">
        <h4>Kayıt Ol (POST Metodu)</h4>
        <form action="" method="POST"> 
            <label>E-posta Adresiniz:</label><br>
            <input type="email" name="kullanici_email" required><br><br>
            <input type="submit" value="Gönder">
        </form>
    </div>

    

    <p><em>Not: Yukarıdaki formları doldurup gönderdiğinizde, sayfanın üst kısmında yer alan PHP kodları devreye girerek sonucu ekrana basacaktır. Ayrıca GET formunu gönderdiğinizde tarayıcının URL (Adres) çubuğundaki değişime dikkat ediniz!</em></p>

</body>
</html>
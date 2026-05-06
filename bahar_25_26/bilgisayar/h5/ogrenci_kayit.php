<?php
 $bilgi= false;
 $mesaj = "";
if ($_POST) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $bolum = $_POST['bolum'];
   
    
    if ($bolum != -1) {
        $host = 'localhost'; // Veritabanı sunucusu
        $dbname = 'bilgisayar'; // Veritabanı adı
        $user = 'root'; // Veritabanı kullanıcı adı
        $pass = ''; // Veritabanı şifresi

        try {
            $nesne = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $nesne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $mesaj = "Bağlantı hatası: " . $e->getMessage();
            $bilgi = true;

        }
        try{
        $sql = "INSERT INTO ogrenci (ad,soyad,bolum) VALUES (:isim, :soyisim,:bolum)";
        $stmt = $nesne->prepare($sql);
        $stmt->execute(['isim'=> $ad, 'soyisim'=> $soyad, 'bolum'=> $bolum]);
        $mesaj = "Kayıt başarılı!";
        $bilgi = true;
        }catch(PDOException $e){
            $mesaj = "Kayıt hatası: " . $e->getMessage();
            $bilgi = true;
        }
        

    } else {
        $mesaj= "Lütfen bölüm seçiniz!";
        $bilgi = true;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Öğrenci Kayıt Formu</h1>

                <?php
                if($bilgi){
                  echo "<div class=\"alert alert-info mt-3\" role=\"alert\">".$mesaj."</div>";
                          }?>
            </div>
            <div class="col-md-3">Sol alan</div>
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="ad" class="form-label">Ad:</label>
                        <input type="text" class="form-control" id="ad" name="ad" required>
                    </div>
                    <div class="form-group">
                        <label for="soyad" class="form-label">Soyad:</label>
                        <input type="text" class="form-control" id="soyad" name="soyad" required>
                    </div>
                    <div class="form-group">
                        <label for="bolum" class="form-label">Öğrenci bölümü:</label>
                        <select name="bolum" class="form-select " id="bolum">
                            <option value="-1">--Seçiniz--</option>
                            <option value="Bilgisayar Programcılığı">Bilgisayar Programcılığı</option>
                            <option value="Web Tasarımı ve Kodlama">Web Tasarımı ve Kodlama</option>
                            <option value="İnternet ve Ağ Teknolojileri">İnternet ve Ağ Teknolojileri</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
                </form>
            </div>
            <div class="col-md-3">Sağ alan</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
<?php

$host = 'localhost'; // Veritabanı sunucusu
$dbname = 'web'; // Veritabanı adı
$user = 'root'; // Veritabanı kullanıcı adı
$pass = ''; // Veritabanı şifresi


try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Bağlantı başarılı!";

}catch(PDOException $e){
        echo "Bağlantı hatası: ". $e->getMessage();
}

$bilgi=false;
$mesaj="";
if ($_POST) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $bolum = $_POST['bolum'];
    if($bolum==-1){
        
        $bilgi=true;
        $mesaj="Lütfen bölüm seçiniz.";
    }else{
        try {

            $sql = "INSERT INTO ogrenci (ad, soyad,bolum) VALUES (:isim, :soyisim,:bolum)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute(['isim' => $ad, 'soyisim' => $soyad, 'bolum' => $bolum]);
            $bilgi = true;
            $mesaj = "Kayıt başarılı.";
        } catch (PDOException $e) {
            $bilgi = true;
            $mesaj = "DB Error: " . $e->getMessage();
        }

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
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                Öğrenci Kayıt sistemi

                <?php
                if($bilgi){
                  echo "<div class=\"alert alert-info mt-3\" role=\"alert\">".$mesaj."</div>";
                          }?>
              
            </div>
            <div class="col-md-3">Sol alan</div>
            <div class="col-md-6">
                <h2>Öğrenci Kayıt Formu</h2>
                <p>Lütfen öğrenci bilgilerinizi eksiksiz olarak doldurun.</p>


                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="ad" class="form-label">Öğrenci adı:</label>
                        <input type="text" class="form-control" name="ad" id="ad" maxlength="50" placeholder="Öğrenci adı" required>

                    </div>
                    <div class="form-group">
                        <label for="soyad" class="form-label">Öğrenci soyadı:</label>
                        <input type="text" class="form-control" name="soyad" id="soyad" maxlength="50" placeholder="Öğrenci soyadı" required>

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

                    <input type="submit" class="btn btn-primary mt-3" value="Kaydet">

                </form>
            </div>
            <div class="col-md-3">Sağ alan</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
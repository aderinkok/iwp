<?php

include 'parcalar/db.php';

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
<?php include 'parcalar/head.php'; ?>
<body>
    <div class="container mt-4">
        <div class="row">
    <?php include 'parcalar/ust.php'; ?>
    <?php include 'parcalar/sol.php'; ?>
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
     <?php include 'parcalar/sag.php'; ?>
        </div>
       
    </div>
    
    <?php include 'parcalar/footer.php'; ?>

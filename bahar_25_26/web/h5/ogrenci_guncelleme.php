<?php
$bilgi = false;
$mesaj = "";
$baslik = "Öğrenci Düzenleme";
$user = null;
if ($_GET && isset($_GET['id'])) {
    if(isset($_GET['mesaj']) && isset($_GET['bilgi'])){
        $mesaj = $_GET['mesaj'];
        $bilgi = $_GET['bilgi'] === 'true' ? true : false;
    }   

    $kimlik = $_GET['id'];
    include "parcalar/db.php";
    try {
        $sql = "SELECT * FROM ogrenci WHERE id = :id";
        $stmt = $nesne->prepare($sql);
        $stmt->execute(['id' => $kimlik]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $mesaj = "Veri çekme hatası: " . $e->getMessage();
        $bilgi = true;
    }
}
if ($_POST) {
    $id = $_POST['id'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $bolum = $_POST['bolum'];


    if ($bolum != -1) {
        include "parcalar/db.php";

        try {
            $sql = "UPDATE ogrenci SET ad = :isim, soyad = :soyisim, bolum = :bolum WHERE id = :id";
            $stmt = $nesne->prepare($sql);
            $stmt->execute(['isim' => $ad, 'soyisim' => $soyad, 'bolum' => $bolum, 'id' => $id]);
            $mesaj = "Güncelleme başarılı!";
            $bilgi = true;
            header("Location: ogrenci_guncelleme.php?id=" . $id."&mesaj=".urlencode($mesaj)."&bilgi=true");
        } catch (PDOException $e) {
            $mesaj = "Güncelleme hatası: " . $e->getMessage();
            $bilgi = true;
        }
    } else {
        $mesaj = "Lütfen bölüm seçiniz!";
        $bilgi = true;
    }
}


?>

<?php include "parcalar/head.php"; ?>
<?php include "parcalar/body.php"; ?>
<?php include "parcalar/nav.php"; ?>
<?php include "parcalar/sol.php"; ?>
<div class="col-md-6">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : ''; ?>">
        <div class="form-group">
            <label for="ad" class="form-label">Ad:</label>
            <input type="text" class="form-control" id="ad" name="ad" value="<?php echo isset($user['ad']) ? $user['ad'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="soyad" class="form-label">Soyad:</label>
            <input type="text" class="form-control" id="soyad" name="soyad" value="<?php echo isset($user['soyad']) ? $user['soyad'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="bolum" class="form-label">Öğrenci bölümü:</label>
            <select name="bolum" class="form-select " id="bolum">
                <option value="-1">--Seçiniz--</option>
                <option value="Bilgisayar Programcılığı" <?php echo (isset($user['bolum']) && $user['bolum'] == 'Bilgisayar Programcılığı') ? 'selected' : ''; ?>>Bilgisayar Programcılığı</option>
                <option value="Web Tasarımı ve Kodlama" <?php echo (isset($user['bolum']) && $user['bolum'] == 'Web Tasarımı ve Kodlama') ? 'selected' : ''; ?>>Web Tasarımı ve Kodlama</option>
                <option value="İnternet ve Ağ Teknolojileri" <?php echo (isset($user['bolum']) && $user['bolum'] == 'İnternet ve Ağ Teknolojileri') ? 'selected' : ''; ?>>İnternet ve Ağ Teknolojileri</option>
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
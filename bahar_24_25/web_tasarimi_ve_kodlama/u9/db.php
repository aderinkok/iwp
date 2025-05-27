<?php
$host = "localhost";
$dbName = "phpweb";
$user = "root";
$pass = "";
$mesaj = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mesaj = "Veritabanı bağlatısı başarılı<br>";
}
catch(PDOException $e){
    $mesaj = "Veritabanı bağlantı hatası<br> ";
}

if(isset($_POST["ad"])){
try{
    $sql = "INSERT INTO kullanici (ad,soyad,mail,parola,telefon) VALUES (:ad,:soyad,:mail,:parola,:telefon)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['ad' => $_POST["ad"], 'soyad' => $_POST["soyad"], 'mail' => $_POST["mail"], 'parola' => $_POST["parola"], 'telefon' => $_POST["telefon"]]);
    $mesaj = $_POST["ad"]." ".$_POST["soyad"]."kullanıcısı başarıyla eklendi";
}
catch(PDOException $e){
    $mesaj = "Veri ekleme hatası<br> ";
}
}
try{
    $sorgu= "SELECT * FROM kullanici";
    $veriler = $pdo->prepare($sorgu);
    $veriler = $pdo->query($sorgu);
    $kullanicilar = $veriler->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    $mesaj = "Veri okuma hatası <br> ";
}



?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Veritabanı</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-white">
            <h1>Veritabanı İşlemleri</h1>
            <p class="alert alert-info"><?php echo $mesaj; ?></p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-hover">
                <tr>
                    <td>#</td>
                    <td>Ad</td>
                    <td>Soyad</td>
                    <td>#</td>
                </tr>
                <?php
                foreach ($kullanicilar as $kulanici) {
                    ?>
                    <tr>

                        <td><?php echo $kulanici['id']; ?></td>
                        <td><?php echo $kulanici['ad']; ?></td>
                        <td><?php echo $kulanici['soyad']; ?></td>
                        <td><a href="kullanici.php?id=<?php echo $kulanici['id']; ?>">Görüntüle</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-8">
            <form action="db.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="ad" class="col-sm-3 col-form-label">Ad</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="soyad" class="col-sm-3 col-form-label">Soyad</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-sm-3 col-form-label">Mail</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="parola" class="col-sm-3 col-form-label">Parola</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="parola" name="parola" placeholder="Parola" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefon" class="col-sm-3 col-form-label">Telefon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" required>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Gönder">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

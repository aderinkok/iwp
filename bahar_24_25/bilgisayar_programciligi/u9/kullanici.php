<?php

$host = "localhost";
$dbName = "phpbilgisayar";
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


try{
    $selectSql = "SELECT * FROM kullanici";
    $veriler = $pdo->prepare($selectSql);
    $veriler = $pdo->query($selectSql);
    $kullanicilar = $veriler->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    $mesaj = "Veri okuma hatası. ";
}
$ad = "";
$soyad="";
if($_GET["id"]){
    $id = $_GET["id"];
    $tekilKullanici = "SELECT * FROM kullanici WHERE id=:id";
    $degerler = $pdo->prepare($tekilKullanici);
    $degerler->execute(["id" => $id]);
    $userSingle = $degerler->fetch();
    //$tekilDeger = $degerler->fetchAll(PDO::FETCH_ASSOC);

    $ad = $userSingle["ad"];
    $soyad = $userSingle["soyad"];

}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veritabanı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-bg-dark">
            <h1>Tekil Görüntüleme <small>(PDO ile)</small></h1>
            <a href="db.php">Ana Sayfa</a>

            <p class="alert alert-info"><?php echo $mesaj;     ?></p>
        </div>
        <div class="col-md-4">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ad</th>
                    <th scope="col">soyad</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
                <tbody>
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

                </tbody>
            </table>


        </div>
        <div class="col-md-8 ">
            <form action="#" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="ad" class="col-sm-3 col-form-label">Ad</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad" value="<?php echo $ad; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="soyad" class="col-sm-3 col-form-label">Soyad</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad" value="<?php echo $soyad; ?>" required>
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

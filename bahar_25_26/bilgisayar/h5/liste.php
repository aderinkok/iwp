<?php
include "parcalar/db.php";
$bilgi = false;
$users = [];
try{
    $sql = "SELECT * FROM ogrenci";
    $stmt = $nesne->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    $mesaj = "Veri çekme hatası: " . $e->getMessage();
    $bilgi = true;
}



?>

<?php include "parcalar/head.php"; ?>
<?php include "parcalar/body.php"; ?>
<?php include "parcalar/nav.php"; ?>
<?php include "parcalar/sol.php"; ?>

<div class="col-6">
    <?php
    if(count($users) > 0){
    ?>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Bölüm</th>
      <th scope="col">Vize</th>
      <th scope="col">Ödev</th>
      <th scope="col">Final</th>
      <th scope="col">Ortalama</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($users as $user) { ?>
    <tr>
      <th scope="row"><?php echo $user['id']; ?></th>
      <td><?php echo $user['ad']; ?></td>
      <td><?php echo $user['soyad']; ?></td>
      <td><?php echo $user['bolum']; ?></td>
      <td><?php echo $user['vize']; ?></td>
      <td><?php echo $user['odev']; ?></td>
      <td><?php echo $user['final']; ?></td>
      <td><?php echo $user['butunleme']; ?></td>
        <td>
            <a href="ogrenci_duzenle.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary">Düzenle</a>
            <a href="ogrenci_sil.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger"  >Sil</a>
        </td>
        </tr>
        
    <?php }
    ?>
   
  </tbody>
</table>
<?php
    }else{
        echo "<div class=\"alert alert-info mt-3\" role=\"alert\"> Kayıt bulunamadı.</div>";
    }
    ?>
</div>

<?php include "parcalar/footer.php"; ?>
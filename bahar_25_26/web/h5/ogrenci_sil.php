<?php
 $bilgi= false;
 $mesaj = "";
 
if($_GET && isset($_GET['id'])){
    $id = $_GET['id'];
        include "parcalar/db.php";
        try{
        $sql = "DELETE FROM ogrenci WHERE id = :id";
        $stmt = $nesne->prepare($sql);
        $stmt->execute(['id'=> $id]);
        $mesaj = "Öğrenci silindi!";
        $bilgi = true;
        header("Location: liste.php?mesaj=".urlencode($mesaj)."&bilgi=true");
        }catch(PDOException $e){
            $mesaj = "Silme hatası: " . $e->getMessage();
            $bilgi = true;
        }
        

    } else {
        $mesaj= "Geçersiz istek!";
        $bilgi = true;
    }



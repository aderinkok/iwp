<?php

if($_GET && isset($_GET['id'])){
    $id = $_GET['id'];
    include "parcalar/db.php";
    try{
        $sql = "DELETE FROM ogrenci WHERE id = :id";
        $stmt = $nesne->prepare($sql);
        $stmt->execute(['id'=> $id]);
        $mesaj="Silme başarılı!";
        $bilgi = true;
        header("Location: liste.php?mesaj=".urlencode($mesaj)."&bilgi=true");
    }catch(PDOException $e){
        echo "Silme hatası: " . $e->getMessage();
    }}
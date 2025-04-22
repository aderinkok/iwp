<?php
$meyveler=["elma","çilek","portalal"];
$kisi=["ad"=>"Ayşe","soyad"=>"Yılmaz","yas"=>18];

foreach ($meyveler as $meyve){
echo $meyve."<br>";

}

foreach ($kisi as $key => $value){

    echo $key." değeri: ".$value."<br>";

}


$kisiler = [
    ["ad" => "Abdulmelik", "soyad" => "Derinkök", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],
    ["ad" => "Ahmet", "soyad" => "Yılmaz", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],
    ["ad" => "Ayşe", "soyad" => "Demir", "notlar" =>
        ["matematik" => ["vize" => 0, "final" => 20],
            "türkçe" => ["vize" => 10, "final" => 30],
            "tarih" => ["vize" => 50, "final" => 70]]],];

foreach ($kisiler as $kisi){
    foreach ($kisi as $kisiKey => $kisiValue){
        if($kisiKey=="notlar"){
            $notlar = $kisiValue;
            foreach ($notlar as $ders=> $value){
                echo "$ders dersi: ";
                $singleNot = $value;
                foreach ($singleNot as $tur => $single){
                    echo "$tur sınav notu: $single<br>";
                }
            }
        }else{
            echo $kisiKey." değeri: ".$kisiValue."<br>";
        }

    }

}
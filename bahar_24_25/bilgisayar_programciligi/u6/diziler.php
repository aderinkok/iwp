<?php

//$meyveler = array("Elma","Armut","Çilek","Kayısı");
$meyveler = ["Elma","Armut","Çilek","Kayısı"];



echo $meyveler[1]."<br>";


$kisi = array("Abdulmelik","Derinkök",18,"Malatya");
$kisi = array("ad"=>"Abdulmelik","soyad"=>"Derinkök","yas"=>18,"memleket"=>"Malatya",18=>"Bilecik");

echo $kisi[18]."<br>";

print_r($kisi);
echo "<br>";
$meyveler[1] = "Portakal";
$sayac = 0;
foreach ($meyveler as $meyve){
    $sayac++;
    echo $sayac."-".$meyve."<br>";
}
//  ($dizi as $key=>$value)
foreach ($meyveler as $key=> $meyve){
    echo $key."-".$meyve."<br>";

}

foreach ($kisi as $key=> $value){
    echo $key."-".$value."<br>";

}

array_splice($kisi, 1, 1);

print_r($kisi);
echo "<br>";

unset($meyveler[2]);
print_r($meyveler);
echo "<br>";


$kisiler = [
    array("ad"=>"Abdulmelik","soyad"=>"Derinkök","yas"=>18,),
    array("ad"=>"Ahmet","soyad"=>"yılmaz","yas"=>20,),
    array("ad"=>"Ahmet","soyad"=>"Lüleci","yas"=>19,),
    array("ad"=>"Ayşe","soyad"=>"Kaya","yas"=>21,),
    ];

echo $kisiler[0]["ad"]."<br>";


foreach ($kisiler as $key=> $value){
    foreach ($value as $key2 => $value2){

        echo $key2."-".$value2."<br>";
    }
}


$ogrenciler = [
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

foreach ($ogrenciler as $ogrenci){
    foreach ($ogrenci as $ogrenciKey => $ogrenciValue){
        if($ogrenciKey=="notlar"){
            $notlar = $ogrenciValue;
            foreach ($notlar as $ders=> $value){
                echo "$ders dersi: ";
                $singleNot = $value;
                foreach ($singleNot as $tur => $single){
                    echo "$tur sınav notu: $single<br>";
                }
            }
        }else{
            echo $ogrenciKey." değeri: ".$ogrenciValue."<br>";
        }

    }}
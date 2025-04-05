<?php

echo "Çıktı<br>";
echo 'Çıktı<br>';
echo ("Çıktı<br>");


print ('Çıktı<br>');
print "Çıktı<br>";

$degisken= "Abdulmelik";
echo "<hr>";
echo "$degisken<br>";
echo '$degisken<br>';
var_dump ($degisken);

echo "<hr>";
$deger = "isim";
$isim= "Abdulmelik<br>";

echo $$deger;

$x = 5;

echo $x++."<br>";
echo ++$x."<br>";



echo "<hr>";

$sayi = 1;
/*
 if($sayi%2==0){
     echo "Sayı çift";
 }else{
     echo "Sayı tek";
 }
*/

 #for(başlangıç;koşul;artış/azalış){

# $i++ =   $i = $i+1
# $i-- =   $i = $i-1
/*
 for ($i=1; $i<=$bitis;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

 */
$bitis = 30;
for($i=1;$i<=$bitis;$i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}



echo "<hr>";
echo "<br>";

for($i=1;$i<=15;$i++){
    for($j=1;$j<=10;$j++){
        echo "İ değişkeni : $i - J değişkeni: $j <br>";
    }
}



echo "<hr>";
echo "<br>";
$sayac =0;
$moduAlinacakSayi = 13;
$ustLimit = 1000;

 for($i=1;$i<=$ustLimit;$i++){

     if($sayac==10){
         break;
     }
     if($i==$moduAlinacakSayi**2){
         continue;
     }
     if($i%$moduAlinacakSayi==0 ){
         echo "$i<br>";
         $sayac++;
     }
 }

 echo "0-$ustLimit arası $moduAlinacakSayi sayısına bölünebilen $sayac adet sayı bulunmakta.";




/*
   1. for Döngüsü ile 1'den 10'a Kadar Sayılar

  Problem: 1'den 10'a kadar olan sayıları for döngüsü kullanarak yazdırın.

2. while Döngüsü ile Çift Sayıları Yazdırma

  Problem: 1 ile 20 arasındaki çift sayıları while döngüsü kullanarak yazdırın.

3. do-while Döngüsü ile 1'den 5'e Kadar Sayılar

  Problem: do-while döngüsü kullanarak 1'den 5'e kadar olan sayıları ekrana yazdırın.

4. for Döngüsü ile Faktöriyel Hesaplama

  Problem: Bir sayının faktöriyelini for döngüsü kullanarak hesaplayın. Örneğin, 5 sayısının faktöriyelini hesaplayın (5! = 54321).

5. while Döngüsü ile Toplam Hesaplama

  Problem: Kullanıcıdan pozitif bir sayı alın ve bu sayıya kadar olan tüm sayıları toplamak için while döngüsü kullanın. Örneğin, 5 için toplam: 1+2+3+4+5 = 15.

6. for Döngüsü ile Çift Sayıların Toplamı

  Problem: 1 ile 50 arasındaki çift sayıların toplamını for döngüsü kullanarak hesaplayın.

7. while Döngüsü ile 10'a Kadar Olan Sayılar

  Problem: while döngüsü kullanarak 1'den 10'a kadar olan sayıları yazdırın, ancak her sayının yanına "Numara" kelimesini ekleyin (örneğin, "1 Numara", "2 Numara" vb.).

8. for Döngüsü ile Asal Sayıları Bulma

  Problem: 1 ile 100 arasındaki asal sayıları for döngüsü kullanarak bulun ve ekrana yazdırın.

9. do-while Döngüsü ile 1'den N'ye Kadar Olan Sayıların Toplamı

  Problem: Kullanıcıdan bir sayı alın ve do-while döngüsü kullanarak 1'den bu sayıya kadar olan tüm sayıların toplamını hesaplayın.

10. for Döngüsü ile 100'e Kadar Olan Sayılardan 3 ve 5'e Tam Bölünebilenleri Bulma

  Problem: 1 ile 100 arasındaki sayıları for döngüsü kullanarak kontrol edin ve 3 veya 5'e tam bölünebilen sayıları yazdırın.


   * */




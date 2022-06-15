<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    
<?php

echo "<h4>Tırnak İşaretleri Arasındaki Farklar </h4>";

$uni = "Adnan Menderes Üniversitesi";

echo "Değişkenin içeriği :" . $uni;
echo "<br>";

echo "1- Kazandığınız üni : " . '$uni';
/* değişkenin ismini yazdırır */
echo "<br>";
echo "2- Kazandığınız üni : " . "$uni";
/* değişkenin içeriğini yazdırır */
echo "<br>";
echo "3- Kazandığınız üni : " . $uni;
/* değişkenin içeriğini yazdırır */
echo "<br>";
echo "4- Kazandığınız üni :  $uni";
/* değişkenin içeriğini yazdırır */
echo "<br>";


echo " <hr><h4> Temel Matematiksel İşlemler </h4>";
echo "<h5>Toplama İşlemleri</h5>";

$sayi1 = 10;
$sayi2 = 20;

echo '$sayi1 + $sayi2 =' . ($sayi1+$sayi2);
echo '<br>';
echo "$sayi1 + $sayi2 =" . ($sayi1 + $sayi2);
echo '<br>';
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";

echo "<hr>";

echo "<h5>Çıkarma İşlemleri</h5>";

$sayi1 = 30;
$sayi2 = 20;

echo '$sayi1 - $sayi2 =' . ($sayi1-$sayi2);
echo '<br>';
echo "$sayi1 - $sayi2 =" . ($sayi1 - $sayi2);
echo '<br>';
$sonuc = $sayi1 - $sayi2;
echo "$sayi1 - $sayi2 = $sonuc";

echo "<hr><h5>Çarpma İşlemleri</h5>";

$sayi1 = 30;
$sayi2 = 20;

echo '$sayi1 * $sayi2 =' . ($sayi1*$sayi2);
echo '<br>';
echo "$sayi1 * $sayi2 =" . ($sayi1 * $sayi2);
echo '<br>';
$sonuc = $sayi1 * $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";

echo "<hr><h5>Bölme İşlemleri</h5>";

$sayi1 = 30;
$sayi2 = 5;

echo '$sayi1 / $sayi2 =' . ($sayi1/$sayi2);
echo '<br>';
echo "$sayi1 / $sayi2 =" . ($sayi1 / $sayi2);
echo '<br>';
$sonuc = $sayi1 / $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";

echo "<hr><h5> Üst alma işlemi (pow) </h5>";

$x =3;
$y =2;
echo "$x<sup>$y</sup>=". (pow($x,$y));

echo "<br>Değişken Tipi : $y >>> ".(gettype($y));

echo "<hr><h5> Karekök alma işlemi (sqrt) </h5>";
$x=2;
$karekok=sqrt($x);
echo "$x'in karekökü $karekok ' tir .";

echo "<hr><h5> Mutlak Değer  alma işlemi (abs) </h5>";
$x = (-4);
$mutlak=abs($x);
echo "$x' in mutlak değeri : $mutlak ";

echo "<hr><h5> Taban Değişim  işlemi (base_convert(x,taban1,taban2)) </h5>";
$sayi =30;
$taban =10;
$yenitaban =2;
echo "27 sayısının 2'lik tabandaki karşılığı :" . base_convert(27,10,2);
echo "<br>";
$sonuc=base_convert($sayi,$taban,$yenitaban);
echo "($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub> ";

echo "<hr><h5> Mod işlemi (fmod(x,y))</h5>";
$x=15;
$y=2;
$mod =fmod(15,2);
echo "$x mod $y = $mod";
echo "<br>";
echo "$x Sayısı : " . ((fmod($x,2) ==0) ? "Çifttir" :"Tektir");

echo "<hr><h5> Yuvarlama işlemi (round(x,y))</h5>";

$x = 15.315;
$y = 15.384;
echo "$x bir ondalık basamak yuvarlanması :" . round($x,1);
echo "<br>";
echo "$y bir ondalık basamak yuvarlanması :" . round($y,1);

echo "<hr><h5> Yuvarlama işlemi (floor(x))</h5>";
/* her zaman en yakon aşağı tam sayı değerine yuvarlama işlemi yapar . */
$x =15.315;
echo "$x :" . floor($x);

echo "<hr><h5> Yuvarlama işlemi (ceil(x))</h5>";
/* her zaman en yakon yukarı tam sayı değerine yuvarlama işlemi yapar . */
$x =15.315;
echo "$x :" . ceil($x);

echo "<hr><h5> Rastgele Sayı Üretme  (rand())</h5>";
echo "10-100 arasında rastgele değer :" . rand(10,100);

//echo phpinfo();

?>


</body>
</html>
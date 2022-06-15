<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    <?php
     /* Uygulama Ödevi 
        Kuyruk ve Yığın Veri yapılarının php üzerinde dizileri kullanılarak örneklendirilmesini gerçekleştiriniz.
     */

     /* Uygulama : Rastgele üretilen sayı
     
        50'den büyükse ;

        Geçtiniz: Notunuz :xx

        50'den küçükse ;

        Kaldınız: Notunuz: xx

        uygulamasını gerçekleştiriniz .

     */

     $rastgelesayi = rand(10,100);
     if($rastgelesayi >=50)
     {
         echo "Geçtiniz - Notunuz : $rastgelesayi";
     }
     else
     {
         echo "Kaldınız - Notunuz : $rastgelesayi";
     }

     echo "<hr>";

     echo "<h3>Sık kullanılan String Fonksiyonları</h3>";

     $yazi="Adnan Menderes Üniversitesi";

     echo  "\$yazi Değişkeninin içeriği : $yazi";

     echo "<br> \$yazi Değişkeninin Türü : " ,gettype(($yazi));

     /* İçeriğin Büyük Harfe Dönüştürülmesi ==> strtoupper()  */

     echo "<br> \$yazi Değişkenin büyük Harfle Yazılması :" . strtoupper($yazi);
     echo "<br> \$yazi Değişkenin büyük Harfle Yazılması :" . mb_strtoupper($yazi);

     echo "<br>";

     echo "<br> \$yazi Değişkenin büyük Harfle Yazılması :" . mb_strtoupper($yazi);
     echo "<hr>";
      /* İçreğin Küçük Harfle Yazımlası ==> strtolower() */
     echo "<br> \$yazi Değişkenin büyük Harfle Yazılması :" . strtolower($yazi);
     echo "<br> \$yazi Değişkenin büyük Harfle Yazılması :" . mb_strtolower($yazi);
      /* İçeriğin ilk Harfinin Büyük Harfe Dönüşmesi */

      echo "<br> \$yazi Değişkenin İlk Harfi  Büyük :" . ucfirst($yazi);
    
    ?>
    
</body>
</html>
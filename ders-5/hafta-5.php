<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Programlama Hafta-5</title>
</head>
<body>
    <h3>Php Diziler Devam</h3>

    <?php
    $ogrencidetay=array(
        "id" => 1,
        "ad" => "Mehmet",
        "soyad" => "Baldöken",
        "bolum" => "Bilgisayar",
        "yas" => 45,
        "dersler" => array(
            "ders1" => "Veri Tabanı",
            "ders2" => "Web Programlama",
            "ders3" => "Mobil Programlama"
        ),
        "sinif" => 4
    );
    /* Öğrenci detay dizisinizi alt alta döngüleri kullanarak yazdırınız. */
    foreach($ogrencidetay as $value)
    {
        print_r($value);
        echo "<br>";
    }
    
    ?>
    <hr>
    <h3>Koşul İfadeleri (If-Else)</h3>
    <p>İf-Else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>


    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>

    </ol>

    <h5>Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır. Koşullardan bir tanesi false dönerse genel değer False olur. </li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
    </ol>
    <?php
    
    
        /* uygulama: 
        1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
        2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
        3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. */

        echo "<hr><h4>uygulama -1</h4>";

        $i = rand(0,100);
        if(fmod($i,2)==0)
        {
            echo "Sayınız Çİfttir ! Sayı :" .$i;
        }
        else 
        {
            echo "Sayınuz Tektir ! Sayı :" .$i;
        }

        echo "<br><br><br><br>";


        echo "<hr><h4>uygulama -2</h4>";
        $y = rand(0,100);
        if($y<50)
        {
            echo "Dersten Kaldınız !" ." ". "Notunuz :".$y;
        }
        else if ($y>=50 & $y<85)
        {
            echo "Dersten Geçtiniz.(A)"." ". "Notunuz :" .$y;
        }
        else if ($y>=85)
        {
            echo "Dersten Geçtiniz.(A+)"." ". "Notunuz :" .$y;
        }



    
    ?>
</body>
</html>
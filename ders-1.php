<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Açıklama Satırı -->
    <?php
     // açıklama satırı
     
    /* 
    açıklama satır bloğu
    
    */
    /* Kullanılan Komutlar 

    echo: Ekrana yazdırma işlemi yapar.
    İçerisinde html etiketleri kullanılabilir. 
    Çift veya tek tırnak ile kullanılabilir.
    Çift tırnak içerisinde değişken içerikleri gösterilir.
    Nokta işareti ile birleştirme yapılabilir.
    \ kaçış karakteridir. Özel ifadelerden önce kullanılır.
    */
    
    
    echo "<h1>Aydın Adnan Menders Üniversitesi</h1>";
    echo "Bilgisayar Programcılığı"."<br>"."Web Teknolojileri";
    
    echo"<hr> <h3> Değişken Tanımlama Kuralları </h4>";

    echo"<ol>
          <li>Değişken isimleri $ ile başlar.</li>
          <li>Değişken isimleri sayısal bir ifade ile başlayamaz.</li>
          <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa birinci_sinif birinciSinif birinci-sinif kullanımlar önerilir.</li>
          <li>Değişken ve dosya isimlerinde türkçe karakter kullanılmamalıdır.</li>
          <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır . \$sayi != \$SAYI </li>
          <li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak(\") veya tek tırnak (') kullanılır.</li>
          <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır.</li>
          <li>Değişkenin ismi , değişkenin içeriğini ifade etmeli.</li>
          <li>Değişkenler ekrana echo komutu ile yazdırılır.</li>
    </ol>";

    echo"<hr> <h3> Değişken Tanımlama Örnekleri </h4>";

    $isim = "Ahmet";
    $soyisim ="Kazım";
    $yas = 31;
   // echo $isim;
    //echo "<br>";
   // echo"$isim $soyisim";

    
    /* Uygulama :
    üniversite-myo-ad-soyad-numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
    Girilen bu deüişkenlerin değerlerini bir html tablo içerisinde gösteriniz. 
    */

    $universite = "Adnan Menderes Üniversitesi";
    $myo ="Aydın Meslek Yüksekokulu";
    $ad = "Selçuk";
    $soyad = "Salbaş";
    $numara = 216001010;
    ?>
    <table border =1>
        
        <tr>
            <td> Üniversite Adı :<?php echo $universite;?></td>
        </tr>
        <tr>
            <td>Meslek Yüksekokulu Adı :<?php echo $myo; ?></td>
        </tr>
        <tr>
            <td>Adı :<?php echo $ad; ?></td>
        </tr>
        <tr>
        <td> Soyadı :<?php echo $soyad; ?></td>
        </tr>
        <tr>
        <td>Numara :<?php echo $numara; ?></td>
        </tr>
    </table>
    
    <br><br><br><br><br><br><br>
</body>
</html>
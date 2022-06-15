<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Programlama Hafta-4</title>
</head>
<body>
        <h3>Php'de DİZİLER</h3>
        <ol>
            <li>Dizi oluşturmak için array fonksiyonu ya da [] kullanılabilir</li>
            <li>Dizi içerisinde farklı türden bir çok nesne bulunabilir. (int,string,double,char...) ["Ahmet",0.9,"*"]</li>
            <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
            <li>Dizi içerisindeki string ifadeler çift tırnak ile yazılmalıdır</li>
            <li>Dizi içerisindeki int ifadeler direkt yazılabilir.</li>
            <li>Dizi elemanları birbirinden virgül yardımı ile ayrılır.</li>
            <li>Dizi içerisindeki indisler varsayılan olarak 0'dan başlar</li>
            <li>Diziler içerisinde diziler tanımlanabilir.</li>
        </ol>





    <?php
    
    $dizi1 = array(12,"Selçuk","Salbaş");
    $dizi2 = [30,"Şevket","Tarık"];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "Dizinin 1. elemanı :". $dizi1[0] ."<br>";
    echo "Dizinin 1. elemanının türü :". gettype($dizi1[0])."<br>";    

    echo "Dizinin 0. indisi :" .$dizi1[0]."<br>";
    echo "Dizinin 1. indisi :" .$dizi1[1]."<br>";
    echo "Dizinin 2. indisi :" .$dizi1[2]."<br>";


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>"; 

    /* Dizi içeriğinin foreach ile yazdırılması -1 */
    foreach($dizi2 as $deger)
    {
        echo "$deger <br>";
    }
    /* Dizi içeriğinin foreach ile yazdırılması -2 */
    foreach($dizi1 as $anahtar => $deger)
    {   
        echo "$anahtar - $deger <br>";
    }

    /*Dizi içeriğininin for döngüsü ile yazdırılması*/
    for($i=0; $i<count($dizi1); $i++)
    {
        echo "$i : $dizi1[$i] <br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>"; 

    $sayilar=array(
        array(1,3,5,7,9),
        array(2,4,6,8,10)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";
    
    echo "2. dizinin 3. elemanını yazdır :" . $sayilar[1][2]."<br>";
    echo "1. dizinin 4. elemanını yazdır :" . $sayilar[0][3]."<br>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>"; 

    $sayilar2=array(
        "TekSayılar" => array(1,3,5,7,9),
        "CiftSayılar" => array(2,4,6,8,10)
    );

    echo "<pre>";
    print_r($sayilar2);
    echo "</pre>";

    echo "sayilar2 dizisinin içerisindeki 2. dizinin 5. elemanını yazdır." . $sayilar2["CiftSayılar"][4]."<br>";

    echo "<hr><h4>Basit UYGULAMA</h4>";

    $bilgiler = array(
        "id" => 1,
        "ad" => "Selçuk",
        "soyad" => "Salbaş",
        "gsm" => "5346549841",
        "cinsiyet" => "erkek",
        "yas" => 19
    );    

    echo "$bilgiler[ad] $bilgiler[soyad]  Hoşgeldiniz";

    foreach($bilgiler as $anahtar => $deger)
    {
        echo "$anahtar - $deger <br>";
    }
    echo "<br><br><br><br>";
    $bilgi = str_split($bilgiler["gsm"],3);
    foreach ($bilgi as $value)
    {
        echo $value . " ";
    }
    

    ?>

    
</body>
</html>

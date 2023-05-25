<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <h3>Php Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() veya [] ifadeleri kullanılır.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir (int, string, char, array) array(1,2,3,"Ali", 10.25, ["elma", "armut","muz"]) </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to string conversion hatası oluşur. Fakat dizinin örneğin 3. indisindeki elemana ulaşmak için echo komutu kullanılabilir. echo $diziAdi[2] </li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak ("") içerisinde yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül (,) ile ayrılır.</li>
        <li>Dizinin indisleri varsayılan olarak 0'dan başlar.</li>
        <li>Dizi içerisindeki diziler tanımlanabilir.</li>
    </ol>

    <?php
    $dizi1 = array(1, 2, 3, "Ali", 10.25, ["elma", "armut", "muz"]);
    $dizi2 = [1, 2, 3, 4, 5, 6, "Adu", "Aymes", " Bilgisayar Programcılığı"];

    echo "Dizinin 8. Elemanı: " . $dizi2[7] . "<br>";
    echo "Dizinin 8. Elemanın Türü: " . gettype($dizi2[7]) . "<br>";

    echo "Dizinin 3. Elemanı: " . $dizi2[3] . "<br>";
    echo "Dizinin 3. Elemanın Türü: " . gettype($dizi2[3]) . "<br>";


    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "Dizinin 0. Elemanı: " . $dizi1[0] . "<br>";
    echo "Dizinin 1. Elemanı: " . $dizi1[1] . "<br>";
    echo "Dizinin 2. Elemanı: " . $dizi1[2] . "<br>";
    echo "Dizinin 3. Elemanı: " . $dizi1[3] . "<br>";
    echo "Dizinin 4. Elemanı: " . $dizi1[4] . "<br>";
    echo "Dizinin 5. Elemanı: " . $dizi1[5][0] . "<br>";
    echo "Dizinin 5. Elemanı: " . $dizi1[5][1] . "<br>";
    echo "Dizinin 5. Elemanı: " . $dizi1[5][2] . "<br>";

    echo "<h4>Dizinin İçeriğinin Foreach döngüsü ile ekrana yazdırılması-1:</h4>";

    foreach ($dizi2 as $deger) {
        echo "$deger <br>";
    }

    echo "<h4>Dizinin İçeriğinin Foreach döngüsü ile ekrana yazdırılması-2:</h4>";

    foreach ($dizi2 as $anahtar => $deger) {
        echo "Dizinin $anahtar. Elemanı: $deger <br>";
    }

    echo "<h4>Dizinin İçeriğinin For döngüsü ile ekrana yazdırılması :</h4>";
    for ($key = 0; $key < count($dizi2); $key++) {
        echo "Dizinin $key. Elemanı: $dizi2[$key] <br>";
    }

    $sayilar = array(
        array(10, 20, 30, 40),
        array(4.3, 2.5, 8.9)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar dizisinin içerisindeki İkinci Dizinin Üçüncü Elemanının Değeri :" . $sayilar[1][2] . "<br>";

    echo "Sayılar dizisinin içerisindeki Birinci Dizinin İkinci Elemanının Değeri :" . $sayilar[0][1] . "<br>";


    echo "<br>************************<br>";
    $sayilar2 = array(
        "integer" => array(10, 20, 30, 40),
        "double" => array(4.3, 2.5, 8.9)
    );
    echo "<pre>";
    print_r($sayilar2);
    echo "</pre>";

    echo "Sayılar2 dizisinin içerisindeki İkinci Dizinin Üçüncü Elemanının Değeri :" . $sayilar2["double"][2] . "<br>";

    echo "Sayılar dizisinin içerisindeki Birinci Dizinin İkinci Elemanının Değeri :" . $sayilar2["integer"][1] . "<br>";


    $ogrenci_bilgileri = array(
        "id"        => 1,
        "adi"       => "Ahmet",
        "soyadi"    => "Yenilmez",
        "gsm"       => "053222222",
        "cinsiyet"  => "Erkek",
        "iban"      => "TR2020002000200020002000",
        "yas"       => 30
    );

    echo "<h3>Sayın $ogrenci_bilgileri[adi] $ogrenci_bilgileri[soyadi] Hoşgeldiniz.</h3>";
    echo "<h3>Sayın" .  $ogrenci_bilgileri["adi"]  . " " .  $ogrenci_bilgileri["soyadi"] . " Hoşgeldiniz.</h3>";

    foreach ($ogrenci_bilgileri as  $value) {
        echo " $value - ";
    }

    $ogrenci_iban = str_split($ogrenci_bilgileri["iban"], 4);

    echo "<pre>";
    print_r($ogrenci_iban);
    echo "</pre>";


 


    $ogrenci_bilgileri = array(
        "id"        => 1,
        "adi"       => "Ahmet",
        "soyadi"    => "Yenilmez",
        "gsm"       => "053222222",
        "cinsiyet"  => "Erkek",
        "iban"      => "TR2020002000200020002000",
        "yas"       => 30

    );

    // echo $ogrenci_bilgileri["adi"];
    //echo count($ogrenci_bilgileri);
    ?>


    <table style="width: 700px;" border="3px">
        <thead>
            <tr>
                <td>İd</td>
                <td>Adı</td>
                <td>Soyadı</td>
                <td>Gsm</td>
                <td>Cinsiyet</td>
                <td>Yaş</td>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?php echo $ogrenci_bilgileri["id"]; ?></td>
                <td><?php echo $ogrenci_bilgileri["adi"]; ?></td>
                <td><?php echo $ogrenci_bilgileri["soyadi"]; ?></td>
                <td><?php echo $ogrenci_bilgileri["gsm"]; ?></td>
                <td><?php echo $ogrenci_bilgileri["cinsiyet"]; ?></td>
                <td><?php echo $ogrenci_bilgileri["yas"]; ?></td>
            </tr>


        </tbody>
    </table>














    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
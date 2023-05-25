<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döngüler</title>
</head>

<body>

    <p>************************************************************************</p>
    <h3> While Döngüsü</h3>
    <hr>

    <?php
    $basla = 1;
    while ($basla <= 10) {
        echo "While Tur: $basla <br>";
        $basla++;
    }

    echo "Başla Değişkeninin Değeri: $basla";
    ?>

    <p>************************************************************************</p>
    <h3> Do While Döngüsü</h3>
    <hr>

    <?php
    $basla = 1;
    do {
        echo "Do-While Tur: $basla <br>";
        $basla++;
    } while ($basla <= 10);
    echo "Başla Değişkeninin Değeri: $basla";

    ?>
    <p>************************************************************************</p>
    <h3> For Döngüsü</h3>
    <hr>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "For Tur: $i <br>";
    }
    ?>


    <p>************************************************************************</p>
    <h3> Foreach Döngüsü</h3>
    <hr>
    <?php

    $renkler = ["mavi", "sarı", "yeşil", "mor", "pembe"];
    foreach ($renkler as $renk) {
        echo "$renk <br>";
    }
    echo "<hr>";
    foreach ($renkler as $anahtar => $deger) {
        echo "$anahtar > $deger <br>";
    }

    ?>
    <p>************************************************************************</p>
    <h3> Çok Boyutlu Foreach Döngüsü</h3>
    <hr>
    <?php
    $ogrenciBilgi = array(
        "isim"      => "Havvanur",
        "soyisim"   => "Yıldız",
        "bolum"     => "Bilgisayar Prog.",
        "yas"       => "20",
        "memleket"  => "İzmir",
        "dersler"   => array(
            "Web Programlama",
            "Veri Tabanı",
            "Mobil Programlama"
        ),
        "numara"    => 123
    );

    echo "<pre>";
    print_r($ogrenciBilgi);
    echo "</pre>";

    echo (is_array($ogrenciBilgi) == 1) ? "\$ogrenciBilgi bir dizidir" : "\$ogrenciBilgi bir dizi değildir.";

    echo "<br><br><br><br>";
    foreach ($ogrenciBilgi as $ogrenciKey => $ogrenci) {

        if (is_array($ogrenci)) {

            foreach ($ogrenci as $dersKey => $ders) {
                echo "Alt Dizi: $dersKey - $ders <br>";
            }
        } else {
            echo "Ana Dizi: $ogrenciKey - $ogrenci <br>";
        }
    }


    ?>

    <p>************************************************************************</p>
    <h3> While Döngüsü (Break) </h3>
    <hr>

    <?php
    $basla = 1;
    while ($basla <= 10) {
        echo "While Tur: $basla <br>";
        if ($basla == 5) {
            echo "5 bulundu. Döngüden çıkılıyor(while).";
            break;
        }
        $basla++;
    }

    echo "<br>Başla Değişkeninin Değeri: $basla";
    ?>

    <p>************************************************************************</p>
    <h3> Do While Döngüsü (Break)</h3>
    <hr>

    <?php
    $basla = 1;
    do {
        echo "Do-While Tur: $basla <br>";
        if ($basla == 5) {
            echo "5 bulundu. Döngüden çıkılıyor(do-while).";
            break;
        }
        $basla++;
    } while ($basla <= 10);
    echo "<br>Başla Değişkeninin Değeri: $basla";

    ?>

    <p>************************************************************************</p>
    <h3> For Döngüsü (Break)</h3>
    <hr>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "For Tur: $i <br>";
        if ($i == 5) {
            echo "5 bulundu. Döngüden çıkılıyor(for).";
            break;
        }
    }
    ?>
    <!-- Continue döngünün bir bölümünün atlanarak devam edilmesini sağlar. -->

    <p>************************************************************************</p>
    <h3> While Döngüsü (Continue) </h3>
    <hr>

    <?php
    $basla = 0;
    while ($basla <= 10) {
        $basla++;
        if ($basla > 3 and $basla < 8) {
            continue;
        }
        echo "While Tur: $basla <br>";
    }

    echo "<br>Başla Değişkeninin Değeri: $basla";
    ?>

    <p>************************************************************************</p>
    <h3> For Döngüsü (Continue)</h3>
    <hr>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        if ($i > 3 and $i < 8) {
            continue;
        }
        echo "For Tur: $i <br>";
    }
    ?>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
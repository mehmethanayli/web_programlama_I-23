<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /* Php'de versiyon ve detay bilgisi phpinfo() ile öğrenilebilir. */
    //echo phpinfo();

    echo "<h4> Tırnak İşaretleri Arasındaki Farklar </h4>";

    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";


    /* Değişken İsminin Yazdırılması */
    echo "1-Kazandığınız Üniversite: \$uni";
    echo "<br>";
    echo "2-Kazandığınız Üniversite:" . ' $uni';
    echo "<br>";
    echo '3-Kazandığınız Üniversite: $uni';


    /* Değişken İçeriğinin Yazdırılması */
    echo "<br>";
    echo "1-Kazandığınız Üniversite: $uni";
    echo "<br>";
    echo "2-Kazandığınız Üniversite:" . $uni;
    echo "<br>";
    echo "3-Kazandığınız Üniversite:" . "$uni";
    echo "<br>";
    echo '4-Kazandığınız Üniversite:' . "$uni";
    echo "<br>";
    echo '5-Kazandığınız Üniversite:' . $uni;
    echo "<br>";



    echo "<hr> <h4> Temel Matematiksel İşlemler </h4>";
    echo "<h5> Toplama İşlemi </h5>";

    $sayi1 = 10;
    $sayi2 = 32;

    echo "Yöntem-1: \$sayi1 + \$sayi2 = " . ($sayi1 + $sayi2) . "<br>";
    echo "Yöntem-2: $sayi1 + $sayi2 = " . ($sayi1 + $sayi2) . "<br>";
    echo "Yöntem-3: İşlemin Sonucu: " . ($sonuc = $sayi1 + $sayi2) . "<br>";
    echo "Operatörlerin Yer Değişim Farklılığını Gösterir: " . ($sayi1 + $sayi2 = $sonuc) . "<br>";

    echo "Sayı-1: $sayi1  <br>";
    echo "Sayı-2: $sayi2 <br>";
    echo ($sayi1 += $sayi2) . "<br>";
    echo "Sayı-1: $sayi1 <br>";


    echo "<h5>Çıkarma İşlemi</h5>";

    $sayi1 = 50;
    $sayi2 = 27;

    echo "Yöntem-1: \$sayi1 - \$sayi2 =" .  ($sayi1 - $sayi2) . "<br>";
    echo "Yöntem-2: $sayi1 - $sayi2 =" .  ($sayi1 - $sayi2) . "<br>";
    echo "Yöntem-3: İşlemin Sonucu= " . ($sonuc = $sayi1 - $sayi2) . "<br>";


    echo "<h5>Çarpma İşlemi</h5>";

    $sayi1 = 50;
    $sayi2 = 27;

    echo "Yöntem-1: \$sayi1 * \$sayi2 =" .  ($sayi1 * $sayi2) . "<br>";
    echo "Yöntem-2: $sayi1 * $sayi2 =" .  ($sayi1 * $sayi2) . "<br>";
    echo "Yöntem-3: İşlemin Sonucu= " . ($sonuc = $sayi1 * $sayi2) . "<br>";


    echo "<h5>Bölme İşlemi</h5>";

    $sayi1 = 50;
    $sayi2 = 27;

    echo "Yöntem-1: \$sayi1 / \$sayi2 =" .  ($sayi1 / $sayi2) . "<br>";
    echo "Yöntem-2: $sayi1 / $sayi2 =" .  ($sayi1 / $sayi2) . "<br>";
    echo "Yöntem-3: İşlemin Sonucu= " . ($sonuc = $sayi1 / $sayi2) . "<br>";

    echo "<h5>Değişken Türünün Ekrana Yazdırılması: </h5>";
    $x = 4;
    $y = "4";
    echo "Değişkenin Türü (\$x): " . gettype($x) . "<br>";
    echo "Değişkenin Türü (\$y): " . gettype($y) . "<br>";

    echo $t = $x + $y;
    echo "<br>Değişkenin Türü (\$t): " . gettype($t) . "<br>";

    $y = "123";
    echo "Değişkenin Türü (\$y): " . gettype($y) . "<br>";
    $y = (int)$y;
    echo "Değişkenin Türü - Cast (\$y): " . gettype($y) . "<br>";

    $nesne = new stdClass();
    echo "Değişkenin Türü (\$nesne): " . gettype($nesne) . "<br>";

    $dizi = array();
    echo "Değişkenin Türü (\$dizi): " . gettype($dizi) . "<br>";


    echo "<h5>Üst Alma İşlemi (pow(x,y)) </h5>";
    $x = 4;
    $y = 3;
    echo "$x<sup>$y</sup>= " . pow($x, $y);


    echo "<h5>Karekök İşlemi (sqrt(x)) </h5>";
    $x = 81;
    echo "$x sayısının karekökü :" . (sqrt($x));


    echo "<h5>Mutlak Değer İşlemi (abs(x))</h5>";
    $x = (-12);
    $mutlak = abs($x);
    echo "|$x| sayısının mutlak değeri: $mutlak";


    echo "<h5>Taban Değişim İşlemi (base_convert(x,taban1,taban2))</h5>";
    echo "27 sayısının 2'lik tabandaki karşılığı : " . base_convert(27, 10, 2) . "<br>";
    echo "<br>";
    $sayi = 192;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi, $taban, $yenitaban);
    echo "($sayi)<sub>$taban</sub>=($sonuc)<sub>$yenitaban</sub>";

    echo "<h5>Mod  İşlemi (fmod(x,y))</h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($x, $y);
    echo "$x mod $y : $mod";

    /* Girilen Sayının Tek/Çift Olduğunu Kontrol Edelim */
    echo "<br>";
    $z = 99;
    echo "$z Sayısı: " . ((fmod($z, 2) == 0) ? "Sayıfı Çifttir." : "Sayı Tekdir.");

    #If-Else
    echo "<br> <br> If Else Uygulaması (Tek/Çift) <br>";
    if (fmod($z, 2) == 0) {
        echo "$z Sayısı Çifttir.";
    } else {
        echo "$z Sayısı Tektir.";
    }


    /* Uygulama: Formdan gelen bir sayının tek veya çift olduğunu ekrana yazdırınız. */


    echo "<h5>Yuvarlama İşlemleri (round(x,y))</h5>";
    $x = 15.313;
    $y = 15.385;

    echo "$x Bir ondalık basamak yuvarlaması sonucu: " . round($x, 1) . "<br>";
    echo "$y Bir ondalık basamak yuvarlaması sonucu: " . round($y, 1) . "<br>";

    echo "$x İki ondalık basamak yuvarlaması sonucu: " . round($x, 2) . "<br>";
    echo "$y İki ondalık basamak yuvarlaması sonucu: " . round($y, 2) . "<br>";


    echo "<h5>Yuvarlama İşlemleri (floor(x))</h5>";
    /* En yakın en küçük tam sayıya yuvarlar */
    $x = 15.913;
    $y = 15.213;
    echo "$x Floor yuvarlaması sonucu: " . floor($x) . "<br>";
    echo "$y Floor yuvarlaması sonucu: " . floor($y) . "<br>";


    echo "<h5>Yuvarlama İşlemleri (ceil(x))</h5>";
    /* Kendisinden büyük, en küçük tam sayıya yuvarlar */
    $x = 15.913;
    $y = 15.213;
    echo "$x Ceil yuvarlaması sonucu: " . ceil($x) . "<br>";
    echo "$y Ceil yuvarlaması sonucu: " . ceil($y) . "<br>";


    echo "<h5>Rasgele Sayı Üretme İşlemi (rand(x,y))</h5>";
    echo "10-100 Arasında Rasgele Sayı Üretildi: " . rand(10, 100);

    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i. Sayı:" . rand(0, 100) . "<br>";
    }

    /* 0-20 arasında bir sayı belirleyiniz ve bunu $sayi değişkenine alınız.
        0-20 arasında otomatik olarak 10 tane tahmin yaptırınız ve $sayi değişkenine
        eşit tahminlerde ekrana "Cevap Doğrudur" ifadesini yazdırınız.
    */
    $sayi = 12;


    ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
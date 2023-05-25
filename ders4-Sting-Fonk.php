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
    /** Uygulama Ödevi 
     * Kuyruk ve Yığın Veri yapılarının php üzerinde dizileri kullanılarak örneklendirmesini gerçekleştiriniz.
     * https://parskod.com/blog/stack-yigin-ve-queue-kuyruk-veri-yapilari.html
     */

    echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";

    $yazi = "Aydın Adnan Menderes Üniversitesi";

    echo "Değişkenin İçeriği: $yazi" . "<br> Değişkenin Türü : " . gettype($yazi);


    //İçeriğin Büyük Harfe Dönüştürülmesi:
    echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması:" . $buyuk_yazi = strtoupper($yazi);
    echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması:" . $buyuk_yazi = mb_strtoupper($yazi);


    //İçeriğin Küçük Harfe Dönüştürülmesi
    echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtolower($buyuk_yazi);
    echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);


    //İçeriğin İlk Harfinin, Büyük Harfe Dönüştürülmesi
    echo "<br> \$yazi İlk Harfinin, Büyük Harfle Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);


    //İçeriğin Tüm Kelimelerinin İlk Harfinin, Büyük Harfe Dönüştürülmesi
    echo "<br> \$yazi Tüm Kelimelerinin İlk Harfinin, Büyük Harfle Yazılması: " . $kelime = ucwords($kucuk_yazi);


    //İçeriğin harf sayısı:
    echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($kucuk_yazi);


    //Ascii Char Karşılığı
    echo "<br>Karakter Karşılığı: " . chr(109);
    echo "<br>Karakter Karşılığı: " . chr(64);


    // Uygulama 35-120 char karşılıkları:
    echo "<br> Ascii Karakterleri <br>";
    for ($i = 60; $i <= 120; $i++) {
        echo "{ " . chr($i) . " }";
    }


    //Metnin parçalanarak diziye dönüştürülmesi (explode)
    $yazi = "Lorem ipsum dolor sit amet consectetur aspernatur voluptate libero alias eaque reiciendis optio illo minus.";
    $dizi = explode(" ", $yazi);

    echo "<pre>";
    print_r($dizi);
    echo "</pre>";


    //Uygulama Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız.
    $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit rerum voluptas odio amet fugiat nam numquam. Soluta fugiat quam perspiciatis, maiores ad non amet inventore officiis quibusdam totam ducimus adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illo, repellendus maxime ut dolores quam esse quas ipsum eveniet quasi. Voluptatem, delectus aliquam praesentium atque quo adipisci illum voluptatibus minus?";
    $kelimeDizisi = explode(" ", $metin);
    $cumleDizisi = explode(".", $metin);
    echo "<br> Kelimelerin Sayısı: " . count($kelimeDizisi);
    echo "<br> Cümlelerin Sayısı: " . count($cumleDizisi);


    /* Uygulama
        Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
    */

    echo "<br>";
    $tarih = "2021-12-25";
    $yeniTarihDizisi = explode("-", $tarih);
    echo "<pre>";
    print_r($yeniTarihDizisi);
    echo "</pre>";

    echo "Eski Tarih: $tarih <br>";
    echo "Yeni Tarih: $yeniTarihDizisi[2] - $yeniTarihDizisi[1] - $yeniTarihDizisi[0]";


    //Dizinin metne dönüştürülmesi (implode)
    echo "<br>";
    $aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs"];

    echo "<pre>";
    print_r($aylar);
    echo "</pre>";

    $aylarString = implode(" - ", $aylar);
    echo $aylarString;


    /*
        str_split():
    Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. 
    Eğer sayı belirtilmezse metni harf harf böler. 
     */

    echo "<br>";
    $iban = "TR0010002000300040005000";
    $yeniIban = str_split($iban, 4);

    echo "<pre>";
    print_r($yeniIban);
    echo "</pre>";

    echo "<br>İmplode Iban: " . implode(" ", $yeniIban);

    echo "<br> Foreach Iban: ";
    foreach ($yeniIban as $parca) {
        echo  "$parca ";
    }

    echo "<br> For Iban: ";
    for ($i = 0; $i < count($yeniIban); $i++) {
        echo $yeniIban[$i] . " ";
    }


    /*  Trim - Substr - str_replace - md5 - sha1 */


    ?>















    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
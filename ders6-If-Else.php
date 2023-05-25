<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else</title>
</head>

<body>
    <h3>Koşul İfadesi (IF-ELSE)</h3>
    <p>If-else bloklarında öncelikle koşul belirtilir ve sonraki işlemler koşula göre devam eder.</p>

    <h5>Karşılaştırma Operatörleri</h5>

    <ul>
        <li> == ($a == $b) Eşit ise. (Genellikle matematiksel bir karşılaştırma yapmak için kullanılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle string bir karşılaştırma yapmak için kullanılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle matematiksel bir karşılaştırma yapmak için kullanılır.)</li>
        <li> !== ($a! == $b) Denk değil ise. (Genellikle string bir karşılaştırma yapmak için kullanılır.)</li>
        <li> > ($a! > $b) Büyük ise</li>
        <li> >= ($a! >= $b) Büyük veya eşit ise</li>
        <li>
            < ($a! < $b) Küçük ise</li>
        <li>
            <= ($a! <=$b) Küçük veya eşit ise</li>
    </ul>

    <h5>Mantıksal Operatörler</h5>
    <ul>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri false ise true döner. Aksini yapar, olumsuz mu diye sorar.</li>

        <li> && - AND (ve) ($a && $b) --> $a ve $b'nin değerleri olumlu ise true döner. İki koşulda sağlanmak zorundadır. Koşullardan bir tanesi false döner ise genel koşul false olur.</li>

        <li> || - OR (veya) ($a || $b) --> $a veya $b'nin değeri olumlu ise true döner. İki koşulda sağlanmak zorunda değildir. Koşullardan bir tanesi true döner ise genel koşul true olur.</li>

    </ul>


    <h5>Not: </h5>
    <ul>
        <li>Elseif sürekli devam eden bir sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. Herhangi bir şart belirtilmez. Hiçbir ön koşul gerçekleşmediğinde çalışan son koşulu ifade eder. </li>
    </ul>


    <?php
    /* 

    if (condition) {
    # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else{

    }

    */

    $sayi1 = 15;
    $sayi2 = 75;
    $text = "ADU";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br> If Bloğu Çalıştı: $sayi1";
    } else {
        echo "<br> Else Bloğu Çalıştı: $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br> If Bloğu Çalıştı (Değil): $sayi1";
    } else {
        echo "<br> Else Bloğu Çalıştı: $sayi1";
    }

    /* Eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br> Sayılar Eşittir: $sayi1 = $sayi2";
    } else {
        echo "<br> Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* Eşitlik Yoksa */
    if ($sayi1 != $sayi2) {
        echo "<br> Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br> Sayılar Eşittir: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci ") {
        echo "<br> Girilen Değerler Aynı";
    } else {
        echo "<br> Girilen Değerler Aynı Değil";
    }

    /* Denklik Varsa */
    if ($text === "ADU") {
        echo "<br> Girilen Değerler Aynı";
    } else {
        echo "<br> Girilen Değerler Aynı Değil";
    }

    /* Denklik Varsa */
    if ($sayi1 === "15") {
        echo "<br> Girilen Değerler Aynı";
    } else {
        echo "<br> Girilen Değerler Aynı Değil";
    }

    /* Denklik Varsa */
    if ($sayi1 === 15) {
        echo "<br> Girilen Değerler Aynı";
    } else {
        echo "<br> Girilen Değerler Aynı Değil";
    }

    /* AND */
    if (($sayi1 == 15) && ($sayi2 == 75)) {
        echo "<br> Koşul gerçekleşti. ";
    } else {
        echo "<br> Koşul gerçekleşmedi.";
    }

    /* AND */
    if (($sayi1 == 15) && ($sayi1 === "15")) {
        echo "<br> Koşul gerçekleşti. ";
    } else {
        echo "<br> Koşul gerçekleşmedi.";
    }

    /* OR */
    if (($sayi1 == 15) || ($sayi1 === "15")) {
        echo "<br> Koşul gerçekleşti. ";
    } else {
        echo "<br> Koşul gerçekleşmedi.";
    }


    /* OR */
    if ((10 >= 15) || (25 <= 75)) {
        echo "<br> Koşul gerçekleşti. ";
    } else {
        echo "<br> Koşul gerçekleşmedi.";
    }

    if ($sayi1 > $sayi2) {
        echo "<br>  \$sayi1 değişkeni \$sayi2 değişkeninden büyüktür. $sayi1 > $sayi2";
    } else {
        echo '<br>  $sayi1 değişkeni $sayi2 değişkeninden büyük değildir.' . "$sayi1 < $sayi2";
    }

    if ($sayi1 <= $sayi2) {
        echo "<br>  \$sayi1 değişkeni \$sayi2 değişkeninden küçük veya eşittir. $sayi1 <= $sayi2";
    } else {
        echo '<br>  $sayi1 değişkeni $sayi2 değişkeninden büyüktür.' . "$sayi1 > $sayi2";
    }



    /*
    Uygulama: Saat değişkeni gece 1-5 arası iyi geceler, 5-12 arası günaydın, 12-17 arası tünaydın ifadelerini ekrana yazdırınız.
    */
    $saat = 4;
    if ((1 < $saat) and ($saat < 5)) {
        echo "<hr>İyi Geceler Saat: $saat";
    } elseif (($saat > 5) and ($saat < 12)) {
        echo "<hr>Günaydın Saat: $saat";
    } elseif (($saat > 12) and ($saat < 17)) {
        echo "<hr>Tünaydın Saat: $saat";
    } else {
        echo "Serberst Zaman Saat: $saat";
    }

    /* 
    Uygulama:
    Rasgele 0-100 arasında üretilen sayının tek veya çift olduğunu if kullanarak ekrana yazdırınız.
    */
    echo "<h3>Rasgele sayının tek çift olma kontrolü: </h3>";
    $sayi = rand(0, 100);
    echo "<br>Rasgele Üretilen Sayı:  $sayi <br>";

    if (fmod($sayi, 2) == 0) {
        echo "Sayı Çifttir: $sayi";
    } else {
        echo "Sayı Tektir: $sayi";
    }

    echo "<br>";
    echo (fmod($sayi, 2) == 0) ? "Sayı Çifttir." : "Sayı Tektir.";

    /* 
    Uygulama:
    Rasgele 0-100 arasında üretilen sayının 50'den büyük olduğunda geçtiniz, küçük olduğunda kaldınız ifadelerini ekrana yazdırınız.
    */

    echo "<h3>Ders Geçme Kontrolü: </h3>";
    if (rand(0, 100) >= 50) {
        echo "Geçtiniz";
    } else {
        echo "Kaldınız";
    }

    echo "<br><br><br>";
    echo (rand(0, 100) <= 50) ? "Kaldınız" : "Geçtiniz";

    /* 
    Uygulama:
    Doğum yılı verilen bir kişinin 18 yaşından büyük olma durumu kontrol edilerek ehliyet alabileceğine karar verilmek istenmektedir. Eğer 18 yaşından küçükse kaç yıl beklemesi gerektiği de kişiye bildirilmelidir.
    */
    echo "<h3>Ehliyet Alma Kontrolü: </h3>";

    $suanki_yil = date("Y");
    $dogum_yili = rand(1990, 2006);
    $yas = $suanki_yil - $dogum_yili;

    if ($yas >= 18) {
        echo "Yaşınız: $yas --- Ehliyet alabilirsiniz... ";
    } else {
        echo "Ehliyet alabilmek için " . (18 - $yas) . " yıl beklemeniz gerekiyor.";
    }

    ?>










    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Shift + Alt + A -->

    <?php
    /* Shift + Alt + A (Çok Satır) */
    // Açıklama Satırı (Tek Satır)

    /* Komut:
        echo: Ekrana yazdırma işlemi yapar.
        İçerisinde html etiketleri kullanılabilir.
        Çift veya tek tırnak ile kullanılabilir.
        Çift tırnak içerisinde değişken içerikleri gösterilir.
        Nokta işareti (.) ile birleştirme işlemi yapılabilir.
        \ Kaçış karakteridir. Özel ifadelerden önce kullanılır. 
    */


    echo "Merhaba";
    echo "<br> <hr>";
    echo "<h1>Adu - Bil Pro</h1>";
    echo "<h2>Adu - Bil Pro</h2>";
    echo "<h3>Adu - Bil Pro</h3>";
    echo "<h4>Adu - Bil Pro</h4>";
    echo "<h5>Adu - Bil Pro</h5>";
    echo "<h6>Adu - Bil Pro</h6>";



    echo "Aydın Meslek Yüksekokulu" . "Bilgisayar Programcılığı" . "<br>";
    echo "Aydın Meslek Yüksekokulu Bilgisayar Programcılığı<br>";

    echo "<hr> <h4> Değişken Tanımlama Kuralları: </h4>";
    echo "<ol>
            <li> Değişken isimleri $ işareti ile başlar. </li>
            <li> Değişken isimleri sayısal bir ifade ile başlayamaz. </li>
            <li> Değişken isimlerinde boşluk kullanılmaz (birinci_sinif, birinciSinif).</li>
            <li> Dizin, Dosya ve Değişken isimlerinde Türkçe karakter ve boşluk kullanılmamalıdır.</li>
            <li> Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır ( test != Test ).</li>
            <li> Değişken içerisinde eğer metinsel bir ifade varsa (\") veya tek tırnak (') kullanılabilir. </li>
            <li> Değişken içersinde sayısal bir ifade varsa tırnak kullanılmadan yazılır.</li>
            <li> Değişken isimi, değişkenin içeriğini ifade etmelidir.</li>
            <li> Değişkenler ekrana echo komutuyla yazdırılabilir.</li>
    </ol>";

    $isim       = "Mehmet";
    $soyisim    = "Han";
    $yas        = 35;

    echo $isim . $soyisim . "<br>";
    echo $isim . " " . $soyisim . "<br>";
    echo "$isim  $soyisim  <br>";

    /* Uygulama:
        Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo veya form içerisinde gösteriniz.
    */
    $uni    = "ADÜ";
    $myo    = "AYMES";
    $ad     = "Ewren";
    $soyad  = "Kül";
    $no     = "1234";
    ?>

    <h3>Öğrencini Bilgileri</h3>
    <form action="" method="post">
        <label for="universite"> Üniversite Adı:</label>
        <input type="text" name="" id="universite" value="<?php echo $uni; ?>">
        <br>
        <label for="myo">MYO</label>
        <input type="text" name="" id="mo" value="<?php echo $myo; ?>">
        <br>
        <label for="ogrenci_adi">Öğrenci Adı</label>
        <input type="text" name="" id="ogrenci_adi" value="<?php echo $ad; ?>">
        <br>
        <label for="ogrenci_soyadi">Öğrenci Soyadı</label>
        <input type="text" name="" id="ogrenci_soyadi" value="<?php echo $soyad; ?>">
        <br>
        <label for="no">Öğrenci Numarası</label>
        <input type="text" name="" id="no" value="<?php echo $no; ?>">
    </form>






</body>

</html>
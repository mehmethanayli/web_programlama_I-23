<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonksiyonlar</title>
</head>

<body>
    <!-- 
    
    Fonksiyonlar	: Herhangi bir programlamada belirli bi veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan küçük programlara verilen isimdir. Fonksiyonlar çağırılmadan çalışmazlar.

    Kurallar:
    1. Fonksiyon isimleri anlamlı olmalıdır.
    2. Alfanumerik değerler veya alt çizgi kullanılabilir.
    3. Fonksiyon isimleri rakam ile başlayamaz.
    4. Fonksiyon isimleri harf ve _ ile başlamalıdır.
    5. Boşluk, Türkçe Karakterler ve özel karakterler kullanılamaz.
    6. Php tarafından kullanılan isimler fonksiyon ismi olarak kullanılamaz.
    7. Fonksiyon isimleri küçük/büyük harf duyarlı değildir.
    8. Fonksiyonlar kapsama/etki alanına kurallara tabidir.
    

    Yapısı:
        function isim(Parametre veya Parametreler){
            Kod Blokları....
        }
    

    -->

    <?php
    $universite = "Aydın Adnan Menderes Üniversitesi";

    function bilgiver()
    {
        echo "Merhaba Bilgiver fonksiyonu çalıştı.";
    }

    bilgiver();

    echo "<br>";
    function detayli_bilgiver($bilgi)
    {
        echo "$bilgi'nde okuyan öğrencilerin bilgisi.";
    }

    detayli_bilgiver($universite);


    echo "<br>";
    function kutuphane()
    {
        return "Adnan Menderes Kütüphanesi";
    }

    $deger = kutuphane();

    echo $deger;


    echo "<br>";
    function kutuphane_kitap_sayisiver()
    {
        $kitap_sayisi = 1500;
        return $kitap_sayisi;
        //return 1500;
    }

    echo kutuphane_kitap_sayisiver();


    echo "<br>";
    function kutuphane_kitap_sayisini_arttir($yeni_kitap_sayisi)
    {
        $sonuc = 1500 + $yeni_kitap_sayisi;
        return $sonuc;
    }

    echo "Yeni Kitap Sayısı:" . kutuphane_kitap_sayisini_arttir(2500);

    echo "<br>";

    $isimler = [
        "Ali",
        "Ayşe",
        function () {
            echo "Dizi içerisindeki fonksiyon çalıştı.";
        }
    ];

    $isimler[2]();


    function ogrenci_bilgisini_gonder($isim, $soyisim, $gsm)
    {
        $ogrenci_adi = $isim;
        $ogrenci_soyadi = $soyisim;
        $ogrenci_gsm = $gsm;
        $ogrenci_durum = "Mezun";

        return array($ogrenci_adi, $ogrenci_soyadi, $ogrenci_gsm, $ogrenci_durum);
    }

    $veri = ogrenci_bilgisini_gonder("Ali", "Kaçar", 112);
    echo "<pre>";
    print_r($veri);
    echo "</pre>";

    function ogrenci_bilgisini_gonder2($isim, $soyisim, $gsm, $durum = "Öğrenci")
    {
        $ogrenci_adi = $isim;
        $ogrenci_soyadi = $soyisim;
        $ogrenci_gsm = $gsm;
        $ogrenci_durum = $durum;

        return array($ogrenci_adi, $ogrenci_soyadi, $ogrenci_gsm, $ogrenci_durum);
    }

    $veri = ogrenci_bilgisini_gonder2("Ali", "Kaçar", 112);
    echo "<pre>";
    print_r($veri);
    echo "</pre>";



    function not_hesapla($vize, $final)
    {
        return ($vize * 0.3) + ($final * 0.7);
    }
    echo "<br>";
    echo "Öğrencinin Not: " . not_hesapla(80, 100);


    /* Recursive Fonksiyon:  */
    echo "Recursive Fonksiyon";

    function islem_yap($sayi)
    {
        if ($sayi <= 25) {
            echo $sayi . "<br>";
            islem_yap($sayi + 1);
        }

    }
    echo "<br>";

    islem_yap(1);

    /* Recursive olarak faktöryel hesabı yapan bir fonksiyon yazınız. */

    ?>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
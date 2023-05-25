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

    $isimler = array();
    echo gettype($isimler) . "<br>";
    $isimler[] = "Mehmet";
    $isimler[] = "Ayşe";
    $isimler[5] = "Hanifi";
    $isimler[] = "Aysel";
    $isimler[2] = "Esra";
    $isimler[3] = "Asya";
    $isimler[3] = "Gökçe";
    $isimler["isim1"] = "Gökçe";
    $isimler["isim2"] = "Murat";
    $isimler[] = "Aliye";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    /* Uygulama:
    Çıktı: Havvanur Yıldız isimli öğrenci bilgileri aşağıda verilmiştir. Bu bilgileri içeren bir dizi yapısı oluşturunuz.

    İsim: Havvanur
    Soyisim: Yıldız
    Bölüm: Bilgisayar Programcılığı 
    Yaş: 20 
    Sınıf: 2
    Memleket: İzmir
    Dersler: Web Programlama, Veri Tabanı, Mobil Uygulama 
    
    */

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
        )
    );

    echo "<pre>";
    print_r($ogrenciBilgi);
    echo "</pre>";
    /* Uygulama:
    Çıktı Olarak Aşağıdaki İfadeyi Dizi içerisindeki verileri kullanarak yazdırınız.
    
    Havvanur Yıldız isimli öğrenci Bilgisayar Prog. bölümünde okumaktadır. Öğrencinin Web Programlama, Veri Tabanı ve Mobil Programlama dersleri bulunmaktadır. */


    echo  "$ogrenciBilgi[isim] $ogrenciBilgi[soyisim] isimli öğrenci $ogrenciBilgi[bolum] bölümünde okumaktadır. Öğrencinin " .
        $ogrenciBilgi["dersler"][0] . " " .
        $ogrenciBilgi["dersler"][1] . " " .
        $ogrenciBilgi["dersler"][2] . " dersleri bulunmaktadır.";

    /* Uygulama Ödevi: 

    ogrenci_bilgileri isimli içerisinde 3 adet öğrenciye ait bilginin bulunacağı yeni bir dizi oluşturunuz.   
    Oluşturulan dizinin içeriğindeki öğrenci bilgilerini html bir tablo yaparak içerisine yazdırınız.
    
    Örnek Çıktı:

    No     Adı     Soyadı    Bolum     Yas    Dersler ....
    1      Ali     Korkmaz    
    2      Sena    Uçar
    3      Ayşe    Yılmaz   

    */


    $ogrenci_bilgileri = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Ahmet",
            "soyadi"    => "Yenilmez",
            "gsm"       => "053222222",
            "cinsiyet"  => "Erkek",
            "dersler"   => array(
                "Web Programlama",
                "Veri Tabanı",
                "Mobil Programlama"
            ),
            "yas"       => 30,
            "sinif"     => 2,
            "memleket"  => "İzmir"
        ), "ogrenci2" => array(
            "id"        => 2,
            "adi"       => "Hamza",
            "soyadi"    => "Yavaş",
            "gsm"       => "256 225",
            "cinsiyet"  => "Erkek",
            "dersler"   => array(
                "İnternet Programciligi",
                "Mobil Programlama"
            ),
            "yas"       => 18,
            "sinif"     => 2,
            "memleket"  => "Manisa"
        ), "ogrenci3" => array(
            "id"        => 3,
            "adi"       => "Gülbahar",
            "soyadi"    => "Güzel",
            "gsm"       => "256 225",
            "cinsiyet"  => "Kadın",
            "dersler"   => array(
                "Mesleki Uygulama ve Proje",
                "Yabancı Dil"
            ),
            "yas"       => 22,
            "sinif"     => 1,
            "memleket"  => "Rize"
        )
    );


    echo "<pre>";
    print_r($ogrenci_bilgileri);
    echo "</pre>";
    echo "Öğrenci Bilgileri Dizisinin Eleman Sayısı:" . count($ogrenci_bilgileri);

    ?>










    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
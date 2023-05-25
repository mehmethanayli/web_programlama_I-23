<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try-Catch</title>
</head>

<body>
    <!-- 
		try			= Hata oluşturabilecek kodlar için kullanılır. 

		catch		= Hata oluştuğunda çalıştırılacak kodlar için kullanılır.

		finally		= Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır. 

		throw		= Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.

		Exception	= Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılırlar.

		getMessage	= Tüm istirnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.

	try {
		Kod Blokları
		throw new Exception("Hata iletisi", 1);
		
		
	} catch (Exception İleti Ataması) {
		
	}finally{

	}

-->
    <p>************************************************************************</p>
    <h3> Try Catch İşlemi</h3>
    <hr>

    <?php

    $deger1 = 25;
    $deger2 = 0;

    try {
        if ($deger2 == 0) {
            throw new Exception("Sıfıra bölme işlemi gerçekleştirilemez", 1);
        } else {
            echo "Bölme işleminin sonucu: " . $deger1 / $deger2;
        }
    } catch (Exception $sonuc) {
        echo $sonuc->getMessage();
    }



    echo "<hr>";
    $isim = "Mehmet";
    try {
        if ($isim == "Mehmet") {
            echo "Merhaba $isim, nasılsın";
        } elseif ($isim == "Ali") {
            throw new Exception("Sen Ali'sin Mehmet Değilsin.", 1);
        } else {
            throw new Exception("Sen Kimsin...", 1);
        }
        echo "<br>Throw oluşursa burası çalışmaz....";

    } catch (Exception $sonuc) {
        echo $sonuc->getMessage();
    } finally {
        echo "<br><br>Finally bloğu çalıştı.";
    }


    ?>








    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
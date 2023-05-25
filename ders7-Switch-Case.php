<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <!-- 
	switch 	: Koşul başlat.
	chase 	: Koşul Kontrol et.
	break	: Koşul kontrolünü sonlandır.
	default	: Koşul olumsuzlukları sonucu.

Kullanım-1
switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}

Kullanım-2
switch (variable):
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
endswitch;


-->


    <p>************************************************************************</p>
    <h3> Switch Case İşlemi</h3>
    <hr>

    <?php

    $deger = 25;
    switch ($deger) {
        case ($deger < 10):
            echo "Sayı 10'den küçük.";
            break;

        case ($deger < 20):
            echo "Sayı 20'den küçük.";
            break;
        case ($deger < 30):
            echo "Sayı 30'dan küçük.";
            break;
        default:
            echo "Varsayılan işlem, case'ler gerçekleşmedi.";
            break;
    }

    echo "<hr>";

    $ay = "Ocak";
    switch ($ay) {
        case ($ay === "Ocak"):
            echo "$ay 1. Aydır.";
            break;
        case ($ay === "Şubat"):
            echo "$ay 2. Aydır.";
            break;
        case ($ay === "Mart"):
            echo "$ay 3. Aydır.";
            break;
        case ($ay === "Nisan"):
            echo "$ay 4. Aydır.";
            break;
        case ($ay === "Mayıs"):
            echo "$ay 5. Aydır.";
            break;
        default:
            echo " ($ay) - Listede böyle bir ay yok.";
            break;
    }

    echo "<hr>";

    $saat = 19;
    switch ($saat) {
        case ($saat >= 0) and ($saat <= 6):
            switch ($saat) {
                case ($saat == 1):
                    echo "Saat Şuanda: $saat";
                    break;
                case ($saat == 2):
                    echo "Saat Şuanda: $saat";
                    break;
                case ($saat == 3):
                    echo "Saat Şuanda: $saat";
                    break;
                case ($saat == 4):
                    echo "Saat Şuanda: $saat";
                    break;
                case ($saat == 5):
                    echo "Saat Şuanda: $saat";
                    break;
                case ($saat == 6):
                    echo "Saat Şuanda: $saat";
                    break;
                default:
                    echo "Yanlış değer girdiniz.";
                    break;
            }
            break;

        case ($saat > 6) and ($saat <= 12):
            echo "Saat 6 ile 12 arasında mesai yok.";
            break;

        case ($saat > 12) and ($saat <= 18):
            break;

        default:
            echo " ($saat) - Default çalıştı.";
            break;
    }

    /** Uygulama
     * Switch case ile mesai saatlerine göre ekrana bir çıktı üreten kod bloğunu yazınız?
     */



    ?>








    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
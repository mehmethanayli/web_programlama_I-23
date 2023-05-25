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




    ?>


</body>

</html>
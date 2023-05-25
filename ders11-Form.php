<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    Form İşlemleri :
    <hr>
    <!-- 
Aynı sayfada birden fazla form gönderilecek ise mutlaka formdaki butona name değeri verilmelidir. Name üzerinden forma ulaşmak en güzelidir.

-->
    <h3>Form-1</h3>
    <hr>

    <form action="" method="GET">
        Adınız Soyadınız: <input type="text" name="adsoyad"><br>
        Email: <input type="text" name="email"><br>
        Telefon: <input type="text" name="tel"><br>
        Cinsiyet <input type="radio" name="cinsiyet">Erkek <input type="radio" name="cinsiyet">Kadın <br>

        Yaşınız: <select name="yas">
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>

        <input type="submit" value="Formu Gönder" name="form1">

    </form>

    <h3>Form-2</h3>
    <hr>

    <form action="#" method="POST">
        Adınız Soyadınız: <input type="text" name="adsoyad"><br>
        Email: <input type="text" name="email"><br>

        Dersler:<br>
        <input type="checkbox" name="dersler[]" value="web"> Web<br>
        <input type="checkbox" name="dersler[]" value="php"> Php<br>
        <input type="checkbox" name="dersler[]" value="sql"> Sql<br>


        <input type="submit" value="Formu Gönder" name="form2">

    </form>


    <?php

    if (isset($_POST["form2"])) {
        $adsoyad = $_POST["adsoyad"];
        $dersler= $_POST["dersler"];

        foreach ($dersler as $ders) {
            echo "$ders <br>";
        }
    }
    


    ?>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
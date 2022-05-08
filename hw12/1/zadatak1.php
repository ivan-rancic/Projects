<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<header class="header">

<h1>Kalkulator za dnevni unos kalorija</h1>

</header>

<body>

<div class="container">


<div class="divlevi">
<div class="phpc">
<?php

if (isset($_POST["sub"])) {

if (isset ($_POST['zanimanje']) && ($_POST['zanimanje'] != "izaberi")) {
   $zanimanje = $_POST['zanimanje'];

   if (!empty ($_POST['godine'])) {
    $godine = $_POST['godine'];

    if (!empty ($_POST['masa'])) {
        $masa = $_POST['masa'];


        $aktivnost = 0;
        if ($zanimanje == 'programer' || $zanimanje == "adm" || $zanimanje == "menadzer") {
        $aktivnost = 100;
        } else if ($zanimanje == "policajac" || $zanimanje == "vojnik") {
        $aktivnost = 200;
        } else if ($zanimanje == "sportista") {
        $aktivnost = 300;
        } else {
            $aktivnost = 150;
        }

        $starost = 0;
        if ($godine > 0 && $godine <= 3) {
        $starost = 1.9;
        } else if ($godine > 3 && $godine <= 10) {
            $starost = 1.5;
        } else if ($godine > 3 && $godine <= 10) {
            $starost = 1.5;
        } else if ($godine > 10 && $godine <= 18) {
            $starost = 1.2;
        } else if ($godine > 18 && $godine <= 26) {
            $starost = 1;
        } else if ($godine > 26 && $godine <= 30 || $godine > 49 && $godine <= 60) {
            $starost = 0.8;
        } else if ($godine > 30 && $godine <= 35 || $godine > 44 && $godine <= 49) {
            $starost = 0.7;
        } else if($godine > 35 && $godine <= 44 || $godine > 60) {
            $starost = 0.6;
        }

        $max = $masa * $aktivnost * $starost;

        
        echo "<br>";
        echo " Imate $godine godina, teški ste $masa kilograma i po zanimanju ste $zanimanje!";
        echo "<br>";
        echo "Trebalo bi da dnevno unesete maksimalno $max kalorija!";

    }else {
        echo"Morate uneti telesnu masu!";
    }
}else {
    echo"Morate uneti godine!";
}
}else{
    echo "Morate odabrati zanimanje!";
}
}

?>

<br>

<a href="zadatak1.html"><button class="but">Nazad na formu</button></a> 

</div>

</div>



</div>
    
</body>
</html>






















































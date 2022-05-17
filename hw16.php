<?php

//zadatak 1



function mejlFilter ($nizMejlova) {
    if (is_array($nizMejlova)) {
    foreach ($nizMejlova as $id => $vrednost) {
        if (strpos($vrednost, "@")===false) {
            $flag = false ;
            break;
        } else {
            $flag = true;
        }
    }

    if ($flag === false) {
        echo "Nije svaki mejl unet ispravno";
    } else {
        echo "Unos je ispravan!";
    }
} else {
    die ("Morate uneti niz!");
}
}
$mejlovi = array ('ivan@gmail.com', 'milica@gmail.com', 'pera@gmail.com');
mejlFilter($mejlovi);



//zadatak 2

function racunanje ($nizBrojeva, $operacija = "+") {
    if (is_array($nizBrojeva)) {

        $nulaplus = 0;
        $nulaputa = 1;

foreach ($nizBrojeva as $id => $broj) {

switch ($operacija) {
case "-": 
    $rezultat = $nulaplus -= $broj;
    break;
case "*":
    $rezultat = $nulaputa*= $broj;
    break;
case "/":
    $rezultat = $nulaputa/= $broj;
    break;
case "+":
    $rezultat = $nulaplus += $broj;
    break;
default:
    echo " Po defaultu su brojevi sabrani!";
}
}
echo $rezultat;
}
}

$brojevi =[5,7,2,44,5];

racunanje ($brojevi, "+");


//zadatak 3

function proveraKljuca ($niz, $kljuc) {
    if (is_array($niz)) {
foreach ($niz as $key => $value) {
if ($key == $kljuc) {
    $flag = true;
    break;
}else{
    $flag = false;
}
}

} 
if ($flag == true) {
    echo "Traženi ključ postoji!";
} else {
    echo "Traženi ključ ne postoji!";
}                 
}


$asNiz = array ('name' => "Ivana",
                'last_name' => "Ivic",
                'age' => 26,
                'gender' => "female",
                'avg_rating' => 3.5);

proveraKljuca ($asNiz, 'gendersdwsd');


















?>
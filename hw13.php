<?php

// Povrsina pravougaonika + pola kruga

function povrsina1 ($a, $b) {
    $p1 = $a * $b + (pow($b/2,2)*pi())/2;
    return $p1;
}

$p1 = povrsina1(4,3);
echo "Površina pravougaonika plus pola kruga je: " . $p1 . "<br>";

// Povrsina pravougaonika

function povrsina2 ($a, $b) {
    $p2 = $a * $b;
    return $p2;
}

$p2 = povrsina2(4,3);
echo "Površina pravougaonika je: " . $p2 . "<br>";

// Povrsina kruga

function povrsina3 ($e) {
    $p3 = pow($e,2)*pi();
    return $p3;
}

$p3 = povrsina3(2);
echo "Površina kruga je: " . $p3 . "<br>";




// Ukupna površina preko global bez ponovnog unosa parametara

// function ukupnaPovrsina () {
// global $p1;
// global $p2;
// global $p3;
// $up = $p1 + $p2 +$p3;
// return $up;
// }

// $up = ukupnaPovrsina();
// echo $up;





// Ukupna površina funkcija u funkciji

function ukupnaPovrsina ($a, $b, $e) {
    $up = povrsina1($a, $b) + povrsina2($a, $b) + povrsina3($e);
    echo "Ukupna površina bazena je:" . $up;
}

ukupnaPovrsina(4,3,2);

?>
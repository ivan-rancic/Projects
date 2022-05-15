<?php

function kamioni ($ukupnoGorivo, $potrosnaPoKamionu, $ostatakGorivaFlag=false) {

$brojKamiona = floor($ukupnoGorivo/$potrosnaPoKamionu);
$ostatakGoriva = $ukupnoGorivo%$potrosnaPoKamionu;

if ($ostatakGorivaFlag) {
    return $ostatakGoriva;
}else {
    return $brojKamiona;
}

}

echo kamioni(1000,300, false);














?>
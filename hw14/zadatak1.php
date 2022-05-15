<?php

if (isset ($_POST['but'])) 

    // var_dump($_POST);


    if((((intval($_POST['godina'])) % 4) == 0) && ((((intval($_POST['godina'])) % 100) != 0) || (((intval($_POST['godina'])) %400) == 0))) {
        $brojDanaUFebruaru = 29;  
} else {
    $brojDanaUFebruaru =28;
}  



if (empty ($_POST['dan']) || !is_numeric($_POST['dan']) || ($_POST['dan'])<=0 || ($_POST['dan'])>31) {
    die ('Morate uneti ispravno dan!');
} else {
    $dan = $_POST['dan'];}



    $meseci = ["januar", "februar", "mart", "april", "maj", "jun", "jul", "avgust", "septembar", "oktobar", "novembar", "decembar"];


if (!empty ($_POST['mesec'])) {
    if (!in_array(strtolower($_POST['mesec']), $meseci))  {
        if (!is_numeric($_POST['mesec']) || $_POST['mesec'] <= 0 || $_POST['mesec']>12) {
            die ('Morate uneti ispravno mesec!');
        } else {


            if ($_POST['mesec'] == "2" && $_POST['dan']>$brojDanaUFebruaru) {
                die ("Upozorenje: Februar ima $brojDanaUFebruaru dana!");
            }
            if ($_POST['mesec'] == "4" && $_POST['dan']>30 ) {
                die ("Upozorenje: April ima 30 dana!");
            }
            elseif ($_POST['mesec'] == "6" && $_POST['dan']>30 ) {
                die ("Upozorenje: Jun ima 30 dana!");
            }
            elseif ($_POST['mesec'] == "9" && $_POST['dan']>30 ) {
                die ("Upozorenje: Septembar ima 30 dana!");
            }
            elseif ($_POST['mesec'] == "11" && $_POST['dan']>30 ) {
                die ("Novembar: Septembar ima 30 dana!");
            } else {

                $mesec = $_POST['mesec'];
            }
          
        }
    } else {

        if ($_POST['mesec'] == "februar" && $_POST['dan']>$brojDanaUFebruaru) {
            die ("Upozorenje: Februar ima $brojDanaUFebruaru dana!");
        }
        if ($_POST['mesec'] == "april" && $_POST['dan']>30 ) {
            die ("Upozorenje: April ima 30 dana!");
        }
        elseif ($_POST['mesec'] == "jun" && $_POST['dan']>30 ) {
            die ("Upozorenje: Jun ima 30 dana!");
        }
        elseif ($_POST['mesec'] == "septembar" && $_POST['dan']>30 ) {
            die ("Upozorenje: Septembar ima 30 dana!");
        }
        elseif ($_POST['mesec'] == "novembar" && $_POST['dan']>30 ) {
            die ("Novembar: Septembar ima 30 dana!");
        } else {
            $mesec = $_POST['mesec'];
        }
       
    }
} else {
    die ('Morate uneti ispravno mesec!');
}
    


if (empty ($_POST['godina']) || !is_numeric($_POST['godina']) || ($_POST['godina'])<=1970 || ($_POST['godina'])>2100) {
    die ('Morate uneti ispravno godinu (posle 1970. godine)!');
    } else {
        $godina = $_POST['godina'];
        }




echo "Ispravan unos!" . "<br>" . "Datum koji ste uneli je: " . $_POST['dan'] . ". " . $_POST['mesec'] . " " . $_POST['godina'] . ".";



?>
<?php


if (isset($_GET["sub"])) {

if (!empty($_GET["user_name"])) {
    $ime = $_GET["user_name"];
    if (!empty($_GET["user_surname"])) {
        $prezime = $_GET["user_surname"];
        if (isset($_GET["gender"])) {
            $pol = $_GET["gender"];
            if ($pol == "muski") $nas = "Poštovani";
            if ($pol == "zenski") $nas = "Poštovana";
                      
            if (!empty($_GET["mail"])) {
                $mejl = $_GET["mail"];
                if (!empty($_GET["user_password"])) {
                    $pass = $_GET["user_password"];
                    if (!empty($_GET["retype_password"] && $pass == $_GET["retype_password"])) {
                        $re = $_GET["retype_password"];
                        if (isset($_GET["course"])) {
                            $kurs = $_GET["course"];

                            echo "$nas $ime $prezime," . "<br>" . "Uspešno ste se registrovali na našem sajtu." . "<br>" . "Vaša lozinka je: $pass" . "<br>" . "Vaš username je: $mejl" . "<br>" . "Vaši odabrani kursevi su:" . implode(", ", $kurs);


                        } else {
                            echo "Greška, morate odabrati kurs!";
                        }
                        
                    } else {
                        echo "Greška, password nije isti kao onaj koji ste uneli u prethodno polje!";
                    }
                } else {
                    echo "Greška, morate uneti password!";
                }
            } else {
            
                $e_mejl = "Greška, morate uneti mejl!";
                echo $e_mejl;
            }
        } else {

            echo "Greška, morate izabrati pol!";
        }
    } else {
    
        $e_prezime = "Greška, morate uneti prezime!";
        echo $e_prezime;
    }
} else {

    $e_ime = "Greška, morate uneti ime!";
    echo $e_ime;
}

}




// foreach ($kurs as $value) {
//     echo $value . ',';
// }

?>
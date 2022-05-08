<?php


if (isset ($_POST['but'])) {

if (!empty ($_POST['sirina_zida'])) {
    $sz = $_POST['sirina_zida'];

    if (!empty ($_POST['visina_zida'])) {
        $vz = $_POST['visina_zida'];

        if (!empty ($_POST['sirina_plocice'])) {
            $sp = $_POST['sirina_plocice'];

            if (!empty ($_POST['visina_plocice'])) {
                $vp = $_POST['visina_plocice'];

                $pp = $sp * $vp;
                $pz = $sz * $vz;
                $broj_p = $pz / $pp;
                $kraj = ceil($broj_p);
                echo "Neophodan broj pločica je $kraj!";


            }else {
                echo "Morate uneti visinu pločice!";
            }
            

        }else {
            echo "Morate uneti širinu pločice!";
        }

    }else {
        echo "Morate uneti visinu zida!";
    }

}else {
    echo "Morate uneti širinu zida!";
}


}


?>
<?php

//1.zadatak

$hwArray = ['Pera', 'Milka', 'Pera' ,'Sonja', 'Danilo', 'Marica', 'Ivica', 'Sonja', 'Vanja', 'Mira'];

$a = 'Ivan';
if (!in_array($a, $hwArray)){
array_push($hwArray, $a);
} else {
    echo "$a već postoji u nizu";
}

$b = 'Ivana';
if (!in_array($b, $hwArray)){
array_splice($hwArray,3,0,'Ivana');
} else {
    echo "$a već postoji u nizu";
}

echo count($hwArray);
echo "<br>";

array_unshift($hwArray,'Milica');

$gdeJeDanilo = array_search('Danilo', $hwArray);
unset($hwArray[$gdeJeDanilo]);

$bezDuplikata = array_unique($hwArray, SORT_REGULAR);

print_r($hwArray);
echo "<br>";
print_r($bezDuplikata);



//2.zadatak


$data = array (
        array ('name' => "Pera",
                'last_name' => "Peric",
                'age' => 28,
                'gender' => "male",
                'avg_rating' => 7.5,
                'married' => false,
                'courses' => ['laravel', 'react', 'jQuery']
                ),
        array ('name' => "Marko",
                'last_name' => "Maric",
                'age' => 35,
                'gender' => "male",
                'avg_rating' => 7.8,
                'married' => true,
                'courses' => ['laravel', 'react']
            ),
        array ('name' => "Mila",
                'last_name' => "Milic",
                'age' => 33,
                'gender' => "female",
                'avg_rating' => 5.5,
                'married' => false,
                'courses' => ['react', 'jQuery']
        ),
        array ('name' => "Ivana",
                'last_name' => "Ivic",
                'age' => 26,
                'gender' => "female",
                'avg_rating' => 3.5,
                'married' => false,
                'courses' => ['laravel', 'jQuery']
    ),
    array ('name' => "Mitar",
                'last_name' => "Miric",
                'age' => 55,
                'gender' => "male",
                'avg_rating' => 8.5,
                'married' => true,
                'courses' => ['laravel', 'react', 'jQuery']
                )
            );

        
            foreach ($data as $podatak) {
                echo "<br>";

                   switch ($podatak['married']) {
                       case true: 
                            if ($podatak['gender'] == "male") {
                            $brak = "oženjen je";
                            } else {
                           $brak = "udata je";
                            }
                            break;

                       case false: 
                            if ($podatak['gender'] == "male") {
                           $brak = "nije oženjen";
                            } else {
                           $brak = "nije udata";
                             }
                            break;
                       default:
                            $brak = "ne znamo da li je u braku";
                   }
                    echo $podatak['name'] . " " . $podatak['last_name'] . " ima " . $podatak['age'] . " godina i " . $brak . "." . "Ima prosečnu ocenu " . $podatak['avg_rating'] . "," . "a kurseve koje trenutno sluša su: " . implode(", ", $podatak['courses'])  . ".";
                }
            

























?>
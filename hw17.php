<?php


function search_users($users, $searchContent = "") {
   
foreach ($users as $key => $value) {
    // print_r($value['name']);
    if (!str_contains($value['name'], $searchContent) && !str_contains($value['last_name'], $searchContent)) {
        unset ($users[$key]);
    }   
    }
    
    print_r($users);

}


$users = [
[
	'name' => "Pera",
	'last_name' => "Miric",
	'img' =>"moja slika PM"
],
[
	'name' => "Mitar",
	'last_name' => "Miric",
	'img' => "moja slika MM"
]
];

echo "Stari niz: ";
print_r($users);
echo "<br>";
echo "Novi niz: ";
search_users($users, "Pera");






















?>
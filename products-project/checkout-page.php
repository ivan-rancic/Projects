<?php

require_once __DIR__ . "/models/products-model.php";

require_once __DIR__ . "/models/validacija-model.php";


if(!empty($_GET['kupujemID'])) {
    $kupujemId = $_GET['kupujemID'];
}

$product = getOneProductById($kupujemId);


$firstName = "";
$lastName = "";
$email = "";
$address = "";
$city = "";
$zip = "";
$agree = "";
$phone = "";
$quantity = "";
$allValid = [];
$errors = [];


if (isset ($_POST['but'])) {

    

    $firstName = trim($_POST['firstName']);
   
    $lastName = trim($_POST['lastName']);
 
    $email = trim($_POST['email']);

    $address = trim($_POST['address']);
   
    $city = trim($_POST['city']);
    
    $zip = trim($_POST['zip']);
    
    $phone = trim($_POST['phone']);

    if (isset($_POST['agree']) && $_POST['agree']=='checked') {
        $agree = $_POST['agree'];
    }else{
        $errorAgree = "You have to agree.";
    }

    if (isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    }else{
        $errorQuantity = "Please enter quantity.";
    }
   
    


    $errors = errors ($firstName, $lastName, $email, $address, $city, $zip, $phone);
    $allValid = isAllValid ($firstName, $lastName, $email, $address, $city, $zip, $phone);
    

    

}




// var_dump($allValid);
// echo count($allValid);
// print_r($errors);




require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout-page.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
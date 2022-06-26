<?php
session_start();

// PAGE TITLE
$page = 'member';

               

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\User\User;
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

// USING MODELS



    // GET USERS
    $users = User::getAllUsers();

    //GET PRODUCTS
    $products = Product::getAllProducts(1);

    // GET LOGED IN USER

    $logedInUser = User::getOneUserByEmail($_SESSION["sess_user"]);


 



















// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-member.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
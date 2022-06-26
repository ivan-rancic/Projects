<?php
session_start();
// PAGE TITLE
$page = "all-products-page";

if (!empty($_GET['ppage'])) {
    $ppage = $_GET['ppage'];
} else {
    $ppage = 1;
}


$no_of_records_per_page = 6;
$offset = ($ppage-1) * $no_of_records_per_page;






// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;


$total_pages = ceil(count(Product::getAvailableProducts())/$no_of_records_per_page) ;

try {
    // GET PRODUCTS
    $products = Product::getSixRandomProductsP($offset, $no_of_records_per_page);

    // TERM AND SORT
    $term = "";
    $sort = "";
    if (!empty($_GET['term'])) {
        $term = $_GET['term'];
    }
    if (!empty($_GET['sort'])) {
        $sort = $_GET['sort'];
    }
    if ($term != "") {
        $products = Product::filteredProducts($term, $products);
    }
    if ($sort != "") {
        $products = Product::sortProductBy($sort, $products);
    }
    // SHOPPING CART (SESSION)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $shoppingCart = new ShoppingCart($_SESSION['cart']);
    if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
        $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']));
        $shoppingCart->updateSession();
    }
} catch (\Throwable $th) {
    header("Location: ./");
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-products.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

var_dump($total_pages);
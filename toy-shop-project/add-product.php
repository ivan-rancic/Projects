<?php
session_start();




// PAGE TITLE
$page = 'add';




// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-add-product.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
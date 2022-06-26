<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <link rel="stylesheet" href="./public/theme/css/style.css">
    <title>Shop</title>
</head>

<body>


<header class="mb-0 sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light opacity-90">
            <div class="container px-4 px-lg-2">

                <a class="navbar-brand" href="index.php"><img class="img-fluid max-width: 100% w-25" src="./public/theme/img/logo55.png" alt="logo2" ></a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                        <li class="nav-item"><a class="nav-link <?php if($page == 'index') {
                                echo htmlspecialchars('active');
                                } ?> " aria-current="page" href="./index.php">Home</a></li>

                        <li class="nav-item"><a class="nav-link <?php if($page == 'about') {
                                echo htmlspecialchars('active');
                                } ?> " aria-current="page" href="./about-us-page.php">About</a></li>

                        <li class="nav-item"><a class="nav-link <?php if($page == 'all-products-page') {
                                echo htmlspecialchars('active');
                                } ?> " aria-current="page" href="./all-products-page.php">Products</a></li>

                        <li class="nav-item"><a class="nav-link <?php if($page == 'contact') {
                                echo htmlspecialchars('active');
                                } ?> " aria-current="page" href="./contact-us.php">Contact</a></li>

                        <li><a  href="#myModal" class="nav-link text-primary" data-bs-toggle="modal" style="display: <?php if(isset($_SESSION["sess_user"])) {
                                echo htmlspecialchars('none') ;
                                } ?>">Login</a></li>

                        <li><a  href="./Models/logout.php" class="nav-link text-danger" data-bs-toggle="modal" style="display: <?php if(!isset($_SESSION["sess_user"])) {
                                echo htmlspecialchars('none') ;
                                } ?>">Logout</a></li>

                        <li><a  href="./member-profile.php" class="nav-link text-success" data-bs-toggle="modal" style="display: <?php if(!isset($_SESSION["sess_user"])) {
                                echo htmlspecialchars('none') ;
                                } ?>">Your Profile</a>
                                </li>


                      
                    </ul>




                    <form class="d-flex" action="./shopping-cart-page.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1">Cart</i>
                            
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                            <?php 
                            if(!empty($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                            </span>
                        </button>
                    </form>

                    
                </div>
            </div>
        </nav>
    </header>
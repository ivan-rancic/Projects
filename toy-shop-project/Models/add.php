<?php

session_start();

if (isset ($_POST['submit'])) {
 

  
    $title=$_POST['title'];  
    $description=$_POST['description'];  
    $price=$_POST['price']; 
    $stock=$_POST['stock'];
    $status=$_POST['status']; 
    $barcode=$_POST['barcode'];
    $category=$_POST['category'];
    $file = $_FILES['file'];


$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];




$fileDestination = 'upload/' . $fileName;
move_uploaded_file($fileTmpName, $fileDestination);

$destForBase = './Models/' . $fileDestination;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop-bt";
   
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO ec_products(title,description,price, stock, img, status, barcode, category) VALUES('$title','$description','$price', '$stock', '$destForBase', '$status', '$barcode', '$category')";  


  
  if (mysqli_query($conn, $sql)) {
    
    $_SESSION["message1"]="New record created successfully";
    $_SESSION["addProductName"]= $title;
    
    header("Location: ../add-product.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}
?>
<?php

session_start();
 
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])) {  
    $name=$_POST['name'];  
    $email=$_POST['email'];  
    $password1=$_POST['password']; 
    $password_confirmation=$_POST['password_confirmation'];

   
if ($_POST["password"] === $_POST["password_confirmation"]) {
   
  
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



    $con=mysqli_connect('localhost','root','') or die(mysqli_error($conn));  
    mysqli_select_db($conn, 'shop-bt') or die("cannot select DB");  
  
    $query=mysqli_query($conn, "SELECT * FROM login WHERE email='".$email."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(name,email,pass) VALUES('$name','$email','$password1')";  
  
    $result=mysqli_query($conn, $sql);  
        if($result){  
    echo "Account Successfully Created"; 
    $_SESSION['sess_user']=$email; 
    header("Location: ../member-profile.php");  

    } else {  
    
    echo '<div style="text-align: center;">';
    echo '<h3>' . "Failure!" . '</h3>';
    echo "<br>";
    echo '<h3>' . "You will be redirected!". '</h3>';
    echo "<br>";
    echo '<iframe src="../public/theme/img/va.gif" width="200" height="480" frameBorder="0"  allowFullScreen></iframe>';
    echo '</div>';
    header( "refresh:5;url=../index.php" ); 
    


    }  
  
    } else {  
    echo '<div style="text-align: center;">';
    echo '<h3>' . "That username already exists! Please try again with another." . '</h3>';
    echo "<br>";
    echo '<h3>' . "You will be redirected!". '</h3>';
    echo "<br>";
    echo '<iframe src="../public/theme/img/va.gif" width="200" height="480" frameBorder="0"  allowFullScreen></iframe>';
    echo '</div>';
    header( "refresh:5;url=../index.php" );  
    } 
    
    
}else{
    echo '<div style="text-align: center;">';
    echo '<h3>' . "Incorrect Password!" . '</h3>';
    echo "<br>";
    echo '<h3>' . "You will be redirected!". '</h3>';
    echo "<br>";
    echo '<iframe src="../public/theme/img/va.gif" width="200" height="480" frameBorder="0"  allowFullScreen></iframe>';
    echo '</div>';
    header( "refresh:5;url=../index.php" ); 
}
  
} else {  
    echo '<div style="text-align: center;">';
    echo '<h3>' . "All fields are required!" . '</h3>';
    echo "<br>";
    echo '<h3>' . "You will be redirected!". '</h3>';
    echo "<br>";
    echo '<iframe src="../public/theme/img/va.gif" width="200" height="480" frameBorder="0"  allowFullScreen></iframe>';
    echo '</div>';
    header( "refresh:5;url=../index.php" );  
     
}  



?>  
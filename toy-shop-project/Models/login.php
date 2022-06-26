<?php  

  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $pass=$_POST['password'];  
  
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
  
    $query = mysqli_query ($conn, "SELECT * FROM login WHERE email='".$email."' AND pass='".$pass."'");  
    $numrows=mysqli_num_rows ($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['pass'];  
    }  
  
    if($email == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$email;  
  
    /* Redirect browser */  
    header("Location: ../member-profile.php");  
    }  
    } else {  
    echo '<div style="text-align: center;">';
    echo '<h3>' . "Invalid username or password!" . '</h3>';
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
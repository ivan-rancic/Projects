<?php

session_start();

  if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['email']))
    $email = $_POST['email'];
  if (isset($_POST['message']))
    $message = $_POST['message'];
  if (isset($_POST['subject']))
    $subject = $_POST['subject'];
  if ($name === '') {
    $_SESSION['err'] = "Name cannot be empty.";
    header("Location: ../contact-us.php");
    die();
  }
  if ($email === '') {
    $_SESSION['err'] = "Email cannot be empty.";
    header("Location: ../contact-us.php");
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email format invalid.";
      die();
    }
  }
  if ($subject === '') {
    $_SESSION['err'] = "Subject cannot be empty.";
    header("Location: ../contact-us.php");
    die();
  }
  if ($message === '') {
    $_SESSION['err'] = "Message cannot be empty.";
    header("Location: ../contact-us.php");
    die();
  }
  
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
  
  $sql = "INSERT INTO contact (name, email, message, subject)
  VALUES ('$name', '$email', '$message', '$subject')";

$date = date('Y-m-d H:i:s');
  
  if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    $_SESSION["message"]="New record created successfully (Subject: $subject, Time: $date)";
    header("Location: ../contact-us.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>












































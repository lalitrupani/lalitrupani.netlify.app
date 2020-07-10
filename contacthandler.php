
<?php

  $name = $_POST['name'];
  $mailfrom = $_POST['email'];
  $message = $_POST['message'];
  $to= "geek@dr.com";
  $headers = "From: ".$mailfrom;
  
  mail($to, $message, $headers);
  header("Location: index.html"); 
?>

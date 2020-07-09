
<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
 $to= "geek@dr.com";
 mail($to);
 header("Location: index.html");


?>

<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_Subject= ' Form Submission from website';
$txt= "Mail from".$name.".\n\n".$message;
  $to= "geek@dr.com";
  $headers = "From:".$visitor_email\r\n;
 mail($to, $email_Subject, $txt, $headers);

 header("Location: index.php?mailsend"); 
?>


<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_from = 'geek@dr.com';
  $email_body= "User Name: $name.\n". 
                 "User Email: $visitor_email.\n".
                  "User Message: $message.\n";
  $email_Subject= ' Form Submission from website';

  $to= "geek@dr.com";
  $headers = "From:".$email_from\r\n;
 mail($to, $email_Subject, $email_body, $headers)

 header("Location: index.html?mailsend"); 


?>

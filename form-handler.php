<?php

$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

 $email_from='abc@website.com'; //this should be our domain name of the website which we use

 $email_subject ='New form submission';
 $email_body= "user name: $name.\n".
               "user Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n";

$to ='kannothparambathamalmanoj@gmail.com';

$headers ="From : $email_from \r\n";
$headers.="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
// redirecting the user to the same page after submission of the form

?>
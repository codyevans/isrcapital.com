<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "sima@isrcapital.com, debra@isrcapital.com, sarah@isrcapital.com, yuan@isrcapital.com, kayte@isrcapital.com";
$subject = "ISRCapital Contact Form Submission";
$mailheader = "From: $email \r\n";


// send email 
$success = mail($recipient, $subject, $formcontent, $mailheader);

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact-thanks/\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact-error/\">";
}




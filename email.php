<?php

//add the recipient's address here
$myemail = 'david@davidtranscend.com';

//grab named inputs from html
if (isset($_POST['name'])) {
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $subject = strip_tags($_POST['subject']);
  $message = strip_tags($_POST['message']);

  //generate email and send!
  $to = $myemail;
  $email_subject = "Contact Inquiry: $subject";
  $email_body = "You have received a new message. ".
  "Here are the details:\n Name: $name \n ".
  "Email: $email\n Message: \n $message";
  $headers = "From: $myemail\n";
  $headers .= "Reply-To: $email";
  mail($to,$email_subject,$email_body,$headers);
}

?>

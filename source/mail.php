<?php $fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $fname $lname \n Message: $message";
$recipient = "contact@marutech.com";
$subject = "Contact Us";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

<?php
$recipient = "tshiamomalebye3310@gmail.com"; // email address where the form data will be sent
$name = $_POST['name']; // retrieve the user's name from the form data
$email = $_POST['email']; // retrieve the user's email from the form data

$msg = "Name: $name\nEmail: $email"; // create the message to be sent in the email

// use the PHP mail function to send the email
mail($recipient, 'New Form Submission', $msg);

echo "Thank you for submitting the form!"; // output a thank you message to the user
?>
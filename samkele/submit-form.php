<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"]; 

    // Store the data in a text file
    $file = fopen("data.txt", "a"); // open the file in append mode
    fwrite($file, "<p>Name: $name<br>Email: $email<br>Message: $message</p>");
    fclose($file);
    
    // Send an email notification
    $to = "tshiamomalebye3310@gmail.com"; // change to your own email address
    $subject = "New form submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $body);
}
?>

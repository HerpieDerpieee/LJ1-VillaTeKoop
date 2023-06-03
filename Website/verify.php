<?php
// Retrieve the email from the AJAX request
$email = $_POST["email"];

// Generate a random verification code
$verificationCode = mt_rand(10000, 99999);

// Send the verification email
$subject = "Verificatiecode voor Villas4U";
$body = "Your verification code is: " . $verificationCode;
$headers = "From: your-email@example.com"; // Set your desired sender email address

if (mail($email, $subject, $body, $headers)) {
    echo "success:" . $verificationCode;
} else {
    echo "error";
}
?>
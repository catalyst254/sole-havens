<?php
// Start session
session_start();

// Dummy email address (replace with your logic)
$valid_email = "example@gmail.com";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email address from form
    $email = $_POST['email'];

    // Check if the email address is valid
    if ($email === $valid_email) {
        // Email address is valid
        // Generate a random password (you may use your own logic for generating a secure password)
        $new_password = generateRandomPassword();

        // Send the new password to the user's email address (you should implement email sending logic here)

        // For demonstration, let's display the new password
        echo "Your new password is: " . $new_password;
    } else {
        // Invalid email address
        $error_message = "Invalid email address.";
    }
}

// Function to generate a random password
function generateRandomPassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Your email address where the form will be sent
    $to = "salhioussama400@gmail.com";
    
    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message: $message\n";

    // Headers for the email
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
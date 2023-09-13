<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configure the recipient email address
    $to = "sehulaklilu@gmail.com";

    // Set the subject of the email
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for contacting us. Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Redirect to the contact page if accessed directly without form submission
    header("Location: index.html");
    exit;
}
?>
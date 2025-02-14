<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email (replace with your email address)
    $to = "snkinda05@example.com"; // Replace with your actual email address

    // Set the subject
    $subject = "New Message from Contact Form";

    // Create the email body
    $body = "You have received a new message from $name.\n\n".
            "Email: $email\n\n".
            "Message:\n$message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for your message, $name! I will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    // If the form is not submitted via POST, redirect to the contact page
    header("Location: contact.html");
    exit();
}
?>

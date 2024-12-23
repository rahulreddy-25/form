<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the input to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Create a response message
    echo "<h3>Thank you for registering!</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "Invalid request.";
}
?>

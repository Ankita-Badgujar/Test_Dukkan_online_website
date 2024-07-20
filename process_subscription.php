<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $package = htmlspecialchars($_POST['package']);

    // Validate and process the data here
    // For example, you could save it to a database or send an email

    // Simple response
    echo "Thank you for subscribing, $name. You have selected the $package package.";
} else {
    echo "Invalid request.";
}
?>

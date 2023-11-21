<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "elikay254@gmail.com";
    $subject = "New message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
include 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div class="row">
        <div class="contact-form reveal">
            <h3>Send Message</h3>
            <form method="post" action="">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <div class="input-box">
                    <input type="submit" class="send-btn" value="Send"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

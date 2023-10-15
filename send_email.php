<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['about'];
    $message = $_POST['subject'];

    $to = 'yijialiu523@gmail.com';  // Change this to your email address
    $headers = "From: $email\r\nReply-To: $email";
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error sending email.';
    }
}
?>

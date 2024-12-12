<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $to = '21051546@kiit.ac.in'; 
    
    $headers = "From: $name <$email>";
    
    $body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        die("Error sending email.");
    }
}
?>

<?php
if (isset($_POST['submit'])) {
    $to = "kmgrafmail@gmail.com";
    $subject = "New message from website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
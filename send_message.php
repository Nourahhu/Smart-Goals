<?php
if(isset($_POST['submit'])){
    // Admin email address
    $admin_email = "nwrhanm958@gmail.com";

    // Sender's name and email address
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Message content
    $message = $_POST['msg'];

    // Subject of the email
    $subject = "Message from Contact Form";

    // Construct the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Send email
    if(mail($admin_email, $subject, $message, $headers)){
        echo "<div class='alert alert-success'>Your message has been sent successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to send message. Please try again later.</div>";
    }
}
?>

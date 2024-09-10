<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form_name = $_POST['form_name'];
    $form_phone = $_POST['form_phone'];
    $form_email = $_POST['form_email'];
    $form_subject = $_POST['form_subject'];
    $form_message = $_POST['form_message'];

    $to = 'umainternational.travel@gmail.com'; // Change to the recipient email
    $subject = 'Query on Uma International Travel Services';
    $body = "Name: $form_name\nPhone: $form_phone\nEmail: $form_email\nSubject: $form_subject\nMessage: $form_message";
    $headers = "From: $form_email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

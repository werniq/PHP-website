<?php 
    $email = $_POST['email'];
    // print_r($email);
    $message = $_POST['message'];

    $error = '';
    if (trim($email) == '')
        $error = "Enter your email!";
    else if(trim($message) == '')
        $error = "Enter your message!";
    else if(strlen($message) < 10)
        $error = "You should say more about your problem";


    if ($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('admin@itproger.com', $subject, $message, $headers);
    header('Location: /index.php');
?>
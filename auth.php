<?php
    $login = filter_var(trim(
        $_POST['login']), 
        FILTER_SANITIZE_STRING);
    $password = filter_var(trim(
        $_POST['password']),
        FILTER_SANITIZE_STRING);

    $pass = md5($password."qsfkfa0173xz");

    $mysql = new mysqli('localhost', 'root', 'secret', 'php-website-db');

    $res = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' 
    AND `password` = '$pass'");
    $user = $res->fetch_assoc();
    if (count($user) == 0) {
        echo "User not found";
        exit();
    } 

    setcookie('user', $user['name'], time() + 60*60, "/");
    $mysql->close();

    header('Location: index.php');
?>
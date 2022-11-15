<?php 
    // print_r($_POST);
    // $password = $_POST['password'];
    // $login = $_POST['login'];
    // $name = $_POST['name'];
    // $_POST[name]
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Length of login is not accaptable";
        exit();
    } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Length of name is not accaptable";
        exit();
    } else if (mb_strlen($password) < 2 || mb_strlen($password) > 25) {
        echo "Length of password should be more than 2 and less then 25";
        exit();
    }
    $pass = md5($password."qsfkfa0173xz");


    $mysql = new mysqli('localhost', 'root', 'secret', 'php-website-db');
    // port=3306
    $mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES('$login', '$name', '$pass')");
    
    $mysql->close();

    header('Location: index.php');
?>
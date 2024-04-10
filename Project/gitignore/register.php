<?php
global $conn;
require_once ('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeat_password=$_POST['repeats'];
$email = $_POST['email'];

if(empty($login) || empty($pass) || empty($repeat_password) || empty ($email)){
    echo "Заполните все поля";
} else if ($pass != $repeat_password) {
    echo "пароли не совпадают";
} else {
    $sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass','$email')";
    if ($conn->query($sql)) {
        echo 'Успешная регистрация';
    } else {
        echo 'Ошибка: ' . $conn->error;
    }
}
<?php
session_start();
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pass = mysqli_real_escape_string($connect, $_POST['pass']);
 
    $sql = "INSERT INTO users (full_name, login, email, pass, role) VALUES ('$full_name', '$login', '$email', '$pass', 'user')";

    if (mysqli_query($connect, $sql)) {
        echo "Регистрация прошла успешно!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>

<?php
session_start();
require_once 'connect.php';
$login = mysqli_real_escape_string($connect, $_POST['login']);
$pass = mysqli_real_escape_string($connect, $_POST['pass']);

$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = ['id' => $user['id'], 'full_name' => $user['full_name'], 'login' => $user['login'], 'email' => $user['email']];
    if ($user['role'] === 'admin') {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['msg'] = 'Неверный логин или пароль';
    header('Location: success.php');
    exit();
}
?>

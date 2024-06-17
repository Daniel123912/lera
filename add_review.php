<?php
session_start();
require_once('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO reviews (name, email, message) VALUES ('$name', '$email', '$message')";


if ($connect->query($sql) === TRUE) {
    echo "Отзыв успешно добавлен";
} else {
    echo "Ошибка при добавлении отзыва: " . $connection->error;
}


$connect->close();
?>
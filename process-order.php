<?php
// Подключение к базе данных
require_once('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$seats = json_decode($_POST['seats']); 

$sql = "INSERT INTO orders (name, email, phone, seats) VALUES ('$name', '$email', '$phone', '" . implode(',', $seats) . "')";

if ($connect->query($sql) === TRUE) {
    echo "Заказ успешно оформлен!";
} else {
    echo "Ошибка: " . $connect->error;
}

// Закрытие соединения с базой данных
$connect->close();
?>

<?php
session_start();
require_once('connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM flights WHERE id = $id";

    if ($connect->query($sql) === TRUE) {
        echo "Билет успешно удален.";
    } else {
        echo "Ошибка при удалении билета: " . $connect->error;
    }
}


$connect->close();
?>

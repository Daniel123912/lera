<?php
// Подключение к базе данных
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение данных из POST-запроса
    $seats = json_decode($_POST['seats'], true);
    $user_id = $_POST['user_id'];
    $ticket_id = $_POST['ticket_id'];

    if (!empty($seats) && !empty($user_id) && !empty($ticket_id)) {
        $query = "INSERT INTO booked_seats (seat_number, user_id, ticket_id) VALUES ";
        $values = [];

        // Подготовка данных для вставки
        foreach ($seats as $seat) {
            $values[] = "('$seat', $user_id, $ticket_id)";
        }

        $query .= implode(", ", $values);

        // Выполнение запроса
        if ($connect->query($query) === TRUE) {
            echo "Места успешно забронированы.";
        } else {
            echo "Ошибка: " . $query . "<br>" . $connect->error;
        }
    } else {
        echo "Необходимо заполнить все поля.";
    }

    $connect->close();
} else {
    echo "Неверный метод запроса.";
}
?>

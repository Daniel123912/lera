<!DOCTYPE html>
<html>
<head>
    <title>Админ панель</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .ticket-card {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-bottom: 1.5rem;
            padding: 1.5rem;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .ticket-header {
            background-color: #f8f9fa;
            padding: 0.75rem 1.25rem;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 1rem;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .ticket-footer {
            text-align: right;
        }
        .btn {
            margin-top: 1rem;
        }
        .btn-delete {
            color: #dc3545;
            background-color: transparent;
            border: 1px solid #dc3545;
            border-radius: 4px;
            padding: 5px 15px;
            transition: all 0.3s ease;
        }

        .btn-delete:hover {
            background-color: #dc3545;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php require_once('nav_admin.php'); ?>
    <center>
<br>
<br>
<br>
<br>
<br>       
<br>
<br>
<br>  
<h1 class="my-4 text-center">Просмотр билетов</h1>
<div class="container mt-4">
    <div class="row">
        <?php
        session_start();
        require_once('connect.php');

        // SQL-запрос для выборки данных о рейсах
        $sql = "SELECT * FROM flights ORDER BY departure_date ASC";
        $result = $connect->query($sql);

        // Проверка выполнения запроса
        if ($result) {
            // Вывод данных о рейсах
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4 mb-4'>";
                echo "<div class='ticket-card'>";
                echo "<div class='ticket-header'>";
                echo "<h4>Рейс: " . htmlspecialchars($row["flight_number"]) . "</h4>";
                echo "</div>";
                echo "<div class='ticket-body'>";
                echo "<p><strong>Место отправления:</strong> " . htmlspecialchars($row["departure"]) . "</p>";
                echo "<p><strong>Место прибытия:</strong> " . htmlspecialchars($row["destination"]) . "</p>";
                echo "<p><strong>Поезд:</strong> " . htmlspecialchars($row["category"]) . "</p>";
                echo "<p><strong>Дата отправления:</strong> " . htmlspecialchars($row["departure_date"]) . "</p>";
                echo "<p><strong>Время отправления:</strong> " . htmlspecialchars($row["departure_time"]) . "</p>";
                echo "<p><strong>Цена:</strong> " . htmlspecialchars($row["price"]) . " руб.</p>";
                echo "<p><strong>Номер вагона:</strong> " . htmlspecialchars($row["num_cars"]) . "</p>";
                echo "</div>";
                echo "<div class='ticket-footer'>";
                echo "<a class='btn btn-delete' href='edit.php?id=" . htmlspecialchars($row["id"]) . "'>Редактировать</a>";
                echo "<a  href='edit.php'>&ensp;</a>";
                echo "<a class='btn btn-delete' href='delete.php?id=" . htmlspecialchars($row["id"]) . "'>Удалить</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Ошибка при выполнении запроса: " . $connect->error . "</p>";
        }

        // Закрытие соединения
        $connect->close();
        ?>
    </div>
</div>

    </center>
</body>
</html>

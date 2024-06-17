<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleS.css">
    <link rel="stylesheet" href="css/ticked1.css">
    <title>Просмотр билетов</title>
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
    </style>
</head>
<body>
    <?php
    session_start();
    require_once('connect.php'); 
    require_once('nav.php');
    ?> 
    <br><br><br><br><br>
    <h1 class="my-4 text-center">Просмотр билетов</h1>
    <div class="container mt-4">
        
        <div class="row">
            <?php
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
                    echo "</div>";
                    echo "<div class='ticket-footer'>";
                    echo "<a class='btn btn-success' href='form-bulet.php?id=" . htmlspecialchars($row["id"]) . "'>Оформить заказ</a>";
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
    <?php require_once("foter.php");?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

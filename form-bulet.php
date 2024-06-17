<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор мест</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .train {
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .train-car {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .train-car h3 {
            background-color: #2c3e50;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin: 0;
            border-radius: 5px 5px 0 0;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .seat {
            width: 50px;
            height: 50px;
            background-color: #b0c4de;
            border: 1px solid #999;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .seat:hover {
            background-color: #87a0c4;
        }
        .aisle {
            background-color: #fff;
            color: #333;
            border: none;
        }
        .selected-seat {
            background-color: #007bff !important;
            color: #fff;
        }
        .disabled-seat {
            background-color: #ddd !important;
            color: #aaa !important;
            cursor: not-allowed;
        }
        .btn-order {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Здесь должен быть код для подключения к базе данных и запроса занятых мест
    // Например:
    // require_once('connect.php');
    // $sql = "SELECT seat_number FROM booked_seats";
    // $result = $connect->query($sql);
    // $booked_seats = [];
    // if ($result) {
    //     while ($row = $result->fetch_assoc()) {
    //         $booked_seats[] = $row['seat_number'];
    //     }
    // }
    // $connect->close();
    
    // Временные данные для примера
    $booked_seats = ['1-2', '2-5', '3-10']; // Занятые места

    // Функция для генерации мест
    function generateSeats($car_number, $total_rows, $seats_per_row, $booked_seats) {
        $seat_number = 1;
        for ($row = 1; $row <= $total_rows; $row++) {
            echo "<div class='row'>";
            for ($seat = 1; $seat <= $seats_per_row; $seat++) {
                $seat_id = "$car_number-$seat_number";
                $seat_class = in_array($seat_id, $booked_seats) ? 'seat disabled-seat' : 'seat';
                echo "<div class='$seat_class' onclick='toggleSeat(this)' data-seat='$seat_id'>$seat_number</div>";
                $seat_number++;
            }
            echo "</div>";
        }
    }
    ?>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Выбор мест</h1>
        <div class="train">
            <?php
            // Генерация вагонов
            $total_cars = 3; // Общее количество вагонов
            $total_rows = 4; // Количество рядов в вагоне
            $seats_per_row = 6; // Количество мест в ряду

            for ($car = 1; $car <= $total_cars; $car++) {
                echo "<div class='train-car'>";
                echo "<h3>Вагон $car</h3>";
                generateSeats($car, $total_rows, $seats_per_row, $booked_seats);
                echo "</div>";
            }
            ?>
        </div>
        <button class="btn btn-primary btn-order" onclick="submitOrder()">Оформить заказ</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function toggleSeat(seat) {
            if (!seat.classList.contains('disabled-seat')) {
                seat.classList.toggle('selected-seat');
            }
        }

        function submitOrder() {
            let selectedSeats = document.querySelectorAll('.selected-seat');
            let seatsArray = [];
            selectedSeats.forEach(function(seat) {
                seatsArray.push(seat.getAttribute('data-seat'));
            });
            // Пример перехода на страницу оформления заказа с передачей выбранных мест в параметрах URL
            // window.location.href = 'order-form.php?seats=' + JSON.stringify(seatsArray);
            console.log(seatsArray); // Вывод выбранных мест в консоль (для тестирования)
        }
    </script>
</body>
</html>

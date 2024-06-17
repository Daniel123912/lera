<link rel="stylesheet" href="styleS.css">
<!DOCTYPE html>
<html>
<head>
  <title>Просмотр билетов</title>
</head>
<body>
  <h1>Просмотр билетов</h1>

  <?php
session_start();
require_once('connect.php');
    
    $sql = "SELECT * FROM flights";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
       
        while($row = $result->fetch_assoc()) {
            echo "<p>Номер рейса: " . $row["flight_number"] . "</p>";
            echo "<p>Место отправления: " . $row["departure"] . "</p>";
            echo "<p>Место прибытия: " . $row["destination"] . "</p>";
            echo "<p>Поезд: " . $row["category"] . "</p>";
            echo "<p>Дата отправления: " . $row["departure_date"] . "</p>";
            echo "<p>Время отправления: " . $row["departure_time"] . "</p>";
            echo "<button class=btr><a  href=\"registration.php?id=" . $row["id"] . "\">Купить</a></button>";
            echo "<hr>";

        }
    } else {
        echo "Нет доступных билетов.";
    }

    
    $connect->close();
  ?>

</body>
</html>

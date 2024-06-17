<?php

session_start();
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $flightNumber = $_POST['flight_number'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $category = $_POST['category'];
    $departureDate = $_POST['departure_date'];
    $departureTime = $_POST['departure_time'];
    $price = $_POST['price'];
    $numCars = $_POST['num_cars']; 
    
    $checkSql = "SELECT * FROM flights WHERE flight_number = '$flightNumber'";
    $result = $connect->query($checkSql);
    
    if ($result->num_rows > 0) {
        $updateSql = "UPDATE flights 
                      SET departure = '$departure', 
                          destination = '$destination', 
                          category = '$category', 
                          departure_date = '$departureDate', 
                          departure_time = '$departureTime', 
                          price = '$price', 
                          num_cars = '$numCars' 
                      WHERE flight_number = '$flightNumber'";
        
        if ($connect->query($updateSql) === TRUE) {
            echo "Рейс успешно обновлен.";
        } else {
            echo "Ошибка при обновлении: " . $connect->error;
        }
    } else {
        $insertSql = "INSERT INTO flights (flight_number, departure, destination, category, departure_date, departure_time, price, num_cars)
                      VALUES ('$flightNumber', '$departure', '$destination', '$category', '$departureDate', '$departureTime', '$price', '$numCars')";
        
        if ($connect->query($insertSql) === TRUE) {
            echo "Рейс успешно добавлен.";
        } else {
            echo "Ошибка при добавлении: " . $connect->error;
        }
    }
}

$connect->close();

?>

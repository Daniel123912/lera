<?php
session_start();
require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flightId = $_POST['id'];
    $flightNumber = $_POST['flight_number'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $category = $_POST['category'];
    $departureDate = $_POST['departure_date'];
    $departureTime = $_POST['departure_time'];
    $price = $_POST['price'];
    $numCars = $_POST['num_cars'];

    // Update query
    $sql = "UPDATE flights 
            SET flight_number = '$flightNumber', 
                departure = '$departure', 
                destination = '$destination', 
                category = '$category', 
                departure_date = '$departureDate', 
                departure_time = '$departureTime', 
                price = '$price', 
                num_cars = '$numCars'
            WHERE id = $flightId";
    
    if ($connect->query($sql) === TRUE) {
        echo "Изменения успешно сохранены.";
    } else {
        echo "Ошибка при сохранении изменений: " . $connect->error;
    }
}

$connect->close();
?>

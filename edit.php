<?php
session_start();
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Flight</title>
   <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
                    $flightId = $_GET['id'];
                    
                    // Retrieve flight details based on flightId
                    $sql = "SELECT * FROM flights WHERE id = $flightId";
                    $result = $connect->query($sql);
                    
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        // Display edit form with pre-filled values
                ?>
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="mb-3">
                                <label for="flight_number" class="form-label">Номер рейса:</label>
                                <input type="text" id="flight_number" name="flight_number" class="form-control" value="<?php echo $row['flight_number']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="departure" class="form-label">Место отправления:</label>
                                <input type="text" id="departure" name="departure" class="form-control" value="<?php echo $row['departure']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination" class="form-label">Место прибытия:</label>
                                <input type="text" id="destination" name="destination" class="form-control" value="<?php echo $row['destination']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Поезд:</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="Плацкарт" <?php if ($row['category'] === 'Плацкарт') echo 'selected'; ?>>Плацкарт</option>
                                    <option value="Купе" <?php if ($row['category'] === 'Купе') echo 'selected'; ?>>Купе</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="departure_date" class="form-label">Дата отправления:</label>
                                <input type="date" id="departure_date" name="departure_date" class="form-control" value="<?php echo $row['departure_date']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="departure_time" class="form-label">Время отправления:</label>
                                <input type="time" id="departure_time" name="departure_time" class="form-control" value="<?php echo $row['departure_time']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Цена:</label>
                                <input type="number" id="price" name="price" class="form-control" value="<?php echo $row['price']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="num_cars" class="form-label">Количество вагонов:</label>
                                <input type="number" id="num_cars" name="num_cars" class="form-control" value="<?php echo $row['num_cars']; ?>" required min="1" max="24">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </form>
                <?php
                    } else {
                        echo '<p class="alert alert-danger text-center">Flight not found.</p>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
                <style>
                    .btn-primary{
                        background-color: #2c3e50;
                    }
                </style>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js" integrity="sha384-Jzsgi6rYzkI2sF5jGmxrWiK8xI05Sw03U2N1Ts/gtp4ds58lkc7+5HQVl3gPFsJX" crossorigin="anonymous"></script>
</body>
</html>

<?php
$connect->close();
?>

<<!DOCTYPE html>
<html>
<head>
    <title>Добавление рейса</title>
    <!-- <link rel="stylesheet" href="styleS.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.css">
</head>
<body>
<?php require_once('nav_admin.php'); ?>
<style>
        /* Дополнительные стили для центрирования формы */
        .form-container {
        width: 900px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .row{
            width: 100%;
        }
        .btn-primary{
            background-color: #2c3e50;
        }
    </style>
    <br><br><br><br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="mb-4 text-center">Добавление рейса</h1>
                    <form action="add_flight.php" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="flight_number" class="form-label">Номер рейса:</label>
                            <input type="text" id="flight_number" name="flight_number" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите номер рейса.</div>
                        </div>
                        <div class="mb-3">
                            <label for="departure" class="form-label">Место отправления:</label>
                            <input type="text" id="departure" name="departure" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите место отправления.</div>
                        </div>
                        <div class="mb-3">
                            <label for="destination" class="form-label">Место прибытия:</label>
                            <input type="text" id="destination" name="destination" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите место прибытия.</div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Поезд:</label>
                            <select name="category" id="category" class="form-select" required>
                                <option value="">Выберите тип поезда</option>
                                <option value="Плацкарт">Плацкарт</option>
                                <option value="Купе">Купе</option>
                            </select>
                            <div class="invalid-feedback">Пожалуйста, выберите тип поезда.</div>
                        </div>
                        <div class="mb-3">
                            <label for="departure_date" class="form-label">Дата отправления:</label>
                            <input type="date" id="departure_date" name="departure_date" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите дату отправления.</div>
                        </div>
                        <div class="mb-3">
                            <label for="departure_time" class="form-label">Время отправления:</label>
                            <input type="time" id="departure_time" name="departure_time" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите время отправления.</div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цена:</label>
                            <input type="number" id="price" name="price" class="form-control" required>
                            <div class="invalid-feedback">Пожалуйста, введите цену.</div>
                        </div>
                        <div class="mb-3">
                            <label for="num_cars" class="form-label">Номер вагона:</label>
                            <input type="number" id="num_cars" name="num_cars" class="form-control" required min="1" max="24">
                            <div class="invalid-feedback">Пожалуйста, введите номер вагона от 1 до 24.</div>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Добавить рейс</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


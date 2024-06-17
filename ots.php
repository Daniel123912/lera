<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleS.css">
    <!-- <link rel="stylesheet" href="sS.css"> -->
<style>
        .review {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 5px 4px 6px rgb(93 111 124 / 68%);
        }

        .review .name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .review .email {
            color: #6c757d;
            font-size: 14px;
        }

        .review .message {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <?php require_once('nav_admin.php'); ?>
    <br>
<br>
<br>
<br>
<br>  
<br>
<br>  
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                session_start();
                require_once('connect.php');

                $sql = "SELECT name, email, message FROM reviews";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['name'];
                        $email = $row['email']; 
                        $message = $row['message'];

                        echo '<div class="review">';
                        echo '<div class="name">' . $name . '</div>';
                        echo '<div class="email">' . $email . '</div>';
                        echo '<div class="message">' . $message . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">Отзывы не найдены.</p>';
                }

                $connect->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
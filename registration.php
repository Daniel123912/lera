<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Регистрация</title>
   
</head>
<body>
<div class="container">
    <form name="registrationForm" action="register.php" method="post" class="form" onsubmit="return validateForm()">
        <h1>Регистрация</h1>
        <label for="full_name">ФИО:</label>
        <input type="text" name="full_name" class="verify" required/><br />
        <label for="login">Логин:</label>
        <input class="verify" type="text" name="login" required/><br />
        <label for="email">Электронная почта:</label>
        <input type="email" name="email" required/><br />
        <label for="phone">Номер телефона:</label>
        <input type="tel" name="phone" required/><br />
        <label for="pass">Пароль:</label>
        <input type="password" name="pass" class="verify" required/><br />
        <label for="passrep">Повторите пароль:</label>
        <input type="password" name="passrep" class="verify" required/><br />
        <input type="checkbox" id="agree" required/>
        Согласие на обработку персональных данных <br /><br />
        <input type="submit" name="button" value="Зарегистрироваться" id="button" /><br />
    </form>
    <a href="autorization.php">У меня есть аккаунт</a>
</div> 
<!-- проверка полей на уникальность -->
<script>
        function validateForm() {
            var fullName = document.forms["registrationForm"]["full_name"].value;
            var login = document.forms["registrationForm"]["login"].value;
            var email = document.forms["registrationForm"]["email"].value;
            var phone = document.forms["registrationForm"]["phone"].value;
            var pass = document.forms["registrationForm"]["pass"].value;
            var passrep = document.forms["registrationForm"]["passrep"].value;

            if (fullName == "" || login == "" || email == "" || phone == "" || pass == "" || passrep == "") {
                alert("Пожалуйста, заполните все поля");
                return false;
            }

            if (pass !== passrep) {
                alert("Пароли не совпадают");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

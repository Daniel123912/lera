<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_reg.css" />
    <title>Авторизация</title>
  </head>
  <body>
    <div class="container">
      <h1>Вход</h1>
      <form action="autoriz.php" method="post" class="form">
        <div class="autoruzation">
          <label for="passrep">Введите логин:</label>
          <input type="text" name="login" pattern="[A-Za-z0-9\-]+$" class="verify" required
          /><br />
          <label for="passrep">Введите пароль:</label>
          <input type="password" name="pass" class="verify" pattern="[A-Za-z0-9\-]+$" required
          /><br /> <br />
        </div>
        <input type="submit" name="button" value="Войти" id="button" /><br />
        <p>Нет аккаунта? <a href="registration.php">Зарегистрируйтесь</a></p>
    </form>
    </div>
  </body>
</html>

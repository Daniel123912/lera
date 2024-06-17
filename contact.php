<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>
  <link rel="stylesheet" href="styleS.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php session_start();
  require_once('nav.php'); ?>
  <br><br><br><br><br><br>  
    <!-- О нас -->
    <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center mb-5">О нас</h2>
          <p>Мы - команда профессионалов, предлагающая удобный сервис по продаже билетов на железнодорожном вокзале. Наше веб-приложение позволяет вам легко и быстро выбрать, забронировать и оплатить билеты, не выходя из дома.</p>
          <p>Мы стремимся к высокому уровню сервиса и удобству для наших клиентов. Наша цель - сделать поездки на поезде максимально комфортными и доступными для каждого.</p>
          <p>Если у вас есть вопросы или предложения, не стесняйтесь связаться с нами через нашу контактную форму или по телефону, указанному на сайте.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Контакты -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Свяжитесь с нами</h3>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" id="email" placeholder="Ваш email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Ваше сообщение"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
      </div>
      
      <div class="col-md-6"><br><br><br><br><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae69b000e3b2782ec9970f4aabdfc3e3f9ccec7288241ca52213231cda915f17b&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
</div>
<br><br>
      
    </div>
  </div> 
  <style>
    .row{
      width: 6000px;
    }
    .col-md-6 {
    flex: 0 0 auto;
    width: 100%;
}
    .about-section {
      padding: 60px 0;
      background-color: #f8f9fa;
    }
    .about-section h2 {
      font-weight: 700;
    }
    .about-section p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .contact-section {
      padding: 60px 0;
    }
    .contact-section h1 {
      font-weight: 700;
      margin-bottom: 40px;
    }
    .contact-section h3 {
      font-weight: 600;
    }
    .contact-section form .form-control {
      border-radius: 0;
      box-shadow: none;
      border-color: #ced4da;
    }
    .contact-section form .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 0;
    }
    .contact-section form .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
    #map {
      height: 300px;
      width: 100%;
      border: 1px solid #ced4da;
    }
  </style> 
  
        
        
  <?php require_once("foter.php");?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>

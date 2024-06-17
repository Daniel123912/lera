<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styleS.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <title>Наша компания</title>
</head>
<body>
<?php session_start();
require_once('nav.php'); ?>

    <br><br><br><br>
    <div class="ggg">
    <h1>
    "Свобода в движении: ваш путь, наши билеты!"
    </h1>
    </div>

    <center>
    <div class="devz">
    <h2>10 миллионов путешественников ежегодно бронируют у нас билеты на поезда</h2>
    </div>
    <br><br>
    </center>
  
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
    </section>



    <script>
   
$('.logo').on('click', function(e) {
  e.preventDefault();
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
  $('html, body').animate({
    scrollTop: 0
  }, 750, 'easeInOutQuad')
});

$('a[href^="#"]').on('click', function(event) {

  var $target = $(this.getAttribute('href'));

  if($target.length) {
    event.preventDefault();
    $('html, body').stop().animate({
      scrollTop: $target.offset().top
    }, 750, 'easeInOutQuad');
  }
});


$('.nav-toggle').on('click', function() {
  $(this).toggleClass('open');
  $('.menu-left').toggleClass('collapse');
});

$('.menu-left a').on('click', function() {
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
});

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    if (st > lastScrollTop && st > navbarHeight){
        
        $('header').removeClass('show-nav').addClass('hide-nav');
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    } else {
        
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('hide-nav').addClass('show-nav');
        }
    }
    lastScrollTop = st;
}
      </script>
<style>
.devz
{
width:100%;
height:100%;  
background-color: rgba(251, 253, 255, 0.8);

}
.ggg
{
width:100%;
height:100%;  
background-color: rgba(201, 221, 241, 0.8);
}
</style>
</body>
</html>
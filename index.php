<!DOCTYPE html>
<html>
<head>
  <title>Главная</title>
  <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/ticked1.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php session_start();
  require_once('nav.php'); ?>
<section>
  <div class="fon">

    <img src="images/1953102.png" alt="" class="fon_img">
    <div class="fon_text">
        <p class="h1">Билеты на поезд</p>
    </div>
    <br>
    <br>
    <br>
    <div class="search-form">
      <form method="get" action="#" class="train-search-form">
        <div class="form-container">
          <div class="station-container">
            <div>
              <div>
                <span class="label-container">
                  <label class="input-label">
                    <input type="text" class="input-field" value="" placeholder="Откуда" autocomplete="off">
                    <div class="input-decoration"></div>
                  </label>
                </span>
              </div>
              <div class="hints">
              </div>
            </div>
          </div>
          <div >
            <div class="swap-icon" data-ti="swap_stations"></div>
          </div>
          <div class="station-container">
            <div>
              <div>
                <span class="label-container">
                  <label class="input-label">
                    <input type="text" class="input-field" value="" placeholder="Куда" autocomplete="off">
                    <div class="input-decoration"></div>
                  </label>
                </span>
              </div>
              <div class="hints">
              </div>
            </div>
          </div>
          <div class="date-container" data-ti="departure_date">
            <div>
              <div class="date-picker">
                <label class="input-label">
                  <input type="text" class="input-field" value="" placeholder="Дата" autocomplete="off" readonly>
                  <div class="input-decoration"></div>
                </label>
                <div class="clear-icon" data-ti="clear"></div>
              </div>
              <div class="date-hints">
              <p>Указать дату обратно</p>
              </div>
            </div>
          </div>
          <div class="submit-container">
            <button type="button" class="submit-button" data-ti="submit_button">
              <span>Найти билеты на поезд</span>
            </button>
            <div class="help-tooltip-container">
              <div class="tooltip-icon"></div>
              <div class="tooltip-text">
                <div class="help-tooltip">
                  <span>Нажмите кнопку поиска</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="secure-payment">
        <span>Безопасная оплата</span>
      </div>
    </div>
  </div>
</section>
<style>
  /* .fon_text {
  text-align: center; 
  margin-top: -20%; 
}

.fon_text .h1 {
  color: #fff; 
  text-transform: uppercase;
  } */
  body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .fon {
      position: relative;
      text-align: center;
      color: white;
      height: 699px;
    }

    .fon_img {
      width: 100%;
      height: 700px;
      display: block;
      background-image: url('./images/1953102.png');
      background-repeat: no-repeat;
    }

    .fon_text {
      display: flex;
      margin-top: -408px;
      position: absolute;
      margin-left: 740px;
    }

    .h1 {
      color: white;
      font-size: 80px !important;
    }

    .search-form {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: #2b3e50;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 90%;
      max-width: 1141px;
    }

    .train-search-form .form-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .station-container,
    .date-container,
    .return-date-container,
    .submit-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .input-label {
      display: flex;
      align-items: center;
      position: relative;
      width: 250px;
    }

    .input-field {
      width: 100%;
      height: 52px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .input-decoration {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .hints {
      display: flex;
      gap: 10px;
      margin-top: 5px;
    }

    .hint {
      background: #4a90e2;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      color: white;
    }

    .hint-inner {
      color: #fff;
    }

    .swap-stations .swap-icon {
      width: 40px;
      height: 40px;
      background: url('swap-icon.png') no-repeat center center;
      background-size: contain;
      cursor: pointer;
      margin: 0 20px;
    }

    .date-picker {
      display: flex;
      align-items: center;
    }

    .arrow {
      width: 20px;
      height: 20px;
      background: url('arrow-icon.png') no-repeat center center;
      background-size: contain;
      cursor: pointer;
    }

    .left-arrow {
      transform: rotate(180deg);
    }

    .clear-icon {
      width: 20px;
      height: 20px;
      background: url('clear-icon.png') no-repeat center center;
      background-size: contain;
      cursor: pointer;
    }

    .date-hints {
      display: flex;
      gap: 10px;
      margin-top: 0px;
    }

    .return-date-container .return-date-text {
      background: #4a90e2;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      color: white;
    }

    .submit-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    .submit-button {
      background: linear-gradient(to right, #667eea, #764ba2);
      color: #fff;
      padding: 17px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .help-tooltip-container {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .tooltip-icon {
      width: 20px;
      height: 20px;
      background: url('help-icon.png') no-repeat center center;
      background-size: contain;
    }

    .tooltip-text {
      display: none;
      background: #f0f0f0;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .help-tooltip-container:hover .tooltip-text {
      display: block;
    }

    .secure-payment {
      text-align: center;
      margin-top: 10px;
      color: white;
    }

    .secure-payment span {
      font-size: 14px;
    }

</style>

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
<?php require_once("foter.php");?>
</body>
</html>


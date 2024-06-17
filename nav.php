<link rel="stylesheet" href="styleS.css">
<header>
    <div class="container">
        <nav id="navigation">
            <img class="logo" src="images/logo-gnarAQXLx-transformed3.png" alt="Logo">
            <a aria-label="mobile menu" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="menu-left">
               <ul class="menu-left">
                <li><a href="index.php">Главная</a></li>
                <!--<li><a href="about_us.php">О нас</a></li> -->
                <li><a href="ticked1.php">Просмотр билетов</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li>
                        <a class="reg"><?php echo $_SESSION['user']['login']; ?></a>
                    </li>
                    <li><a href="exet.php">Выход</a></li>
                <?php else : ?>
                    <li><a href="autorization.php">Вход</a></li>
                    <li><a href="registration.php">Регистрация</a></li>
                <?php endif; ?>
            </ul> 
            </div>
            
        </nav>
    </div>
</header>
<script>
    document.querySelector('.nav-toggle').addEventListener('click', function() {
        document.querySelector('.menu-left').classList.toggle('active');
    });
</script>




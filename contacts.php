<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="img/favicon.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Сайт обо мне</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>

    <body class="contacts">
        <header id="header" class="header">
            <div class="container">
                <nav>
                    <ul class="menu">
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="busyness.html">Занятость</a></li>
                        <li><a href="mediahobbies.html">Медиа-увлечения</a></li>
                        <li class="active"><a href="contacts.php">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section>
            <div class="container">
                 <div class="animated corner-bot-form"></div>
                 <div class="animated corner-top-form"></div>
                <form class="form" action="send.php" method="POST">
                    <p>
                        Оставьте свои контакты и я свяжусь с Вами
                    </p>
                    <input type="text" name="name" placeholder="Имя" required />
                    <input type="email" name="email" placeholder="E-mail" required />
                    <input type="tel" name="phone" placeholder="Номер телефона" />
                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                    <button class="btn" type="submit">Отправить</button>
                </form>
            </div>
        </section>

        <section class="preloader">
        <div class="preloader__wrapper">
        <div class="preloader__circle">
          <div class="preloader__circle-line preloader__circle-line--1"></div>
          <div class="preloader__circle-line preloader__circle-line--2"></div>
          <div class="preloader__circle-line preloader__circle-line--3"></div>
          <div class="preloader__circle-line preloader__circle-line--4"></div>
          <div class="preloader__circle-line preloader__circle-line--5"></div>
          <div class="preloader__circle-line preloader__circle-line--6"></div>
          <div class="preloader__circle-line preloader__circle-line--7"></div>
          <div class="preloader__circle-line preloader__circle-line--8"></div>
          <div class="preloader__circle-line preloader__circle-line--9"></div>
        </div>
      </div>
    </section>

     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/main.js"></script>
    </body>
</html>

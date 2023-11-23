<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__title">Магазин кроссовок</div>
        <nav class="header__nav nav">
            <ul class="nav__body">
                <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                <li class="nav__item"><a class="nav__link" href="shop.php">Магазин</a></li>
                <li class="nav__item"><a class="nav__link" href="">Авторизация</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            <form action="https://httpbin.org/post" method="post">
                <label for="login">Логин</label>
                <input type="text" id="login" name="login">
                <br>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="user_password">
                <br>
                <label>Запомнить меня</label>
                <input type="checkbox" id="cb1" value="interest_engineering" name="user_interest">
                <label class="light" for="cb1"></label><br>
                <button type="submit">Подтвердить</button>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__info">
            <p class="info__mail">Почта: snickers@yandex.ru</p>
            <p class="info__phone">Телефон: +79773387701</p>
        </div>
    </footer>
</body>
</html>
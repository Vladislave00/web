<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <php include href = "connecttoDB.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__title">Магазин кроссовок</div>
            <nav class="header__nav nav">
                <ul class="nav__body">
                    <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                    <li class="nav__item"><a class="nav__link" href="">Магазин</a></li>
                    <li class="nav__item"><a class="nav__link" href="signup.php">Авторизация</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <h1>Каталог кроссовок</h1><br>
            <table class = "tab">
            <tr><th>Название модели</th><th>Цена</th><th>Краткое описание</th><th>Фото</th></tr>
            <?php
            try {
                define('DB_HOST', 'std-mysql.ist.mospolytech.ru:3306/std_2294_rk'); //Адрес
                define('DB_USER', 'std_2294_rk'); //Имя пользователя
                define('DB_PASSWORD', 'vladikkk848'); //Пароль
                define('DB_NAME', 'std_2294_rk'); //Имя БД
                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
                mysqli_select_db($link, DB_NAME);
            } catch(Exception $e) {
                die('Ошибка');
            }
            $sql = 'SELECT * FROM sneakers';
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
            echo "<tr><th>{$row['name']}</th>" . "<th>{$row['price']}$</th><th>" . "{$row['description']}</th>" . '<th><img src = "' . $row['img'] . '" ></th></tr>';  
                  }
            ?>
            </table>
        </main>
        <footer class="footer">
            <div class="footer__info">
                <p class="info__mail">Почта: snickers@yandex.ru</p>
                <p class="info__phone">Телефон: +79773387701</p>
            </div>
        </footer>
    </div>
</body>
</html>
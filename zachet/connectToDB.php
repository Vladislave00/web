<?php
$mysqli;
try{  
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru:3306/std_2294_web'); //Адрес
    define('DB_USER', 'std_2294_web'); //Имя пользователя
    define('DB_PASSWORD', 'vladikkk848'); //Пароль
    define('DB_NAME', 'std_2294_web'); //Имя БД

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // echo '<p>Соединение установлено... ' . $mysqli->host_info . "</p>";
}
catch(Exception $e){
    die('Ошибка подключения к базе данных');
}


// if ($link == false) {
//     print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
// } else {
//     print("Соединение установлено успешно ");
//     echo $mysqli->host_info . "\n";
// };
?>
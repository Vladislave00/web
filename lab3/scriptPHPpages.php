<?php
$pageTitle2 = 'Афонин 221-361 3 лаб стр 2';
$pageTitle1 = 'Афонин 221-361 3 лаб стр 1';
$pageTitle3 = 'Афонин 221-361 3 лаб стр 3';
// Устанавливаем часовой пояс (например, для Москвы)
date_default_timezone_set('Europe/Moscow');
$seconds = date('s');

$current_page1 = false;
$current_page2 = false;
$current_page3 = false;

// $link = '';    
// $current_page = false;

// Определяем имя файла в зависимости от четности или нечетности секунды
if ($seconds % 2 == 0) {
    $nameImage1 = 'pic1.jpg'; // Файл для четной секунды
    $nameImage2 = 'pic2.jpg'; // Файл для четной секунды
} else {
    $nameImage2 = 'pic1.jpg';  // Файл для нечетной секунды
    $nameImage1 = 'pic2.jpg';  // Файл для нечетной секунды

}
// Форматируем текущую дату и время
$currentDateTime = date('d.m.Y в H:i:s');
$numElements = rand(1, 10);
?>
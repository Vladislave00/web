<?php
include('header.html');
$name = '';
$email = '';
$agreement = 'no';
$radioButton = '';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $agreement = $_GET['agreement'];
    $radioButton = $_GET['selector'];

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class = "wrapper">
        <main class="main">
            <div class="container">
                <form action="home.php" method="post" enctype="multipart/form-data">

                    <label for="name">ФИО</label>
                    <input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Иванов Иван Иванович"><br>
                    
                    <label for="mail">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="example@gmail.com"><br>
                    
                    <label>Откуда о нас узнали?</label><br>
                    <input <?php if($radioButton == "friend") echo "checked" ?> type="radio" id="selector" name="selector" value="friend">
                    <label for="selector" class="label-selector">От друга</label><br>

                    <input <?php if($radioButton == "ad") echo "checked" ?> type="radio" id="selector" name="selector" value="ad">
                    <label for="selector" class="label-selector">Наткнулись на рекламу</label><br>

                    <label for="type">Укажите тип обращения</label><br>
                    <select id="type" name="category">
                        <option value="grievance">Жалоба</option>
                        <option value="proposal">Предложение</option>
                    </select><br>

                    <label for="message">Ваше сообщение</label><br>
                    <textarea id="message" name="message"></textarea><br>

                    <label>Согласие на обработку персональных данных</label>
                    <input <?php if ($agreement == 'yes') echo ('checked') ?> type="checkbox" id="agreement"  name="agreement" value="yes" required><br>
                    
                    <label class="form-label" for="attachment">Файл для отправки</label><br>
                    <input type="file" name="attachment" id="attachment"><br>

                    <button type="submit">Submit</button>

                </form>
            </div>
    </div>
</body>
</html>
<?php
include('header.html');

?>

<div class="container">
    <form action="index.php" method="GET">
        <div class="form-group">
            <?php
            if (isset($_POST['name'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $radioButton = $_POST['selector'];
                echo '<p name="name">' . 'Здравствуйте, ' . $_POST['name'] . '</p>';
                if ($_POST['category'] == 'proposal') {
                    echo '<p>Спасибо за ваше предложение:</p>';
                    echo '<textarea>' . $_POST['message'] . '</textarea>';
                } else {
                    echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                    echo '<textarea>' . $_POST['message'] . '</textarea>';
                }
                if (isset($_FILES['attachment'])) {
                    $file = $_FILES['attachment'];
                    $uploadedFile = $file['name'];
                    echo '<p>Прикрепленный файл: </p>'. $uploadedFile;
                }
                else  echo '<p>Файл не прикреплен </p>';
            }
            ?>
        </div>
        <a class="btn" href="index.php?name=<?php echo $_POST['name']; ?>&email=<?php echo $_POST['email']; ?>&agreement=<?php echo $_POST['agreement']; ?>&selector=<?php echo $_POST['selector']; ?>">Заполнить снова</a>
    </form>
</div>
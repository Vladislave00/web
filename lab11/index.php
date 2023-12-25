<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="container-fluid bg-dark p-3">
        <?php
        echo '<a href="?html_type=TABLE'; // начало ссылки ТАБЛИЧНАЯ ФОРМА
        if (array_key_exists('content', $_GET)) {
            echo '&content=' . $_GET['content'] . '"';
        } else {
            echo '"';
        }
        // если в скрипт был передан параметр html_type и параметр равен TABLE 
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE') {
            echo ' class="bg-danger text-decoration-none text-white mx-3 p-1"'; // ссылка выделяется через стиль
        } else {
            echo ' class="text-decoration-none text-white mx-3 p-1"'; // ссылка выделяется через стиль
        }
        echo '>Табличная форма</a>'; // конец ссылки ТАБЛИЧНАЯ ФОРМА
        echo '<a href="?html_type=DIV'; // начало ссылки БЛОКОВАЯ ФОРМА
        if (array_key_exists('content', $_GET)) {
            echo '&content=' . $_GET['content'] . '"';
        } else {
            echo '"';
        }
        // если в скрипт был передан параметр html_type и параметр равен DIV 
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV') {
            echo ' class="bg-danger text-decoration-none text-white p-1"'; // ссылка выделяется через CSS-класс
        } else {
            echo ' class="text-decoration-none text-white p-1"'; // ссылка выделяется через CSS-класс
        }
        echo '>Блочная форма</a>';
        ?>
    </header>
    <main class="container py-3" style="min-height: 90vh;">
        <div class="row">
            <div class="col-1 d-flex flex-column">
                <?php
                echo '<a href="?';
                if (array_key_exists('html_type', $_GET)) {
                    echo 'html_type=' . $_GET['html_type'] . '&';
                }
                echo 'content=all';
                echo '"';
                if (array_key_exists('content', $_GET) && $_GET['content'] === 'all') {
                    echo 'class="border text-decoration-none mb-2 border-primary"';
                } else {
                    echo 'class="border mb-2 text-decoration-none"';
                }
                echo '>Всё</a>';
                for ($i = 2; $i < 10; $i++) {
                    echo '<a href="?';
                    if (array_key_exists('html_type', $_GET)) {
                        echo 'html_type=' . $_GET['html_type'] . '&';
                    }
                    echo "content={$i}";
                    echo '"';
                    if (array_key_exists('content', $_GET) && $_GET['content'] == $i) {
                        echo 'class="border text-decoration-none mb-2 border-primary"';
                    } else {
                        echo 'class="border mb-2 text-decoration-none"';
                    }
                    echo ">{$i}</a>";
                }
                ?>
            </div>
            <div class="col d-flex flex-row gap-3">
                <?php
                //оторажение табличной формв
                if (!array_key_exists('html_type', $_GET) || (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE')) {
                    if (!array_key_exists('content', $_GET) || (array_key_exists('content', $_GET) && $_GET['content'] == 'all')) {
                        for ($i = 2; $i < 10; $i++) {
                            echo '<table class="table table-bordered table-striped">';
                            echo '<tbody>';
                            for ($j = 1; $j < 10; $j++) {
                                $res = $i * $j;
                                $res = strlen((string)$res) == 1 ? '<a href="?content=' . $res . '">' . $res . '</a>' : $res;
                                echo '<tr>';
                                echo '<td>';
                                echo '<a href="?content=' . $i . '">' . $i . '</a>*<a href=?content=' . $j . '>' . $j . '</a>=' . $res;
                                echo '</td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                    } else if (array_key_exists('content', $_GET)) {
                        $i = $_GET['content'];
                        echo '<table class="table table-bordered table-striped">';
                        echo '<tbody>';
                        for ($j = 1; $j < 10; $j++) {
                            $res = $i * $j;
                            $res = strlen((string)$res) == 1 ? '<a href="?content=' . $res . '">' . $res . '</a>' : $res;
                            echo '<tr>';
                            echo '<td>';
                            echo '<a href="?content=' . $i . '">' . $i . '</a>*<a href=?content=' . $j . '>' . $j . '</a>=' . $res;
                            echo '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    }
                //отображение блочной формы    
                } else if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV') { 
                    if (!array_key_exists('content', $_GET) || (array_key_exists('content', $_GET) && $_GET['content'] == 'all')) {
                        for ($i = 2; $i < 10; $i++) {
                            echo '<div>';
                            for ($j = 1; $j < 10; $j++) {
                                $res = $i * $j;
                                $res = strlen((string)$res) == 1 ? '<a href="?content=' . $res . '">' . $res . '</a>' : $res;
                                echo '<div class="mb-2">';
                                echo '<a href="?content=' . $i . '">' . $i . '</a>*<a href=?content=' . $j . '>' . $j . '</a>=' . $res;
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    } else if (array_key_exists('content', $_GET)) {
                        $i = $_GET['content'];
                        echo '<div>';
                        for ($j = 1; $j < 10; $j++) {
                            $res = $i * $j;
                            $res = strlen((string)$res) == 1 ? '<a href="?content=' . $res . '">' . $res . '</a>' : $res;
                            echo '<div class="mb-2">';
                            echo '<a href="?content=' . $i . '">' . $i . '</a>*<a href=?content=' . $j . '>' . $j . '</a>=' . $res;
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <footer class="bg-dark p-3 text-white d-flex flex-row gap-5 fixed-bottom">
        <?php
        if( !isset($_GET['html_type']) ) {
            echo '<div>Тип верстки: не выбран</div>';
        }
        
        else {
            if($_GET['html_type']== 'TABLE' ) 
                echo '<div>Табличная верстка.</div>';
            else 
                echo '<div>Блочная верстка.</div>';
        }
        if (!array_key_exists('content', $_GET) || (array_key_exists('content', $_GET) && $_GET['content'] == 'all')) {
            echo '<div>Полная таблица</div>';
        } else if (array_key_exists('content', $_GET)) {
            echo '<div>столбец: ' . $_GET['content'] . '</div>';
        }
        date_default_timezone_set('Europe/Moscow');
        echo '<div>' . date('Дата: d.m.Y Время: H:i:s') . '</div>';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
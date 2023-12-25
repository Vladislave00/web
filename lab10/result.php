<?php
function analyze_text($text)
{

    $letter_count = 0;
    $lower_count = 0;
    $upper_coount = 0;
    $marks_count = 0;
    $digits_count = 0;
    $word_count = 0;
    $each_symbol_count = array();
    $each_word_count = array();
    if (isset($_POST['text']) && $_POST['text']) {
        $text = iconv("utf-8", "cp1251", $_POST['text']);
        $word = '';
        for ($i = 0; $i < strlen($text); $i++) {
            if ($text[$i] === ' ') {
                if ($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
                //'/[.,\/#!$%\^&\*;:{}=\-_`~()]/'
            } else if (preg_match('/[.,!?;:()"]/', $text[$i])) {
                $marks_count += 1;
                if ($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
            } else if (preg_match('/[a-z]+/u', $text[$i]) || preg_match('/[а-я]+/u', iconv("cp1251", "utf-8", $text[$i]))) {
                echo '<script>console.log("1 ' . $text[$i] . '")</script>';
                $letter_count += 1;
                $lower_count += 1;
                $word .= $text[$i];
            } else if (preg_match('/[A-Z]+/u', $text[$i]) || preg_match('/[А-Я]+/u', iconv("cp1251", "utf-8", $text[$i]))) {
                echo '<script>console.log("2 ' . $text[$i] . '")</script>';
                $letter_count += 1;
                $upper_coount += 1;
                $word .= $text[$i];
            } else if (preg_match('/[0-9]/', $text[$i])) {
                $digits_count += 1;
                if ($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
            }
            if (isset($each_symbol_count[$text[$i]])) $each_symbol_count[$text[$i]] += 1;
            else $each_symbol_count[$text[$i]] = 1;
            if ($i === strlen($text) - 1) {
                if ($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
            }
        }
        echo "1. Количество символов: " . strlen($text) . '<br>';
        echo "2. Количество букв: " . $letter_count . '<br>';
        echo "3.1. Количество строчных букв: " . $lower_count . '<br>';
        echo "3.2.   Количество заглавных букв: " . $upper_coount . '<br>';
        echo "4. Количество знаков препинания: " . $marks_count . '<br>';
        echo "5. Количество цифр: " . $digits_count . '<br>';
        echo "6. Количество слов: " . $word_count . '<br>';
        echo "7. Количество вхождений каждого символа:" . '<br>';
        foreach ($each_symbol_count as $key => $value) {
            $key = iconv("cp1251", "utf-8", $key);
            if ($key === ' ') {
                echo "'{$key}': {$value} <br>";
                continue;
            }
            echo "{$key}: {$value} <br>";
        }

        ksort($each_word_count);

        echo "8. Список всех слов и количество их вхождений, отсортированный по алфавиту:" . '<br>';
        foreach ($each_word_count as $key => $value) {
            $key = iconv("cp1251", "utf-8", $key);
            if ($key === ' ') {
                echo "'{$key}': {$value} <br>";
                continue;
            }
            echo "{$key}: {$value} <br>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ текста</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <?php if (!isset($_POST['text']) || empty($_POST['text'])) {
            echo '<h1 class="text-danger">Нет текста для анализа<h1>';
        } else {
            $text = $_POST['text'];
            echo '<p>' . $text . '</p>';
            analyze_text($text);
        }
        ?>
        <a class="btn btn-primary" href="index.html">Обратно к анализу</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
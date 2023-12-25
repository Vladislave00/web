<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Афонин В. 221-361 9 лаб.</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="header">
        <h1 id="title">Афонин В. 221-361 9 лаб.</h1>
        <img class = "image" src="https://mik-shop.ru/upload/iblock/927/9278b3d9acec7417df06db0b34d8a80c.png">
    </header>

    <main>
        <div class="container">
            <h2 id="title-form">Формулы</h2>
            <?php
            function calculateFunction($x)
            {
                $result = 0;

                if ($x <= 10) {
                    $result = (10*$x)-5;
                } elseif ($x > 10 and $x < 20) {
                    $result = ($x+3)*$x*$x;
                } elseif ($x >= 20) {
                    $denominator = $x - 25;
                    if ($denominator == 0)
                        $result = 'error';
                    else
                        $result = 3 / $denominator;
                }
                
                return $result;
            }
            $maxValueStop = 100000;
            $minValueStop = -199;
            $initialArgument = 20;
            $numValues = 1000;
            $step = 1;
            $maxValue = 1000;
            $minValue = -1;
            $markupType = 'D';

            switch ($markupType) {
                case 'A':
                    for ($i = 0; $i < $numValues; $i++) {
                        $currentArgument = $initialArgument + $i * $step;
                        $currentValue = calculateFunction($currentArgument);

                        
                        if ($currentValue !== 'error') {
                            if($currentValue <= $minValueStop or $currentValue >= $maxValueStop) break;
                            echo "f(" . round($currentArgument, 3) . ")=" . round($currentValue, 3) . "<br>";
                        } else {
                            echo "f(" . round($currentArgument, 3) . ")=" . $currentValue . "<br>";
                        }
                    }
                    break;

                case 'B':
                    echo '<ul>';
                    for ($i = 0; $i < $numValues; $i++) {
                        $currentArgument = $initialArgument + $i * $step;
                        $currentValue = calculateFunction($currentArgument);

                        
                        if ($currentValue !== 'error') {
                            if($currentValue <= $minValueStop or $currentValue >= $maxValueStop) break;
                            echo "<li>f(" . round($currentArgument, 3) . ")=" . round($currentValue, 3) . "</li>";
                        } else {
                            echo "<li>f(" . round($currentArgument, 3) . ")=" . $currentValue . "</li>";
                        }
                    }
                    echo '</ul>';
                    break;

                case 'C':
                    echo '<ol>';
                    for ($i = 0; $i < $numValues; $i++) {
                        $currentArgument = $initialArgument + $i * $step;
                        $currentValue = calculateFunction($currentArgument);

                        
                        if ($currentValue !== 'error') {
                            if($currentValue <= $minValueStop or $currentValue >= $maxValueStop) break;
                            echo "<li>f(" . round($currentArgument, 3) . ")=" . round($currentValue, 3) . "</li>";
                        } else {
                            echo "<li>f(" . round($currentArgument, 3) . ")=" . $currentValue . "</li>";
                        }
                    }
                    echo '</ol>';
                    break;

                case 'D':
                    echo '<table style="margin-left:0.6em" border="2" cellpadding="2" cellspacing="15">';
                    echo '<tr><th>#</th><th>Argument</th><th>Value</th></tr>';
                    for ($i = 0; $i < $numValues; $i++) {
                        $currentArgument = $initialArgument + $i * $step;
                        $currentValue = calculateFunction($currentArgument);

                        
                        if ($currentValue !== 'error') {
                            if($currentValue <= $minValueStop or $currentValue >= $maxValueStop) break;
                            echo "<tr><td>$i</td><td>" . round($currentArgument, 3) . "</td><td>" . round($currentValue, 3) . "</td></tr>";
                        } else {
                            echo "<tr><td>$i</td><td>" . round($currentArgument, 3) . "</td><td>$currentValue</td></tr>";
                        }
                    }
                    echo '</table>';
                    break;

                case 'E':
                    for ($i = 0; $i < $numValues; $i++) {
                        $currentArgument = $initialArgument + $i * $step;
                        $currentValue = calculateFunction($currentArgument);
                        
                        if ($currentValue !== 'error') {
                            if($currentValue <= $minValueStop or $currentValue >= $maxValueStop) break;
                            echo "<div style='border: 2px solid red; margin-top:2em; margin-right: 8px; display: inline-block;'>f($currentArgument)=" . number_format($currentValue, 3) . "</div>";
                        } else {
                            echo "<div style='border: 2px solid red; margin-top:2em; margin-right: 8px; display: inline-block;'>f($currentArgument)=$currentValue</div>";
                        }
                    }
                    break;
            }
            $values = [];

            for ($i = 0; $i < $numValues; $i++) {
                $currentArgument = $initialArgument + $i * $step;
                $values[] = calculateFunction($currentArgument);
            }

            $values = array_filter($values, function ($value) {
                return $value !== 'error';
            });

            if (!empty($values)) {

                $maxValue = max($values);
                $minValue = min($values);
                $averageValue = array_sum($values) / count($values);
                $totalSum = array_sum($values);

                echo "<br>";
                echo "Максимальное значение: " . number_format($maxValue, 3) . "<br>";
                echo "<br>";
                echo "Минимальное значение: " . number_format($minValue, 3) . "<br>";
                echo "<br>";
                echo "Среднее значение: " . number_format($averageValue, 3) . "<br>";
                echo "<br>";
                echo "<br>";
                echo "Сумма значений: " . number_format($totalSum, 3) . "<br>";
            }
            ?>
        </div>
    </main>
    <footer>
        <ul>
            <li>Тип верстки:<?php echo $markupType; ?></li>
            <li><a href="">Контакты</a></li>
            <li class="elementsFooter"><a href="">Условия использования</a></li>
            <li><a href="">Политика конфиденциальности</a></li>
            <li>&copy; 2023 FomCorp. Все права защищены.</li>
        </ul>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Афонин</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <header>
        <div>
            <h1 id="title"> Лабораторная 5 </h1>
        </div>
        <div>
            <ul class="listHeader">
                <li>
                    <a href="index.php">PageConnection</a>
                </li>
                <li>
                    <a href="viewDB.php" class="currentPage">PageView</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="box">
            <?php 
            include "connectToDB.php";
            $result = mysqli_query($mysqli, "SELECT * FROM `images`");
            ?>
            </php>
            <table>
            <?php 
            $sql = 'SELECT * FROM termins';
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>{$row['termin']}</td>" . "<td>{$row['description']}</td></tr>";
            } ?>
            </table>

            <table>
            <?php 
            $sql = 'SELECT * FROM images';
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="filters__img">' . '<img src="'. $row['path'] .'" alt="">' . '</div>';
            } ?>
            </table>
        </div>
        </div>
    </main>
</body>

</html>
<?php 
include "connectToDB.php";
$result = mysqli_query($mysqli, "SELECT * FROM `images`");
?>
</php>
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
            // echo $result;
            while ($name = mysqli_fetch_assoc($result)) {

                $query = "SELECT * FROM termins ORDER BY RAND() LIMIT 1";
                $termResult = mysqli_query($mysqli, $query);
                $term = mysqli_fetch_assoc($termResult);
            ?>
                <div class="filters__img">
                    <img title="<?php echo $name['path']; ?>" src="<?php echo $name['path']; ?>" />

                    <div class="container">
                        <p><?php echo $term['termin']; ?> - это <?php echo $term['description']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>
    </main>
</body>

</html>
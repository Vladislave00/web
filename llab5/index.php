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
                    <a href="index.php" class="currentPage">PageConnection</a>
                </li>
                <li>
                    <a href="viewDB.php">PageView</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <form>
                <div class="form-group">
                    <?php
                    include('connectToDB.php');
                    ?>
                    </div>
            </form>
        </div>
    </main>
</body>

</html>
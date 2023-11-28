<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'scriptPHPpages.php'    ?>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title><?php echo $pageTitle2; ?></title>
</head>

<body>
    <header>
        <div>
            <h1 id="title"> Лабораторная 3 </h1>
        </div>
        <div>
            <ul class="listHeader">
            <li>
        <a href="index.php">Page1</a>
    </li>
    <li>
        <a href="page2.php" <?php $current_page2=true; if ($current_page2) echo 'class="currentPage"'; ?>>Page2</a>
    </li>
    <li>
        <a href="page3.php">Page3</a>
    </li>
            </ul>
        </div>
    </header>
    <main>
        <div>
            <article>
                <h1>Коты</h1>
                <p>Кошки - это домашние животные, которые являются одними из наиболее популярных "животных-компаньонов" наряду с собаками. Они относятся к млекопитающим семейства кошачьих отряда хищных. Кошки имеют много интересных и удивительных фактов, например, они могут быть причиной болезней и вызывать аллергию у людей, а также они чрезвычайно плодовиты.</p>
                <h2>Еще о котах </h2>
                <p>Коты и кошки - это домашние животные, которые являются частью семьи для многих людей. Они представляют собой одну из наиболее популярных категорий "животных-компаньонов" вместе с собаками. С точки зрения научной систематики, кошки относятся к млекопитающим семейства кошачьих отряда хищных. Некоторые исследователи рассматривают домашнюю кошку как подвид дикой кошки, в то время как другие считают ее отдельным биологическим видом</p>

                <div>
                    <img class="image" src="<?php echo $nameImage1; ?>" alt="Описание фотографии 1">
                    <p>Кошки и коты имеют ряд отличий друг от друга. Одно из основных различий - это размер. Обычно коты бывают крупнее кошек. Однако, в целом, кошки и коты имеют схожие черты и поведение. Они обладают гибкостью и ловкостью, что делает их отличными охотниками. Их ночное зрение и слуховая чувствительность позволяют им успешно охотиться даже в темноте.</p>
                </div>
                <p>Кошки также известны своей способностью прыгать на значительные высоты и лазить по вертикальным поверхностям. Это объясняется их анатомическим строением, включающим гибкую позвоночнику, растяжимые мышцы и острые когти. Кошки также могут проявлять независимость и самостоятельность в своих действиях</p>

                <h2>
                    Продолжаем
                </h2>
                <p>Кошки имеют разнообразные окрасы и шерсть, что привело к развитию множества пород кошек. Каждая порода имеет свои уникальные особенности внешнего вида, характера и потребностей. Некоторые из популярных пород кошек включают Мейн-кун, Сиамскую кошку, Британскую короткошерстную, Бенгальскую кошку и многие другие</p>

                <div>
                    <p>Важно отметить, что каждая кошка имеет свою индивидуальность и уникальный характер. Они могут быть ласковыми и привязанными к своим хозяевам, одновременно сохраняя свою независимость. Кошки также известны своей способностью создавать эмоциональные связи со своими владельцами и принести радость и утешение в нашу жизнь</p>
                    <img class="image2" src="<?php echo $nameImage2; ?>" alt="Описание фотографии 2">
                    <p>Независимо от породы или характера, кошки являются прекрасными компаньонами и приносят нам много радости и удовольствия. Они требуют заботы, включая регулярное кормление, уход за шерстью, игры и ветеринарный уход. Взамен они дарят нам свою преданность и любовь.
                    </p>
                </div>
                <div>
                    <h4>Список:</h4>
                    <ul>
                        <?php
                        for ($i = 1; $i <= $numElements; $i++) {
                            echo "<li>Элемент $i</li>";
                        }
                        ?>
                    </ul>
                    <p>Кошки обладают уникальным поведением и коммуникацией. Они используют различные звуки, мяуканье, мурлыканье и фырканье, чтобы передать свои потребности и эмоции. Кошки также могут использовать свое тело и хвост для выражения настроения. Например, они могут поднять хвост вверх, чтобы показать радость или любопытство.
                    Кошки известны своей способностью самостоятельно ухаживать за собой. Они проводят много времени на груминге, то есть чистке своей шерсти с помощью языка и лап. Это помогает им поддерживать свою шерсть в хорошем состоянии и оставаться чистыми.
                    Кошки также могут быть отличными компаньонами для людей. Они могут быть ласковыми и привязанными к своим владельцам, предлагая им утешение и поддержку. Многие люди находят успокоение и умиротворение в простом присутствии своей любимой кошки.
                    В целом, кошки - это удивительные существа, которые приносят радость и уют в нашу жизнь. Они имеют свою неповторимую индивидуальность и способность создавать особые связи с людьми. Нет сомнения в том, что кошки заслуживают всеобщей любви и уважения.</p>    
                </div>
        </div>
        </article>
    </main>
    <footer>
        <p>Сформировано <?php echo $currentDateTime ?></p> 
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-warning">
        <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="https://bryansktoday.ru/uploads/common/4537ae75c88a63ad_XL.jpg" class="bi me-2" width="60" height="60">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">О нас</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Цены на доставку</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Вопросы</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="log.php" class="btn btn-link mt-3">Авторизация</a>

            <a href="reg.php" class="btn btn-link mt-3">Регистрация</a>

        </div>
    </header>

    <main>

        <div id="carouselExampleIndicators" width="200" height="300" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" width="200" height="300">
                    <img src="https://sun9-74.userapi.com/impg/4LaikasnLCfsDdD5ZUv6JBGk1DwiPZ1MpInFKA/a6D6DJE20Gg.jpg?size=1280x322&quality=95&sign=7e2730822f72c5b12192441c684937a0&c_uniq_tag=NphiJRrwI1rmJlq5Y2nra2KReD_JQPBDujcpTuUywKc&type=album" class="d-block w-100" width="200" height="300">
                </div>
                <div class="carousel-item">
                    <img src="https://sun9-21.userapi.com/c855620/v855620934/c0275/UixWn6eQKpM.jpg" class="d-block w-100" width="200" height="300">
                </div>
                <div class="carousel-item">
                    <img src="https://sun9-15.userapi.com/impf/oIjmxkWjRo66k7TD2lq-95H69X1yCmL8L9oFpg/xB9BGguNKFw.jpg?size=1590x530&quality=95&crop=0,89,1000,333&sign=681a108562d6cb942a3e8417da173245&type=cover_group" class="d-block w-100" width="200" height="300">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>

        <div class="alert-area"></div>

        <div class="container mt-5" id="pros">
            <h2>Почему мы лучшие в доставке</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://100-sovet.ru/wp-content/uploads/2023/04/7431BA8C-7B09-4546-A091-F794EB2DA495.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Гибкость расписания</h5>
                            <p class="card-text">Возможность выбирать удобное время доставки, включая опцию экспресс-доставки.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://ktonazdorovogo.ru/wp-content/uploads/2022/12/543673456453.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Отслеживание в реальном времени</h5>
                            <p class="card-text">Постоянное отслеживание местоположения груза и уведомления о его статусе.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://pantavi.ru/thumb/2/OWoq7RlpsVp4cwMkLJ634A/r/d/55034692_2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Экологическая ответственность</h5>
                            <p class="card-text">Использование эко-френдли методов доставки и упаковки для снижения негативного воздействия на окружающую среду.</p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://fooddelive.ru/blog/wp-content/uploads/2020/05/Dostavka-edy-kak-biznes-2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Широкий выбор услуг</h5>
                            <p class="card-text">Возможность выбора различных видов доставки, включая доставку на дом, в пункты выдачи, и т.д.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://files.123inventatuweb.com/cf/dd/cfdddfeb-995c-485f-9af0-1943d529cd9d.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Качественное обслуживание</h5>
                            <p class="card-text">Предоставление высококлассного обслуживания клиентов с учетом их индивидуальных потребностей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://delodom.com/wp-content/uploads/2019/09/dostavka-edy-iz-restorana.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Инновационные технологии</h5>
                            <p class="card-text">Применение передовых технологий для оптимизации процессов доставки и повышения эффективности обслуживания.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class = "container">
            
            <h1>Предприятия</h1>
            <?php
            include "connectToDB.php";
            ?>
            </php>
            <table class="table text-black">
                <?php
                $sql = 'SELECT * FROM place';
                $result = mysqli_query($mysqli, $sql);
                echo "<tr><td>Название</td>" . "<td>Тип</td>" . "<td>Округ</td>" . "<td>Район</td>" . "<td>Скидка</td>" . "<td>Выбор</td></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>{$row['name']}</td>" . "<td>{$row['type']}</td>" . "<td>{$row['region']}</td>" . "<td>{$row['district']}</td>" . "<td>{$row['discount']}</td>" . "<td><button class=" . "btn btn-primary" . ">Выбрать</button></td></tr>";
                } ?>
            </table>

        </div>
        </div>


        <div class="container mt-5">
            <h1>Меню</h1>
            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://podacha-blud.com/uploads/posts/2022-10/1666418489_1-podacha-blud-com-p-kakoi-salat-mozhno-podat-k-paste-karbonara-1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Карбонара</h5>
                            <p class="card-text">300 рублей</p>
                            <button class="btn btn-primary">Добавить в заказ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://static.tildacdn.com/tild6464-6361-4432-b533-623738336662/DSC_2203_1_1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Пицца пеперони</h5>
                            <p class="card-text">500 рублей</p>
                            <button class="btn btn-primary">Добавить в заказ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="https://webpulse.imgsmail.ru/imgpreview?key=pulse_cabinet-image-d0ad3fbd-ed3c-41e4-93ac-ddf2e3db9f64&mb=webpulse" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Салат цезарь</h5>
                            <p class="card-text">400 рублей</p>
                            <button class="btn btn-primary">Добавить в заказ</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="container bg-light text-black">
            <div class="container mt-5">
                <h1>Дополнительные функции</h1>
                <div class="form-check form-check">
                    <input class="form-check-input" type="checkbox" id="" value="option1" />
                    <label class="form-check-label" for="">Являюсь студентом</label>
                </div>
                <div class="form-check form-check">
                    <input class="form-check-input" type="checkbox" id="" value="option2" />
                    <label class="form-check-label" for="">Экспресс доставка</label>
                </div>
            </div>
            <div class="container mt-5">
                <span>Итого: 800 рублей</span><br>
                <button class="btn btn-primary">Оформить заказ</button>
            </div>
        </div>


    </main>

    <footer class="footer mt-auto py-3 bg-warning">
        <div class="container pt-2">
            <p>ООО Служба доставки "Братец кролик"</p>
            <p> Телефон +7-995-355-25-25</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
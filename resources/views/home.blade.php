<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Косметологическая студия Екатерины Тарасовой</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/fonts/3.jpg" alt="Bootstrap" width="55" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="#about-me" class="nav-link nav-word"><b>Обо мне</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link nav-word"><b>Услуги</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="#reviews" class="nav-link nav-word"><b>Отзывы</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacts" class="nav-link nav-word"><b>Контакты</b></a>
                    </li>
                </ul>
                <a href="tel:79889686699" class="navbar-text phone nav-word"><i class="fa fa-phone phone-icon"
                                                                                aria-hidden="true"></i><b>+79889686699</b></a>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid main-photo">
    <div class="container about">
        <p class="c-name">Косметолог <br></p>
        <p class="name"> Екатерина Тарасова <br></p>
        <p class="a-name">Со мной Вы заново влюбитесь в свое <br> отражение в зеркале</p>
        <button type="button" class="btn btn btn-success p-btn" data-bs-toggle="modal" data-bs-target="#zapis">
            Записаться на прием
        </button>
        <button type="button" class="btn btn-outline-dark p-btn" data-bs-toggle="modal" data-bs-target="#price">Прайс
        </button>
    </div>
</div>
<div class="modal fade" id="zapis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Записаться на приём</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <form action="/order" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label"><b>Ваше Имя:</b></label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label"><b>Ваш телефон:</b></label>
                        <input type="text" class="form-control" id="recipient-name" name="phone">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-outline-success">Записаться</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="price" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Прайс-лист</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="owl-price owl-carousel owl-theme">
                        <div><img src="/images/17.jpg" alt="..."></div>
                        <div><img src="/images/18.jpg" alt="..."></div>
                        <div><img src="/images/19.jpg" alt="..."></div>
                        <div><img src="/images/20.jpg" alt="..."></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
            </div>
        </div>
    </div>
</div>

<article id="about-me">
    <div class="container-fluid second">
        <div class="container">
            <p class="head-about-me">ОБО МНЕ <br></p>

            <div class="row">
                <div class="col-sm">
                    <p class="text-about"><b>Тарасова Екатерина

                            Косметолог.

                            Два высших образования.

                            В определенный этап жизни поняла , что хочу создавать красоту своими руками.

                            Профессия косметолога это не только работа с внешним видом, это в первую очередь работа с внутренним состоянием, деятельность очень тонкая и ювелирная.

                            Желание помогать людям жить полноценной и интересной жизнью, обретая внутренние ресурсы через внешнюю красоту

                            Успешно развиваюсь в этом направлении постоянно повышая квалификацию, знания и навыки.</b></p>
                </div>
                <div class="col-sm brand">
                    <a class="navbar-brand nav-link active" href="#">
                        <img src="fonts/2.png" class="logo" alt="Bootstrap" width="450" height="440">
                    </a>
                </div>
                <div class="col-sm col-md-8 col-xl col-photo">
                    <img src="images/2.jpg" class="photo" width="260px" height="380px" alt="">
                </div>
            </div>
        </div>
    </div>
</article>


{{-- Блок с улугами--}}
<article id="services">
    <div class="container-fluid orders-fluid">
        <div class="container orders">
            <div class="row row-cols-4">
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img class="icon" src="images/1.jpg" alt="">
                        <p class="p-orders">Бланширование или бланчтерапия</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#2">
                        <img class="icon" src="images/5.jpg" alt="">
                        <p class="p-orders">Липолитики</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#3">
                        <img class="icon" src="images/6.jpg" alt="">
                        <p class="p-orders">Отбеливание зубов</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#piling">
                        <img class="icon" src="images/7.jpg" alt="">
                        <p class="p-orders">Пилинг</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#mezoniti">
                        <img class="icon" src="images/8.jpg" alt="">
                        <p class="p-orders">Тредлифтинг/Мезонити</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#4">
                        <img class="icon" src="images/9.jpg" alt="">
                        <p class="p-orders">Радиесс</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#5">
                        <img class="icon" src="images/4.png" alt="">
                        <p class="p-orders">Контурная пластика</p>
                    </button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-xl-3 div-orders">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#6">
                        <img class="icon" src="images/10.jpg" alt="">
                        <p class="p-orders">Ботулинотерапия</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Бланширование или бланчтерапия</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Что это такое?</b></p>
                        <hr>
                        <p>
                        <li><b>Если статические морщины уже образовались, то одна ботулинотерапия не поможет, здесь
                                необходимо
                                использовать мягкий филлер, чтобы заполнить и полечить кожный залом.</b>
                        </li>
                        </p>
                        <p><b>Кому это подходит?</b></p>
                        <hr>
                        <p>
                        <li><b>Женщинам</b></li>
                        <li><b>Мужчинам</b></li>
                        </p>
                        <p><b>Цена:</b></p>
                        <hr>
                        <p>
                        <li><b>12 000 р</b></li>
                        </p>
                        <p><b>Продолжительность:</b></p>
                        <hr>
                        <li><b>1 час</b></li>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Липолитики</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Что это такое?</b></p>
                        <hr>
                        <p>
                            <li><b>Благодаря действенному составу позволяет за 3-4 процедуры существенно уменьшить объем
                                    подкожно-жировой
                                    клетчатки на лице:</b>

                        <ul>
                            <li><b>без отеков</b></li>
                            <li><b>без боли</b></li>
                            <li><b>без анестезии</b></li>
                            <li><b>быстро и эффективно</b></li>
                        </ul>

                        </li>
                        </p>
                        <p><b>Кому это подходит?</b></p>
                        <hr>
                        <p>
                        <li><b>Женщинам</b></li>
                        <li><b>Мужчинам</b></li>
                        </p>
                        <p><b>Цена:</b></p>
                        <hr>
                        <p>
                        <li><b>3000 р</b></li>
                        </p>
                        <p><b>Продолжительность:</b></p>
                        <hr>
                        <li><b>30 минут</b></li>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Отбеливание зубов</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Что это такое?</b></p>
                        <hr>
                        <p>
                        <li><b>Процедура изменения оттенка зубной эмали.</b>
                        </li>
                        </p>
                        <p><b>Кому это подходит?</b></p>
                        <hr>
                        <p>
                        <li><b>Женщинам</b></li>
                        <li><b>Мужчинам</b></li>
                        </p>
                        <p><b>Цена:</b></p>
                        <hr>
                        <p>
                        <li><b>3900 р</b></li>
                        </p>
                        <p><b>Продолжительность:</b></p>
                        <hr>
                        <li><b>1 час</b></li>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mezoniti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Тредлифтинг/Мезонити</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Что это такое?</b></p>
                        <p>
                            <li><b>Мезонити - эффективная безоперационная методика омоложения лица с помощью
                                    специальных армирующих нитей. Они формируют четкий каркас и поддерживают ткани
                                    человека
                                    в нужном
                                    положении. Нитевая подтяжка - метод, который отлично справляется с птозом.</b>
                        <hr>
                        </li>
                        </p>
                        <p><b>Кому это подходит?</b></p>
                        <p>
                        <li><b>Женщинам</b></li>
                        <li><b>Мужчинам</b></li>
                        </p>
                        <p><b>Цена:</b></p>
                        <hr>
                        <p>
                        <li><b>Мезонити 500 р</b></li>
                       <span class="text"><b>*Цена может уменьшиться от количества нитей</b></span>
                        <li><b>Нити коги 2500 р</b></li>
                        <li><b>Мезонити в губы для контура 3000 р</b></li>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="piling" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Пилинг</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Что это такое?</b></p>
                        <hr>
                        <p>
                        <li><b>
                                Пилинг (от анг. «peeling» — отшелушивание, отслаивание) — это процедура удаления
                                ороговевших частиц верхнего слоя кожи, которая стимулирует рост новых клеток, непосредственно влияет
                                на улучшение структуры кожи и повышение её эластичности. Улучшает цвет кожи, тонус, состояние.
                                В зависимости от пожеланий пациентки можно сделать кожу матовой или придать сияние изнутри.
                                Сократить выделение себума, уменьшить пигментацию.</b>
                        </li>
                        </p>
                        <p><b>Кому это подходит?</b></p>
                        <hr>
                        <p>
                        <li><b>Женщинам</b></li>
                        <li><b>Мужчинам</b></li>
                        </p>
                        <p><b>Цена:</b></p>
                        <hr>
                        <p>
                        <li><b>2500 р</b></li>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Радиесс</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Стимулирует синтез коллагена. Увлажняет и питает кожу, делая ее молодой и бархатистой,
                            сокращая кожный лоскут.</b>
                    </li>
                    </p>
                    <p><b>Кому это подходит?</b></p>
                    <hr>
                    <p>
                    <li><b>Женщинам</b></li>
                    <li><b>Мужчинам</b></li>
                    </p>
                    <p><b>Цена:</b></p>
                    <hr>
                    <p>
                    <li><b>1.5 мл -19000 р, 3мл - 29000 р</b></li>
                    </p>
                    <p><b>Продолжительность:</b></p>
                    <hr>
                    <li><b>1 час</b></li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Контурная пластика</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Кореекция формы губ, подбородка, скул, углов нжней челюсти.</b>
                    </li>
                    </p>
                    <p><b>Кому это подходит?</b></p>
                    <hr>
                    <p>
                    <li><b>Женщинам</b></li>
                    <li><b>Мужчинам</b></li>
                    </p>
                    <p><b>Цена:</b></p>
                    <hr>
                    <p>
                    <li><b>от 9000 р</b></li>
                    </p>
                    <p><b>Продолжительность:</b></p>
                    <hr>
                    <li><b>1 час</b></li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Ботулинотерапия</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Ботокс не замедляет и не останавливает процессы старения, он просто разглаживает ваши морщины на время.
                            При постоянном контроле за ними вы отучитесь хмуриться и предотвратите появление новых.</b>
                    </li>
                    </p>
                    <p><b>Кому это подходит?</b></p>
                    <hr>
                    <p>
                    <li><b>Женщинам</b></li>
                    <li><b>Мужчинам</b></li>
                    </p>
                    <p><b>Цена:</b></p>
                    <hr>
                    <p>
                    <li><b>от 3500 р</b></li>
                    </p>
                    <p><b>Продолжительность:</b></p>
                    <hr>
                    <li><b>30 мин</b></li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#zapis">Записаться</button>
                </div>
            </div>
        </div>
    </div>

</article>


{{--Блок с отзывами--}}
<article id="reviews">
    <div class="container reviews-carousel">
        <h1 class="text-center">Отзывы</h1>
        <hr>
        <div class="owl-carousel owl-theme">
            <div><img src="/images/12.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/13.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/14.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/21.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/22.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/23.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/24.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/25.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/26.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/27.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/28.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/29.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/30.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/31.jpg" class="d-block w-100" alt="..."></div>
            <div><img src="/images/35.jpg" class="d-block w-100" alt="..."></div>
        </div>
    </div>
</article>

<article id="contacts">
    <footer id="contacts">
        <div class="container">
            <div class="row footer-row">
                <div class="col">
                    <h1 class="text-center">Контакты</h1>
                    <div class="row no-gutters">
                        <div class="col icon-center"><a href="https://www.instagram.com/dr.tarasovaa/"><i
                                    class="fa fa-instagram fa-3x footer-icon1" aria-hidden="true"></i></a></div>
                        <div class="col icon-center"><a href="https://t.me/kate_tarasovaa"><i
                                    class="fa fa-paper-plane fa-3x footer-icon2" aria-hidden="true"></i></a></div>
                        <div class="col icon-center"><a href="https://vk.com/kate_tarasovaa"><i
                                    class="fa fa-vk fa-3x footer-icon3" aria-hidden="true"></i></a></div>
                        <div class="col icon-center"><a href=" https://wa.me/+79889686699"><i
                                    class="fa fa-whatsapp fa-3x footer-icon4" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="tel:79889686699" class="footer-phone">+79889686699</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 cart">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0a950030e2a880e59989bd541754141709b985743a03854f6c596dac77c2c9a8&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </footer>
</article>

<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/5933f9a18d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

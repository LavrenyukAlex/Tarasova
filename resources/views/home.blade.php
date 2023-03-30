<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Косметологическая студия Екатерины Тарасовой</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<div class="container-fluid main-photo">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid first">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active nav-word" aria-current="page" href="#">ОБО МНЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-word" aria-current="page" href="#">УСЛУГИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-word" aria-current="page" href="#">ОТЗЫВЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-word" aria-current="page" href="#">+79780453958</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container about">
        <p class="c-name">Косметолог <br></p>
        <p class="name"> Екатерина Тарасова <br></p>
        <p class="a-name">Со мной Вы заново влюбитесь в свое <br> отражение в зеркале</p>
        <button type="button" class="btn btn btn-success">Записаться на прием</button>
        <button type="button" class="btn btn-outline-light">Прайс</button>
    </div>
</div>
<div class="container-fluid second">
    <div class="container">
        <p class="head-about-me">ОБО МНЕ <br></p>
        <div class="d-flex flex-row mb-2">
            <div class="p-2 text-container"><p><b>Меня зовут Екатерина Тарасова. Я работаю косметологом уже 5 лет. Я
                        люблю кошечек и собачек и вообще я очень добрая, но
                        люблю колоть людей, именно поэтому я Ваш будущий косметолог!</b></p></div>
            <div class="p-2">
                <nav class="navbar">
                    <div class="container">
                        <a class="navbar-brand nav-link active" href="#">
                            <img src="fonts/2.png" alt="Bootstrap" width="350" height="340">
                        </a>
                    </div>
                </nav>
            </div>
            <div class="p-2"><img src="images/2.jpg" class="photo" width="300px" height="300px" alt=""></div>
        </div>
    </div>

</div>

{{-- Блок с улугами--}}

<div class="container-fluid orders-fluid">
    <div class="container orders">
        <div class="row row-cols-4">
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="icon" src="images/3.png" width="120px" height="120px" alt="">
                    <p class="p-orders">Биоревитализация</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#2">
                    <img class="icon" src="images/5.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Инъекционная косметология</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#3">
                    <img class="icon" src="images/6.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Отбеливание зубов</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#piling">
                    <img class="icon" src="images/7.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Пилинг</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#mezoniti">
                    <img class="icon" src="images/8.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Мезонити</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#4">
                    <img class="icon" src="images/9.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Радиесс</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#5">
                    <img class="icon" src="images/4.png" width="120px" height="120px" alt="">
                    <p class="p-orders">Чистка лица</p>
                </button>
            </div>
            <div class="col div-orders">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#6">
                    <img class="icon" src="images/10.jpg" width="120px" height="120px" alt="">
                    <p class="p-orders">Ботулинотерапия</p>
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Биоревитализация</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                            способна оказать
                            быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                    <li><b>5000 р</b></li>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Биоревитализация</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                            способна оказать
                            быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                    <li><b>5000 р</b></li>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Биоревитализация</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <hr>
                    <p>
                    <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                            способна оказать
                            быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                    <li><b>5000 р</b></li>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mezoniti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Мезонити</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p><b>Что это такое?</b></p>
                    <p>
                    <li>Мезонити – это очень тонкие, невесомые, невидимые нити из натурального саморассасывающегося
                        материала. С помощью них косметолог армирует ткани,
                        что не даст гравитационному птозу проявлять себя еще как минимум год. Такие нити не останутся с
                        вами навсегда – они рассосутся через 3-4 месяца.
                    </li>
                    </p>
                    <p><b>Кому это подходит?</b></p>
                    <p>
                    <li>Женщинам</li>
                    <li>Мужчинам</li>
                    </p>
                    <p><b>Цена:</b></p>
                    <p>
                    <li>3000 р</li>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-success">Записаться</button>
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
                            Пилинг (от анг. «peeling» — отшелушивание, отслаивание) — это процедура удаления ороговевших
                            частиц верхнего слоя кожи, которая стимулирует рост новых клеток, непосредственно влияет на
                            улучшение структуры кожи и повышение её эластичности.</b>
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
                    <button type="button" class="btn btn-outline-success">Записаться</button>
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
                <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                        способна оказать
                        быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                <li><b>5000 р</b></li>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-outline-success">Записаться</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                        способна оказать
                        быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                <li><b>5000 р</b></li>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-outline-success">Записаться</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <li><b>Биоревитализация представляет собой внутрикожное введение гиалуроновой кислоты. Процедура
                        способна оказать
                        быстрое омолаживающее действие и справляется со всеми возрастными изменениями.</b>
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
                <li><b>5000 р</b></li>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-outline-success">Записаться</button>
            </div>
        </div>
    </div>
</div>

{{--Форма для записи --}}

<div class="container">
    <h1>Записаться на приём</h1>
    <div class="input-group">
        <span class="input-group-text">Ваше Имя и фамилия</span>
        <input type="text" aria-label="Имя" class="form-control">

    </div>
    <input class="form-control form-control-lg" type="text" placeholder="Номер телефона" aria-label="Пример .form-control-lg">
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

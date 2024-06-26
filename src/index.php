<html>
<head>
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="/public/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        #content {
            padding-top: 50px;
        }
        .card .card-img-top {
            max-height: 250px;
        }
    </style>

</head>
<body>

    <div id="menu" class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Навбар</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ссылка</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Выпадающий список
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Действие</a></li>
                                <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Отключенная</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div id="content" class="container">
        <!-- Сетка с товарами -->
        <div class="row">
            <div class="col">
                <div class="card inline" style="width: 18rem;">
                    <img src="/public/img/image1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Товар 1</h5>
                        <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/public/img/image2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Товар 2</h5>
                        <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/public/img/image3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Товар 2</h5>
                        <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/public/img/image4.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Товар 2</h5>
                        <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

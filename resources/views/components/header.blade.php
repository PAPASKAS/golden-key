<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>

<header class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Золотой ключик</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">О нас</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/abouts-us/contacts">Контакты</a></li>
                        <li><a class="dropdown-item" href="/abouts-us/our-uniqueness">В чем наша уникальность</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/abouts-us/partners">Партнеры</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Строительство</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/buy-ready">Купить готовое</a></li>
                        <li><a class="dropdown-item" href="/build-to-order">Построить на заказ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Недвижимость</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/real-estate/buy">Купить</a></li>
                        <li><a class="dropdown-item" href="/real-estate/sell">Продать</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Услуги</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/electrician">Электрика</a></li>
                        <li><a class="dropdown-item" href="/services/cadastral-engineer">Кадастровый инженер</a></li>
                        <li><a class="dropdown-item" href="/services/surveyor">Геодезит</a></li>
                        <li><a class="dropdown-item" href="/services/repair">Ремонт</a></li>
                        <li><a class="dropdown-item" href="/services/legal-support">Юридическое сопровождение</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/home-and-health-insurance">Страхование жилья и здоровья</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Статьи</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/articles/repair">Ремонт</a></li>
                        <li><a class="dropdown-item" href="/articles/advanced-construction-technologies">Передовые технологии строительства</a></li>
                        <li><a class="dropdown-item" href="/services/jurisprudence">Юриспринденция</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/services/innovations">Новвоведения</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex common-form" role="search">
                <input class="form-control form-control-primary me-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</header>

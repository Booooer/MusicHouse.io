<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>
<body>
<div class="modal-auth">
    <p class="close-auth" onclick = "closeAuth()">X</p>
    <div class="auth-slider">
        <form class="auth-form" method="post">
            @csrf
            <p>Авторизация</p>
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="password" name="password" placeholder="Введите пароль" required>
            <button type="submit">Войти</button>
            <article>Нет аккаунта? <span class="switch-auth">Зарегистрироваться.</span></article>
        </form>
        <form class="reg-form" method="post" action="{{ route('reg') }}">
            @csrf
            <p>Регистрация</p>
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="text" name="name" placeholder="Введите имя" required>
            <input type="password" name="password" placeholder="Введите пароль" required>
            <button type="submit">Войти</button>
            <article>Уже есть аккаунт? <span class="switch-reg">Войти.</span></article>
        </form>
    </div>
</div>
<header>
    <div class="header-content">
        <div class="header-logo">
            <a href="{{ route('index') }}"><img src="img/logo.svg" alt="Лого"></a>
        </div>
        <div class="header-search">
            @csrf
            <input type="text" class="input-search">
            <input type="button" value="Найти">
        </div>
        <div class="header-cart">
            <div class="cart">
                <a href="{{ route('cart') }}"><img src="img/cart.png" alt="Корзина"></a>
                <p>Корзина</p>
            </div>
            @guest
            <div class="auth" onclick="openAuth()">
                <img src="img/auth.png" alt="Вход/Регситрация">
                <p>Войти</p>
            </div>
            @endguest
            @auth
            <div class="auth" style="margin:0 0 0 15px">
                <p>Вы вошли! <a href="{{ route('logout') }}">Выйти?</a></p>
            </div>
            @endauth
        </div>
    </div>
</header>
<nav>
    <div class="nav-list">
        <p>Каталог товаров</p>
        <p>Информация</p>
        <p>Оплата и доставка</p>
        <p>Наши работы</p>
        <p>Новости</p>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer>

</footer>
<script src="js/app.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>

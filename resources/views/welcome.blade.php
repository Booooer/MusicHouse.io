@extends('layouts.app')
@section('title','Главная')
@section('content')
    <div class="content">
        <div class="content-top">
            <ul class="content-list">
                <li>Каталог</li>
                <li>Музыкальные инструменты
                    <ul>
                        <li>Гитары</li>
                        <li>Гармошки</li>
                        <li>Щипковые инструменты</li>
                        <li>Тюнеры и метрономы</li>
                        <li>Струны</li>
                        <li>Пюпитры</li>
                    </ul>
                </li>
                <li>Звук
                    <ul>
                        <li>Акустические системы</li>
                        <li>Пульты</li>
                        <li>Микрофоны</li>
                        <li>Наушники</li>
                        <li>DJ оборудование</li>
                        <li>Мегафоны</li>
                        <li>Конференц-системы</li>
                    </ul>
                </li>
                <li>Свет
                    <ul>
                        <li>LED-приборы</li>
                        <li>Управляемые приборы</li>
                        <li>Системы управления</li>
                        <li>Лазерные приборы</li>
                        <li>Лампы</li>
                    </ul>
                </li>
                <li>Видео
                    <ul>
                        <li>Экраны</li>
                        <li>Светодиодные экраны</li>
                        <li>Проекторы</li>
                        <li>Интерактивное оборудование</li>
                    </ul>
                </li>
                <li>Шоу-эффекты
                    <ul>
                        <li>Генераторы дыма</li>
                        <li>Генераторы мыльных пузырей</li>
                        <li>Генераторы снега</li>
                        <li>Генераторы тумана</li>
                        <li>Генераторы пыли</li>
                    </ul>
                </li>
                <li>Механика
                    <ul>
                        <li>Фермы</li>
                        <li>Подиумы</li>
                        <li>Блоки</li>
                        <li>Лебёдки</li>
                        <li>Башни световые</li>
                    </ul>
                </li>
                <li>Автоматика
                    <ul>
                        <li>Бесперебойное электроснаряжение</li>
                    </ul>
                </li>
            </ul>
            <div class="content-slider">
                <div class="content-slider-container">
                    <div class="slider-item">
                        <div class="main-block">
                            <p>Звуковое оборудование</p>
                            <img src="img/guitar.png" alt="Электро-гитара">
                        </div>
                        <div class="four-blocks">
                            <div class="block">
                                <p>Наушники</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                            <div class="block">
                                <p>Колонки</p>
                                <img src="img/music.png" alt="Колонки">
                            </div>
                            <div class="block">
                                <p>Ударные</p>
                                <img src="img/drum.png" alt="Ударные барабаны">
                            </div>
                            <div class="block">
                                <p>Генераторы тумана</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="main-block">
                            <p>Шоу-эффекты</p>
                            <img src="img/drum.png" alt="Ударные барабаны">
                        </div>
                        <div class="four-blocks">
                            <div class="block">
                                <p>Басы</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                            <div class="block">
                                <p>Пластинки</p>
                                <img src="img/music.png" alt="Колонки">
                            </div>
                            <div class="block">
                                <p>Пианино</p>
                                <img src="img/guitar.png" alt="Электро-гитара">
                            </div>
                            <div class="block">
                                <p>Генераторы шума</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="main-block">
                            <p>Автоматика</p>
                            <img src="img/music.png" alt="Колонки">
                        </div>
                        <div class="four-blocks">
                            <div class="block">
                                <p>Подиумы</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                            <div class="block">
                                <p>Лебёдки</p>
                                <img src="img/guitar.png" alt="Электро-гитара">
                            </div>
                            <div class="block">
                                <p>Лампы</p>
                                <img src="img/drum.png" alt="Ударные барабаны">
                            </div>
                            <div class="block">
                                <p>Генераторы пузырей</p>
                                <img src="img/Headphones.png" alt="Наушники">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-buttons">
                    <p class="prev-btn"><</p>
                    <p class="next-btn">></p>
                </div>
                <div class="slider-dots">
                </div>
            </div>
        </div>
        <div class="content-label">
            <h1>МАГАЗИН МУЗЫКАЛЬНЫХ ИНСТРУМЕНТОВ И КОНЦЕРТНОГО ОБОРУДОВАНИЯ</h1>
            <p>Эксперты в области профессионального звука и света</p>
            <article>Комплексные поставки музыкальных инструментов, а также профессионального<br>
                светового, звукового и видео оборудования в любую точку России.</article>
        </div>
        <div class="content-pop">
            <h2>Популярные товары</h2>
            <div class="pop-list">
                @foreach($info as $item)
                <form action="{{ route('add',['id' => $item->id]) }}" class="pop-item" method="post">
                    @csrf
                    <img src="img/{{ $item->img }}" alt="{{ $item->title }}">
                    <p class="pop-article">Артикул: {{ $item->article }}</p>
                    <p class="pop-price">{{ $item->title }}</p>
                    <div class="item-buy">
                        <p>{{ $item->price }} руб</p>
                        <button type="submit"><img src="img/cart.png" alt="Купить {{ $item->title }}"></button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
<div class="navigation">
    <div class="navigation__wrapper">
        @auth()
            <div class="navigation__menu">
                <div class="navigation__menu-button" onclick="classList.toggle('')" data-toggle="menu">
                    <svg class="hb"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 10 10"
                         stroke="#000"
                         stroke-width=".5"
                         fill="rgba(0,0,0,0)"
                         stroke-linecap="round">
                        <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                            <animate dur="0.2s"
                                     attributeName="d"
                                     values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7"
                                     fill="freeze"
                                     begin="start.begin"/>
                            <animate dur="0.2s"
                                     attributeName="d"
                                     values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7"
                                     fill="freeze"
                                     begin="reverse.begin"/>
                        </path>
                        <rect width="10"
                              height="10"
                              stroke="none">
                            <animate dur="2s"
                                     id="reverse"
                                     attributeName="width"
                                     begin="click"/>
                        </rect>
                        <rect width="10"
                              height="10"
                              stroke="none">
                            <animate dur="0.001s"
                                     id="start"
                                     attributeName="width"
                                     values="10;0"
                                     fill="freeze"
                                     begin="click"/>
                            <animate dur="0.001s"
                                     attributeName="width"
                                     values="0;10"
                                     fill="freeze"
                                     begin="reverse.begin"/>
                        </rect>
                    </svg>
                </div>
                <div class="navigation__menu-content" style="display: none" id="menu">
                    <ul>
                        <li class="navigation__menu_item-wrapper">
                            <a href="{{ route('index') }}" class="navigation__menu-item">
                                Главная
                            </a>
                        </li>
                        <li class="navigation__menu_item-wrapper">
                            <a href="{{ route('users.index') }}" class="navigation__menu-item">
                                Пользователи
                            </a>
                        </li>
                        <li class="navigation__menu_item-wrapper">
                            <a href="#" class="navigation__menu-item">
                                Категории
                            </a>
                        </li>
                        <li class="navigation__menu_item-wrapper">
                            <a href="#" class="navigation__menu-item">
                                Теги
                            </a>
                        </li>
                        <li class="navigation__menu_item-wrapper">
                            <a href="#" class="navigation__menu-item">
                                Посты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth

        <div class="navigation__content">
            <div class="navigation__links-wrapper">
                <a href="#" class="navigation__link font-sans font-bold">
                    Blog
                </a>
                <a href="{{ route('index') }}" class="navigation__link font-sans font-bold text-xl">
                    Home
                </a>
                <a href="#" class="navigation__link font-sans font-bold">
                    About Us
                </a>
            </div>
        </div>
        @guest()
            <div>
                <a class="button button-primary" href="{{ route('login') }}">Login</a>
            </div>
        @endguest
        @auth()
            <div class="navigation__profile">
                <div class="cursor-pointer hover:scale-105" data-toggle="userMenu">
                    <img src="{{ asset(auth()->user()->avatar_image) }}" alt="profile_icon">
                </div>
                <div class="navigation__profile_menu" style="display: none" id="userMenu">
                    <ul>
                        <li class="navigation__menu_item-wrapper">
                            <a href="{{ route('users.profile.index', [auth()->user()]) }}" class="navigation__menu-item">
                                Профиль
                            </a>
                        </li>
                        <li class="navigation__menu_item-wrapper">
                            <a href="{{ route('logout') }}" class="navigation__menu-item text-red-500">
                                Выйти
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
</div>
{{ Breadcrumbs::render() }}
@yield('content')
<div class="footer">
    <div class="footer__wrapper">
        Footer
    </div>
</div>
</body>
</html>

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
        <div class="navigation__menu">
            <div class="navigation__menu-button" data-toggle="menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                    <path
                        d="M1 2.75A.75.75 0 0 1 1.75 2h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 2.75Zm0 5A.75.75 0 0 1 1.75 7h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 7.75ZM1.75 12h12.5a.75.75 0 0 1 0 1.5H1.75a.75.75 0 0 1 0-1.5Z"></path>
                </svg>
            </div>
            <div class="navigation__menu-content" style="display: none" id="menu">
                <ul>
                    <li class="navigation__menu_item-wrapper">
                        <a href="/" class="navigation__menu-item">
                            Главная
                        </a>
                    </li>
                    <li class="navigation__menu_item-wrapper">
                        <a href="/users" class="navigation__menu-item">
                            Пользователи
                        </a>
                    </li>
                    <li class="navigation__menu_item-wrapper">
                        <a href="/categories" class="navigation__menu-item">
                            Категории
                        </a>
                    </li>
                    <li class="navigation__menu_item-wrapper">
                        <a href="/tags" class="navigation__menu-item">
                            Теги
                        </a>
                    </li>
                    <li class="navigation__menu_item-wrapper">
                        <a href="/posts" class="navigation__menu-item">
                            Посты
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navigation__content">
            <div class="navigation__links-wrapper">
                <a href="" class="navigation__link font-sans font-bold">
                    Home
                </a>
                <a href="" class="navigation__link font-sans font-bold">
                    Blog
                </a>
                <a href="" class="navigation__link font-sans font-bold">
                    About
                </a>
            </div>
            @auth()
                <a href="/logout" class="button">
                    Logout
                </a>
            @endauth
        </div>
        @guest()
            <div>
                <a href="/login" class="button button-primary">
                    Login
                </a>
            </div>
        @endguest
        @auth()
            <div class="navigation__profile">
                <a href="/users/profile">
                    <img src="{{ asset($user->avatar_image) }}" alt="profile_icon">
                </a>
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

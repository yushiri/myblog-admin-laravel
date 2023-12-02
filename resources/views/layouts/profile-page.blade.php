<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Admin</title>
    <x-global-app-links/>
</head>
<body class="bg-gray-200" x-data="{ menuPadded: false }">
<div class="navigation">
    <div class="navigation__wrapper">
        @auth()
            <x-sidebar/>
        @endauth

        <div class="navigation__content">
            <div class="navigation__links-wrapper">
                <a href="#" class="navigation__link font-bold">
                    Blog
                </a>
                <a href="{{ route('index') }}" class="navigation__link font-bold">
                    Home
                </a>
                <a href="#" class="navigation__link font-bold">
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
            <x-nav-user-menu/>
        @endauth
    </div>
</div>
<div :class="{ 'content__wrapper': true, 'padded': menuPadded }">
    @yield('content')
</div>
<div class="footer">
    <div class="footer__wrapper">
        Footer
    </div>
</div>
</body>
</html>


{{--style="background-image: url('{{ asset(auth()->user()->avatar_image) }}');"--}}

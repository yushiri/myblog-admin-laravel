<!doctype html>
<html lang="en" x-data="{ dark: $persist(false) }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Admin</title>
    <x-global-app-links/>
</head>
<body data-theme-container :class="{'dark': dark}">
<div class="preloader">
    <div class="loader"></div>
</div>
<div class="navigation">
    <div class="navigation__wrapper">
        <x-nav-links/>
        <x-toggle-theme-button/>
        @guest
            <a href="{{ route('login') }}" class="button button-primary">Login</a>
        @endguest
        @auth
            <x-nav-user-menu/>
        @endauth
    </div>
</div>
<div class="content__wrapper">
    <x-breadcrumbs/>
    @yield('content')
</div>
<div class="footer">
    <div class="footer__wrapper">
        Footer
    </div>
</div>
</body>
</html>

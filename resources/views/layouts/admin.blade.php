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
<body data-theme-container :class="{'dark': dark}" x-data="{ menuPadded: $persist(false) }">
<div class="preloader">
    <div class="loader"></div>
</div>
<div class="navigation">
    <div class="navigation__wrapper flex justify-between">
        <x-sidebar/>
        <div class="flex-grow flex space-x-10 justify-end container">
            <x-toggle-theme-button/>
            <x-nav-user-menu/>
        </div>
    </div>
</div>
<div x-data="{ headerOpen: false, avatarOpen: false }"
     :class="{ 'content__wrapper': true, 'padded': menuPadded, 'blurred': headerOpen + avatarOpen }">
    <x-breadcrumbs/>
    @yield('content')
</div>
<div :class="{ 'footer': true, 'padded': menuPadded }">
    <div class="footer__wrapper">
        Footer
    </div>
</div>
</body>
</html>

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
<div class="flex justify-center pt-56">
    <div class="form-container">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-input">
                    <label class="form-input__label" for="name">
                        Имя
                    </label>
                    <input class="form-input__input"
                           name="name"
                           id="name"
                           type="text"
                           placeholder="Имя">
                    @error('name')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-input">
                    <label class="form-input__label" for="surname">
                        Фамилия
                    </label>
                    <input class="form-input__input"
                           name="surname"
                           id="surname"
                           type="text"
                           placeholder="Фамилия">
                    @error('surname')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-input">
                    <label class="form-input__label" for="patronymic">
                        Отчество
                    </label>
                    <input class="form-input__input"
                           name="patronymic"
                           id="patronymic"
                           type="text"
                           placeholder="Отчество">
                    @error('patronymic')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-input">
                    <label class="form-input__label" for="email">
                        Почта
                    </label>
                    <input class="form-input__input"
                           name="email"
                           id="email"
                           type="email"
                           placeholder="Почта">
                    @error('email')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-input">
                    <label class="form-input__label" for="password">
                        Пароль
                    </label>
                    <input class="form-input__input"
                           name="password"
                           id="password"
                           type="password"
                           placeholder="Пароль">
                    @error('password')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-input">
                    <label class="form-input__label" for="password_confirmation">
                        Подтверждение пароля
                    </label>
                    <input class="form-input__input"
                           name="password_confirmation"
                           id="password_confirmation"
                           type="password"
                           placeholder="Подтверждение пароля">
                    @error('password_confirmation')
                    <div class="form-input__error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <input class="button button-primary cursor-pointer" type="submit" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>
</body>
</html>

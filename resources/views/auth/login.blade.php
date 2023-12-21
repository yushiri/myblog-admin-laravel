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
<body>
<div class="flex justify-center pt-56">
    <div class="form-container w-1/4">
        <form action="{{ route('login') }}" method="post">
            @csrf
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
            </div>
            <div class="flex justify-end mt-6">
                <input class="button button-primary cursor-pointer" type="submit" value="Войти">
            </div>
        </form>
    </div>
</div>
</body>
</html>

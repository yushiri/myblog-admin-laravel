@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="flex justify-start mb-6">
            <a href="{{ route('users.index') }}" class="button button-tertiary flex items-center space-x-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                        d="M15.28 5.22a.75.75 0 0 1 0 1.06L9.56 12l5.72 5.72a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215l-6.25-6.25a.75.75 0 0 1 0-1.06l6.25-6.25a.75.75 0 0 1 1.06 0Z"></path>
                </svg>
                <div>
                    Back
                </div>
            </a>
        </div>
        <div class="flex justify-center">
            <div class="form-container">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="name">
                                Name
                            </label>
                            <input class="form-input__input"
                                   name="name"
                                   id="name"
                                   type="text"
                                   value="{{ old('name') }}"
                                   placeholder="Name">
                            @error('name')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label" for="surname">
                                Surname
                            </label>
                            <input class="form-input__input"
                                   name="surname"
                                   id="surname"
                                   type="text"
                                   value="{{ old('surname') }}"
                                   placeholder="Surname">
                            @error('surname')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label" for="patronymic">
                                Patronymic
                            </label>
                            <input class="form-input__input"
                                   name="patronymic"
                                   id="patronymic"
                                   type="text"
                                   value="{{ old('patronymic') }}"
                                   placeholder="Patronymic">
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
                                Email
                            </label>
                            <input class="form-input__input"
                                   name="email"
                                   id="email"
                                   type="email"
                                   value="{{ old('email') }}"
                                   placeholder="Email">
                            @error('email')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label" for="role">
                                Role
                            </label>
                            <select name="role" id="role" class="form__select">
                                <optgroup label="Change role">
                                    @foreach($roles as $role)
                                        <option value="{{ $role['value'] }}" {{ old('role') == $role['value'] ? 'selected' : null }}>
                                            {{ $role['label'] }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('role')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="password">
                                Password
                            </label>
                            <input class="form-input__input"
                                   name="password"
                                   id="password"
                                   type="password"
                                   placeholder="Password">
                            @error('password')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label class="form-input__label" for="password_confirmation">
                                Confirm password
                            </label>
                            <input class="form-input__input"
                                   name="password_confirmation"
                                   id="password_confirmation"
                                   type="password"
                                   placeholder="Confirm password">
                            @error('password_confirmation')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <input class="button button-primary cursor-pointer" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

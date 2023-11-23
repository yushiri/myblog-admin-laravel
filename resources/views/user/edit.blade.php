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
                <form action="{{ route('users.update', compact('user')) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="form-input">
                            <label class="form-input__label" for="name">
                                Name
                            </label>
                            <input class="form-input__input"
                                   name="name"
                                   id="name"
                                   type="text"
                                   value="{{ $user->name }}"
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
                                   value="{{ $user->surname }}"
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
                                   value="{{ $user->patronymic }}"
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
                                   value="{{ $user->email }}"
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
                                <optgroup label="Выбор роли">
                                    <option value="{{ $user->role }}" selected="selected" hidden="hidden">
                                        {{ $user->role == 1 ? 'User' ?? $user->role == 2 : 'Admin' }}
                                    </option>
                                    <option value="1">
                                        User
                                    </option>
                                    <option value="2">
                                        Admin
                                    </option>
                                </optgroup>
                            </select>
                            @error('role')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input class="button button-primary cursor-pointer" type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

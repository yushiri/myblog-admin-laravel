@extends('layouts.admin')

@section('content')
    <div class="content">
        <x-previous-page-button/>
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

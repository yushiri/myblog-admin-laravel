@extends('layouts.app')

@section('content')
    <div class="content">
        <x-previous-page-button/>
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

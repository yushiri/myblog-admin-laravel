@extends('layouts.app')

@section('content')
    <div x-data="{ editOpen: false }" @keydown.esc="headerOpen = false; avatarOpen = false">
        <div x-show="headerOpen"
             class="w-screen h-full fixed z-[60] backdrop-blur-sm bg-opacity-40 bg-neutral-400 bottom-0">
            <div class="form__blurred-file" @click.away="headerOpen = false">
                <form action="{{ route('profile.header.update', ['user' => auth()->user()] ) }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form__blurred-group">
                        <div class="space-x-2">
                            <label class="form__blurred-label" for="header_image">
                                Select image for profile header
                            </label>
                            <input
                                class="form__file-input"
                                name="header_image"
                                id="header_image"
                                type="file"
                                placeholder="Choose a file">
                            @error('header_image')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="submit" value="Submit" class="button button-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div x-show="avatarOpen"
             class="w-screen h-full fixed z-[60] backdrop-blur-sm bg-opacity-40 bg-neutral-400 bottom-0">
            <div class="form__blurred-file" @click.away="avatarOpen = false">
                <form action="{{ route('profile.avatar.update', ['user' => auth()->user()] ) }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form__blurred-group">
                        <div class="space-x-2">
                            <label class="form__blurred-label" for="avatar_image">
                                Select image for profile avatar
                            </label>
                            <input
                                class="form__file-input"
                                name="avatar_image"
                                id="avatar_image"
                                type="file"
                                placeholder="Choose a file">
                            @error('avatar_image')
                            <div class="form-input__error">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="submit" value="Submit" class="button button-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container__profile rounded-lg">
            <div class="bg-white rounded-lg shadow-md pb-8 dark:bg-neutral-700">
                <div class="w-full h-[350px] relative">
                    <div class="flex space-x-4 absolute right-3 top-3 z-50">
                        <div class="{{ auth()->user()->id === $user->id ? '' : 'hidden'}}">
                            <x-user-profile-links/>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3 z-50">
                        <x-previous-page-button/>
                    </div>
                    <div class="w-full h-full rounded-t-lg bg-cover bg-no-repeat bg-center"
                         style="background-image: url('{{ asset(Storage::url($user->header_image)) }}')">
                        <button x-show="editOpen"
                                @click="headerOpen = !headerOpen"
                                class="rounded-t-[5px] w-full h-full flex justify-center items-center opacity-0 hover:opacity-100 outline-0">
                            <svg fill="#cecece"
                                 height="60px"
                                 width="60px"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 487 487" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M308.1,277.95c0,35.7-28.9,64.6-64.6,64.6s-64.6-28.9-64.6-64.6s28.9-64.6,64.6-64.6S308.1,242.25,308.1,277.95z
                                 M440.3,116.05c25.8,0,46.7,20.9,46.7,46.7v122.4v103.8c0,27.5-22.3,49.8-49.8,49.8H49.8c-27.5,0-49.8-22.3-49.8-49.8v-103.9
                                v-122.3l0,0c0-25.8,20.9-46.7,46.7-46.7h93.4l4.4-18.6c6.7-28.8,32.4-49.2,62-49.2h74.1c29.6,0,55.3,20.4,62,49.2l4.3,18.6H440.3z
                                 M97.4,183.45c0-12.9-10.5-23.4-23.4-23.4c-13,0-23.5,10.5-23.5,23.4s10.5,23.4,23.4,23.4C86.9,206.95,97.4,196.45,97.4,183.45z
                                 M358.7,277.95c0-63.6-51.6-115.2-115.2-115.2s-115.2,51.6-115.2,115.2s51.6,115.2,115.2,115.2S358.7,341.55,358.7,277.95z"/>
                            </g>
                        </g>
                    </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col ps-20 -mt-20">
                    <div
                        class="w-[200px] h-[200px] bg-white bg-cover bg-no-repeat border-4 border-white rounded-full z-50 dark:border-neutral-700"
                        style="background-image: url('{{ asset(Storage::url($user->avatar_image)) }}');">
                        <button x-show="editOpen"
                                @click="avatarOpen = !avatarOpen"
                                class="rounded-[100%] w-full h-full flex justify-center items-center opacity-0 hover:opacity-100 outline-0">
                            <svg fill="#cecece"
                                 height="60px"
                                 width="60px"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 487 487" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M308.1,277.95c0,35.7-28.9,64.6-64.6,64.6s-64.6-28.9-64.6-64.6s28.9-64.6,64.6-64.6S308.1,242.25,308.1,277.95z
                                 M440.3,116.05c25.8,0,46.7,20.9,46.7,46.7v122.4v103.8c0,27.5-22.3,49.8-49.8,49.8H49.8c-27.5,0-49.8-22.3-49.8-49.8v-103.9
                                v-122.3l0,0c0-25.8,20.9-46.7,46.7-46.7h93.4l4.4-18.6c6.7-28.8,32.4-49.2,62-49.2h74.1c29.6,0,55.3,20.4,62,49.2l4.3,18.6H440.3z
                                 M97.4,183.45c0-12.9-10.5-23.4-23.4-23.4c-13,0-23.5,10.5-23.5,23.4s10.5,23.4,23.4,23.4C86.9,206.95,97.4,196.45,97.4,183.45z
                                 M358.7,277.95c0-63.6-51.6-115.2-115.2-115.2s-115.2,51.6-115.2,115.2s51.6,115.2,115.2,115.2S358.7,341.55,358.7,277.95z"/>
                            </g>
                        </g>
                    </svg>
                        </button>
                    </div>
                    <div class="flex items-center space-x-2 mt-2">
                        <p class="text-2xl">
                            {{ join(' ', [ucfirst($user->name), ucfirst($user->surname)]) }}
                        </p>
                        <span class="bg-blue-500 rounded-full p-1 {{ $user->role->value === 2 ? '' : 'hidden' }}"
                              title="Administrator">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="text-gray-100 h-2.5 w-2.5"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="4"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                    </div>
                    <p class="text-gray-700 dark:text-gray-50">{{ $user->role->value === 2 ? 'Current administrator' : '' }}</p>
                </div>
                <hr class="my-10 mx-20 dark:border-neutral-800">
                <div class="profile__info items-center px-20">
                    <div class="flex-1 bg-white dark:bg-neutral-700">
                        <div class="w-full flex justify-between items-center mb-8">
                            <h4 x-show="!editOpen" class="text-xl text-gray-900 font-bold dark:text-gray-50">
                                Personal Info
                            </h4>
                            <h4 x-show="editOpen" class="text-xl text-gray-900 font-bold dark:text-gray-50">
                                Edit personal info
                            </h4>
                        </div>
                        <ul x-show="!editOpen" class="mt-2 text-gray-700 dark:bg-neutral-700 dark:text-gray-50">
                            <li class="flex border-y py-2 dark:border-neutral-800">
                                <span class="font-bold w-24">Full name:</span>
                                <span class="text-gray-700 dark:text-gray-50">
                                    {{ $user->full_name }}
                                </span>
                            </li>
                            <li class="flex border-b py-2 dark:border-neutral-800">
                                <span class="font-bold w-24">Joined:</span>
                                <span class="text-gray-700 dark:text-gray-50">
                                    {{ $user->created_at->format('l, d.m.o | H:i:s') }}
                                </span>
                            </li>
                            <li class="flex border-b py-2 dark:border-neutral-800">
                                <span class="font-bold w-24">Mobile:</span>
                                <span class="text-gray-700 dark:text-gray-50">
                                    {{ $user->mobile_number == null ? 'No data' : $user->mobile_number }}
                                </span>
                            </li>
                            <li class="flex border-b py-2 dark:border-neutral-800">
                                <span class="font-bold w-24">Email:</span>
                                <span class="text-gray-700 dark:text-gray-50">
                                    {{ $user->email }}
                                </span>
                            </li>
                            <li class="flex border-b py-2 dark:border-neutral-800">
                                <span class="font-bold w-24">Location:</span>
                                <span class="text-gray-700 dark:text-gray-50">
                                    {{ $user->location == null ? 'No data' : $user->location }}
                                </span>
                            </li>
                        </ul>
                        <div x-show="editOpen" class="form-container">
                            <form action="{{ route('profile.personal.update', compact('user')) }}"
                                  method="post" id="formForUserData">
                                @csrf
                                @method('PATCH')
                                <div class="form-group ">
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
                                        <label class="form-input__label" for="email">
                                            Mobile Number
                                        </label>
                                        <input class="form-input__input"
                                               name="mobile_number"
                                               id="mobile_number"
                                               type="tel"
                                               pattern="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$"
                                               value="{{ $user->mobile_number }}"
                                               placeholder="Mobile Number">
                                        @error('mobile')
                                        <div class="form-input__error">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-input">
                                        <label class="form-input__label" for="role">
                                            Location
                                        </label>
                                        <select id="dadata" name="location">
                                            <option selected>{{ $user->location }}</option>
                                        </select>
                                        @error('location')
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
            </div>
        </div>
    </div>
@endsection

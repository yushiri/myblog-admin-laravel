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
                    Назад
                </div>
            </a>
        </div>
        <div class="card-container">
            <div>
                ID: {{ $user->id }}
            </div>
            <div>
                NAME: {{ $user->name }}
            </div>
            <div>
                SURNAME: {{ $user->surname }}
            </div>
            <div>
                PATRONYMIC: {{ $user->patronymic }}
            </div>
            <div>
                ROLE: {{ $user->role == 1 ? 'guest' ?? $user->role == 2 : 'admin' }}
            </div>
        </div>
    </div>
@endsection

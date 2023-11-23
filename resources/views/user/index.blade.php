@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="flex justify-end mb-6">
            <a href="{{ route('users.create') }}" class="button button-primary">
                Add User
            </a>
        </div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="table__head bg-neutral-600">
                            <tr>
                                <th class="text-left">ID</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Role</th>
                                <th class="text-left">Created Date</th>
                                <th class="text-left">Updated Date</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table__body">
                            @foreach($users as $user)
                                <tr>
                                    <td class="table__body-element font-bold">
                                        {{ $user->id }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $user->full_name }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $user->email }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $user->role->label() }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $user->created_at }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $user->updated_at }}
                                    </td>
                                    <td class="table__body-element text-right font-bold flex justify-end items-center">
                                        <a class="mr-2"
                                           href="{{ route('users.show', [$user]) }}">
                                            <div class="bg-blue-500 hover:bg-blue-600 duration-100 rounded-md p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="white"
                                                     width="20"
                                                     height="20">
                                                    <path d="M15.5 12a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"></path>
                                                    <path d="M12 3.5c3.432 0 6.124 1.534 8.054 3.241 1.926 1.703 3.132 3.61 3.616 4.46a1.6 1.6 0 0 1 0 1.598c-.484.85-1.69 2.757-3.616 4.461-1.929 1.706-4.622 3.24-8.054 3.24-3.432 0-6.124-1.534-8.054-3.24C2.02 15.558.814 13.65.33 12.8a1.6 1.6 0 0 1 0-1.598c.484-.85 1.69-2.757 3.616-4.462C5.875 5.034 8.568 3.5 12 3.5ZM1.633 11.945a.115.115 0 0 0-.017.055c.001.02.006.039.017.056.441.774 1.551 2.527 3.307 4.08C6.691 17.685 9.045 19 12 19c2.955 0 5.31-1.315 7.06-2.864 1.756-1.553 2.866-3.306 3.307-4.08a.111.111 0 0 0 .017-.056.111.111 0 0 0-.017-.056c-.441-.773-1.551-2.527-3.307-4.08C17.309 6.315 14.955 5 12 5 9.045 5 6.69 6.314 4.94 7.865c-1.756 1.552-2.866 3.306-3.307 4.08Z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <a class="mr-2"
                                           href="{{ route('users.edit', [$user]) }}">
                                            <div class="bg-amber-500 hover:bg-amber-600 duration-100 rounded-md p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="white"
                                                     width="20"
                                                     height="20">
                                                    <path d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="{{ route('users.destroy', [$user]) }}"
                                           onclick="return confirm('Удалить пользователя?')">
                                            <div class="bg-red-500 hover:bg-red-800 duration-100 rounded-md p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="white"
                                                     width="20"
                                                     height="20">
                                                    <path d="M5.72 5.72a.75.75 0 0 1 1.06 0L12 10.94l5.22-5.22a.749.749 0 0 1 1.275.326.749.749 0 0 1-.215.734L13.06 12l5.22 5.22a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215L12 13.06l-5.22 5.22a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042L10.94 12 5.72 6.78a.75.75 0 0 1 0-1.06Z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

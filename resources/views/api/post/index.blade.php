@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="flex justify-between">
            <x-previous-page-button/>
            <div class="flex justify-end mb-6">
                <a href="{{ route('posts.create') }}" class="button button-primary">
                    Add Post
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden border border-neutral-300 rounded-lg dark:border-neutral-900">
                        <table class="min-w-full">
                            <thead class="table__head bg-gray-400 dark:bg-neutral-900">
                            <tr>
                                <th class="text-left text-neutral-900 dark:text-gray-50">ID</th>
                                <th class="text-left text-neutral-900 dark:text-gray-50">Title</th>
                                <th class="text-left text-neutral-900 dark:text-gray-50">Created Date</th>
                                <th class="text-left text-neutral-900 dark:text-gray-50">Updated Date</th>
                                <th class="text-right text-neutral-900 dark:text-gray-50">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr class="table__row">
                                    <td class="table__body-element">
                                        {{ $post->id }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $post->title }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $post->created_at }}
                                    </td>
                                    <td class="table__body-element">
                                        {{ $post->updated_at }}
                                    </td>
                                    <td class="table__body-element text-right font-bold flex justify-end items-center">
                                        <a class="mr-2"
                                           href="{{ route('posts.edit', [$post]) }}"
                                           title="Edit Post">
                                            <div class="bg-amber-500 hover:bg-amber-600 duration-100 rounded-md p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="white"
                                                     width="20"
                                                     height="20">
                                                    <path
                                                        d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="{{ route('posts.destroy', [$post]) }}"
                                           title="Delete Post"
                                           onclick="return confirm('Delete post {{ $post->name }}?')">
                                            <div class="bg-red-500 hover:bg-red-800 duration-100 rounded-md p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     fill="white"
                                                     width="20"
                                                     height="20">
                                                    <path
                                                        d="M5.72 5.72a.75.75 0 0 1 1.06 0L12 10.94l5.22-5.22a.749.749 0 0 1 1.275.326.749.749 0 0 1-.215.734L13.06 12l5.22 5.22a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215L12 13.06l-5.22 5.22a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042L10.94 12 5.72 6.78a.75.75 0 0 1 0-1.06Z"></path>
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

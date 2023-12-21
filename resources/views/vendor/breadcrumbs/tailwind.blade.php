@unless ($breadcrumbs->isEmpty())
    <nav class="breadcrumbs">
        <ol class="p-4 rounded flex flex-wrap text-sm text-gray-800">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}" class="text-sm font-normal leading-normal antialiased transition-colors duration-100 hover:text-blue-400 dark:text-gray-50 dark:hover:text-blue-400">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li class="dark:text-gray-50">
                        {{ $breadcrumb->title }}
                    </li>
                @endif

                @unless($loop->last)
                    <li class="text-gray-500 px-2 dark:text-gray-50">
                        /
                    </li>
                @endif

            @endforeach
        </ol>
    </nav>
@endunless

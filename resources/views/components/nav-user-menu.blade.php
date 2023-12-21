<div x-data="{ openSettings: false }" class="navigation__profile z-50">
    <div @click="openSettings = !openSettings"
         class="navigation__profile__avatar">
        <img class="rounded-[100%] list-image-none h-full"
             src="{{ asset(Storage::url(auth()->user()->avatar_image)) }}"
             alt="avatar_image">
    </div>
    <div x-show="openSettings" @click.away="openSettings = false"
         class="menu__wrapper"
         style="display: none;">
        <div class="border-b dark:border-neutral-800">
            <a href="{{ route('profile.index', [auth()->user()]) }}"
               class="menu__link">
                <span class="text-sm text-gray-700 dark:text-gray-50">Your Profile</span>
            </a>
        </div>
        <div>
            <a href="{{ route('logout') }}"
               class="menu__link">
                <span class="text-sm text-red-700 dark:text-red-500">Logout</span>
            </a>
        </div>
    </div>
</div>


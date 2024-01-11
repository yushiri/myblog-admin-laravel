<div x-data="{ openSettings: false }" class="rounded">
    <button @click="openSettings = !openSettings"
            class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-white bg-opacity-50 hover:bg-opacity-30"
            title="Settings">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" color="#000" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
        </svg>
    </button>
    <div x-show="openSettings" @click="openSettings = false"
         class="menu__wrapper w-48 mt-1 me-4"
         style="display: none;">
        <div class="border-b dark:border-neutral-800">
            <div x-show="!editOpen">
                <button class="menu__link"
                        @click="$persist(editOpen = !editOpen)">
                    <span class="text-sm text-gray-700 dark:text-gray-50">Edit Profile</span>
                </button>
            </div>
            <a x-show="editOpen" href="{{ route('profile.show', auth()->user()) }}"
               class="menu__link"
               @click="$persist(editOpen = !editOpen)">
                <span class="text-sm text-gray-700 dark:text-gray-50">Back to Profile</span>
            </a>
        </div>
        <div class="border-b dark:border-neutral-800">
            <a href="{{ route('profile.show', [auth()->user()]) }}"
               class="menu__link">
                <span class="text-sm text-gray-700 dark:text-gray-50">Change password</span>
            </a>
        </div>
        <div>
            <a href="{{ route('profile.show', [auth()->user()]) }}"
               class="menu__link">
                <span class="text-sm text-red-700 dark:text-red-500">Delete Account</span>
            </a>
        </div>
    </div>
</div>

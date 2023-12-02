<div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded pe-4">
    <button @click="openSettings = !openSettings"
            class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-white bg-opacity-50 hover:bg-opacity-30"
            title="Settings">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" color="#000" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
        </svg>
    </button>
    <div x-show="openSettings" @click.away="openSettings = false"
         class="menu__wrapper w-48 mt-1 me-4"
         style="display: none;">
        <div class="border-b">
            <a href="{{ route('users.profile.index', [auth()->user()]) }}" class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                <span class="text-sm text-gray-700">Edit Profile</span>
            </a>
        </div>
        <div class="border-b">
            <a href="{{ route('users.profile.index', [auth()->user()]) }}" class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                <span class="text-sm text-gray-700">Change password</span>
            </a>
        </div>
        <div>
            <a href="{{ route('users.profile.index', [auth()->user()]) }}" class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                <span class="text-sm text-red-700">Delete Account</span>
            </a>
        </div>
    </div>
</div>

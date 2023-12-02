<div class="navigation__menu">
    <div :class="{ 'navigation__menu-button': true, 'active': menuPadded }"
         @click="menuPadded = !menuPadded">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
            <path d="M1 2.75A.75.75 0 0 1 1.75 2h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 2.75Zm0 5A.75.75 0 0 1 1.75 7h12.5a.75.75 0 0 1 0 1.5H1.75A.75.75 0 0 1 1 7.75ZM1.75 12h12.5a.75.75 0 0 1 0 1.5H1.75a.75.75 0 0 1 0-1.5Z"></path>
        </svg>
    </div>
    <div :class="{ 'navigation__menu-content': true, 'active': menuPadded }">
        <a href="{{ route('index') }}">
            <div class="sidebar__link">
                <span class="text-gray-700 ps-1">Home Page</span>
            </div>
        </a>
        <hr class="my-1.5">
        <button class="w-full" x-data="{ open: $persist(false) }">
            <div @click="open = !open" class="sidebar__link">
                <div :class="{ 'sidebar__link-list': true, 'opened': open }">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                        <path d="M4.7 10c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1L6.9 6 4.2 3.3c-.3-.3-.3-.8 0-1.1.3-.3.8-.3 1.1 0l3.3 3.2c.3.3.3.8 0 1.1L5.3 9.7c-.2.2-.4.3-.6.3Z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 ps-1">Users</span>
            </div>
            <div x-show="open" class="p-1 ps-14">
                <ul class="text-gray-500 text-start">
                    <a href="{{ route('users.index') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Users List
                        </li>
                    </a>
                    <a href="{{ route('users.create') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Add User
                        </li>
                    </a>
                </ul>
            </div>
        </button>
        <button class="w-full" x-data="{ open: $persist(false) }">
            <div @click="open = !open" class="sidebar__link">
                <div :class="{ 'sidebar__link-list': true, 'opened': open }">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                        <path
                                d="M4.7 10c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1L6.9 6 4.2 3.3c-.3-.3-.3-.8 0-1.1.3-.3.8-.3 1.1 0l3.3 3.2c.3.3.3.8 0 1.1L5.3 9.7c-.2.2-.4.3-.6.3Z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 ps-1">Categories</span>
            </div>
            <div x-show="open" class="p-1 ps-14">
                <ul class="text-gray-500 text-start">
                    <a href="{{ route('users.index') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Categories List
                        </li>
                    </a>
                    <a href="{{ route('users.create') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Add new Category
                        </li>
                    </a>
                </ul>
            </div>
        </button>
        <button class="w-full" x-data="{ open: $persist(false) }">
            <div @click="open = !open" class="sidebar__link">
                <div :class="{ 'sidebar__link-list': true, 'opened': open }">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                        <path
                                d="M4.7 10c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1L6.9 6 4.2 3.3c-.3-.3-.3-.8 0-1.1.3-.3.8-.3 1.1 0l3.3 3.2c.3.3.3.8 0 1.1L5.3 9.7c-.2.2-.4.3-.6.3Z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 ps-1">Tags</span>
            </div>
            <div x-show="open" class="p-1 ps-14">
                <ul class="text-gray-500 text-start">
                    <a href="{{ route('users.index') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Tags List
                        </li>
                    </a>
                    <a href="{{ route('users.create') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Add Tag
                        </li>
                    </a>
                </ul>
            </div>
        </button>
        <button class="w-full" x-data="{ open: $persist(false) }">
            <div @click="open = !open" class="sidebar__link">
                <div :class="{ 'sidebar__link-list': true, 'opened': open }">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12">
                        <path
                                d="M4.7 10c-.2 0-.4-.1-.5-.2-.3-.3-.3-.8 0-1.1L6.9 6 4.2 3.3c-.3-.3-.3-.8 0-1.1.3-.3.8-.3 1.1 0l3.3 3.2c.3.3.3.8 0 1.1L5.3 9.7c-.2.2-.4.3-.6.3Z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 ps-1">Posts</span>
            </div>
            <div x-show="open" class="p-1 ps-14">
                <ul class="text-gray-500 text-start">
                    <a href="{{ route('users.index') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Posts List
                        </li>
                    </a>
                    <a href="{{ route('users.create') }}">
                        <li class="px-1 py-0.5 rounded-md hover:text-gray-700 hover:bg-gray-100">
                            Add a new Post
                        </li>
                    </a>
                </ul>
            </div>
        </button>
        <hr class="my-1.5">
        <a href="#">
            <div class="sidebar__link">
                <span class="text-gray-700 ps-1">Blog</span>
            </div>
        </a>
        <a href="#">
            <div class="sidebar__link">
                <span class="text-gray-700 ps-1">About Us</span>
            </div>
        </a>
        <hr class="my-1.5">
        <a href="{{ route('users.profile.index', [auth()->user()]) }}">
            <div class="sidebar__link">
                <span class="text-gray-700 ps-1">Profile</span>
            </div>
        </a>
        <hr class="my-1.5">
        <a href="{{ route('logout') }}">
            <div class="sidebar__link">
                <span class="text-red-700 ps-1">Logout</span>
            </div>
        </a>
    </div>
</div>


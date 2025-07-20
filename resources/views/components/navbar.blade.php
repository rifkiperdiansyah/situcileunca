<nav class="bg-gray-100" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo dan Link -->
            <div class="flex items-center">
                <a href="/" class="shrink-0">
                    <img class="h-12 w-auto" src="/img/logo.png" alt="Your Company" />
                </a>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/tiket" :active="request()->is('tiket')">Beli Tiket</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Dropdown jika login -->
            <div class="hidden md:block">
                <ul class="navbar-nav flex items-center space-x-4">
                    @auth
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ auth()->user()->role == 'admin' ? '/dashboard' : '/dashboard-user' }}">
                                        <i class="bi bi-justify-left"></i> Dashboard
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="/login" class="text-sm font-medium text-gray-900">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                    aria-controls="mobile-menu" :aria-expanded="isOpen.toString()">
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="h-6 w-6 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" x-cloak class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/tiket" :active="request()->is('tiket')">Beli Tiket</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        </div>
        @auth
            <div class="border-t border-gray-200 pt-4 pb-3 px-2">
                <div class="text-sm font-medium text-gray-700">Hallo, {{ auth()->user()->name }}</div>
                <div class="mt-3 space-y-1">
                    <a href="{{ auth()->user()->is_admin ? '/dashboard' : '/dashboard-user' }}"
                        class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-200 rounded-md">Dashboard</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-200 rounded-md">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="border-t border-gray-200 pt-4 pb-3 px-2">
                <a href="/login" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-200 rounded-md">
                    Login
                </a>
            </div>
        @endauth
    </div>
</nav>

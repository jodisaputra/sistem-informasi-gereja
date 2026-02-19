<header class="sticky top-0 z-50 w-full border-b border-white/10 bg-white/80 backdrop-blur-md px-6 md:px-20 py-4"
    x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto flex max-w-[1280px] items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white">
                <span class="material-symbols-outlined">church</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-[#111418]">Gereja Immanuel</h2>
        </div>
        <nav class="hidden lg:flex items-center gap-8">
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Ministries</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Sermons</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Events</a>
        </nav>
        <div class="flex items-center gap-3">
            <a href="#"
                class="flex items-center gap-2 rounded-lg bg-primary px-5 py-2 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                <span class="material-symbols-outlined text-[20px]">volunteer_activism</span>
                <span>Give</span>
            </a>

            @auth
                {{-- Logged In View --}}
                <div class="relative flex items-center gap-3 ml-2 pl-4 border-l border-gray-200 dark:border-white/10"
                    x-data="{ open: false }" @click.outside="open = false">
                    <button @click="open = !open" class="flex items-center gap-2 group cursor-pointer">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-100 dark:bg-white/10 overflow-hidden border border-gray-200 dark:border-white/20">
                            <span class="material-symbols-outlined text-gray-600 dark:text-gray-300">person</span>
                        </div>
                        <div class="hidden md:flex items-center gap-1">
                            <span
                                class="text-sm font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">{{ Auth::user()->name }}</span>
                            <span class="material-symbols-outlined text-sm text-gray-400 transition-transform duration-200"
                                :class="{ 'rotate-180': open }">keyboard_arrow_down</span>
                        </div>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 top-full mt-2 w-56 rounded-xl bg-white dark:bg-[#1c2631] border border-gray-100 dark:border-white/10 shadow-xl overflow-hidden py-1 z-[60]"
                        style="display: none;">
                        <a class="dropdown-item text-gray-700 dark:text-gray-200" href="#dashboard">
                            <span class="material-symbols-outlined text-xl opacity-70">dashboard</span>
                            My Dashboard
                        </a>
                        <a class="dropdown-item text-gray-700 dark:text-gray-200" href="{{ route('profile.edit') }}">
                            <span class="material-symbols-outlined text-xl opacity-70">person_edit</span>
                            Edit Profile
                        </a>
                        <div class="my-1 border-t border-gray-100 dark:border-white/5"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 cursor-pointer"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <span class="material-symbols-outlined text-xl">logout</span>
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            @else
                {{-- Guest View --}}
                <div class="flex items-center gap-2 ml-2 pl-4 border-l border-gray-200 dark:border-white/10">
                    <a href="{{ route('login') }}"
                        class="flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-5 py-2 text-sm font-bold text-[#111418] hover:border-primary hover:text-primary hover:bg-gray-50 transition-all dark:bg-white/5 dark:border-white/10 dark:text-white dark:hover:bg-white/10">
                        <span class="material-symbols-outlined text-[20px]">login</span>
                        <span>Login</span>
                    </a>
                </div>
            @endauth

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-[#111418]">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden border-t border-gray-100 bg-white"
        style="display: none;">
        <nav class="flex flex-col p-4 space-y-4">
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Ministries</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Sermons</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Events</a>
            <div class="pt-4 border-t border-gray-100">
                <p class="text-xs font-bold text-gray-500 uppercase mb-2">My Account</p>
                <a class="flex items-center gap-2 py-2 text-sm font-medium hover:text-primary transition-colors"
                    href="#dashboard">
                    <span class="material-symbols-outlined text-lg">dashboard</span> Dashboard
                </a>
                <a class="flex items-center gap-2 py-2 text-sm font-medium hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-lg">logout</span> Logout
                </a>
            </div>
        </nav>
    </div>
</header>
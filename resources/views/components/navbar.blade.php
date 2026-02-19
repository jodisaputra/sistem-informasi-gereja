<header
    class="sticky top-0 z-50 w-full border-b border-white/10 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 md:px-20 py-4"
    x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto flex max-w-[1280px] items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white">
                <span class="material-symbols-outlined">church</span>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-[#111418] dark:text-white">Gereja Immanuel</h2>
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
                class="flex items-center justify-center rounded-lg bg-primary px-5 py-2 text-sm font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                <span>Give</span>
            </a>

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
                            class="text-sm font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">Andrew</span>
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
                    <a class="dropdown-item text-gray-700 dark:text-gray-200" href="#">
                        <span class="material-symbols-outlined text-xl opacity-70">person_edit</span>
                        Edit Profile
                    </a>
                    <a class="dropdown-item text-gray-700 dark:text-gray-200" href="#">
                        <span class="material-symbols-outlined text-xl opacity-70">play_circle</span>
                        Sermon Playlist
                    </a>
                    <div class="my-1 border-t border-gray-100 dark:border-white/5"></div>
                    <a class="dropdown-item text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10" href="#">
                        <span class="material-symbols-outlined text-xl">logout</span>
                        Logout
                    </a>
                </div>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-[#111418] dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden border-t border-gray-100 dark:border-white/10 bg-white dark:bg-[#1c2631]"
        style="display: none;">
        <nav class="flex flex-col p-4 space-y-4">
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Home</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">About</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Ministries</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Sermons</a>
            <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Events</a>
            <div class="pt-4 border-t border-gray-100 dark:border-white/10">
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
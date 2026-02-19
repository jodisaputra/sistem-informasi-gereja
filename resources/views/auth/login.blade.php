@extends('layouts.guest')
@section('title', 'Masuk | Church Connect')

@section('content')
    <div class="flex min-h-screen w-full flex-col lg:flex-row overflow-hidden">
        {{-- Left Side - Image & Quote --}}
        <div class="relative hidden lg:flex lg:w-1/2 xl:w-3/5 bg-primary overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 hover:scale-105"
                style="background-image: url('{{ asset('assets/images/login_bg.jpg') }}');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
            <div class="relative z-10 flex flex-col justify-between h-full w-full p-12 xl:p-20">
                <div class="flex items-center gap-3 text-white">
                    <div class="size-8">
                        <span class="material-symbols-outlined text-3xl">church</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight">Church Connect</span>
                </div>
                <div class="max-w-xl">
                    <h1 class="font-serif text-4xl xl:text-6xl text-white leading-tight italic">
                        "Selamat datang di rumah. Mari bertumbuh bersama dalam iman."
                    </h1>
                    <div class="mt-8 w-20 h-1 bg-primary"></div>
                    <p class="mt-6 text-white/80 text-lg font-light tracking-wide">
                        Temukan komunitas, perkaya rohani, dan jalin silaturahmi di setiap langkah perjalanan iman Anda.
                    </p>
                </div>
                <div class="text-white/60 text-sm">
                    © {{ date('Y') }} Church Connect Media. Terpujilah Tuhan.
                </div>
            </div>
        </div>

        {{-- Right Side - Form --}}
        <div
            class="flex flex-1 flex-col justify-center items-center bg-background-light dark:bg-background-dark px-6 py-12 lg:px-20">
            {{-- Mobile Logo --}}
            <div class="flex items-center gap-3 mb-10 lg:hidden text-primary">
                <div class="size-8">
                    <span class="material-symbols-outlined text-3xl">church</span>
                </div>
                <h2 class="text-slate-900 dark:text-slate-100 text-2xl font-bold">Church Connect</h2>
            </div>

            <div
                class="w-full max-w-[520px] bg-white dark:bg-white/5 p-8 lg:p-12 rounded-2xl shadow-[0_8px_40px_rgb(0,0,0,0.06)] border border-slate-100 dark:border-white/10">
                <div class="mb-10 text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">Masuk ke Akun</h2>
                    <p class="mt-3 text-slate-500 dark:text-slate-400 font-normal">Silakan masukkan detail akun Anda untuk
                        melanjutkan ibadah digital.</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    {{-- Email Address --}}
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1"
                            for="email">Email</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                            <input
                                class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                id="email" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" placeholder="nama@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Password --}}
                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                for="password">Password</label>
                            @if (Route::has('password.request'))
                                <a class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors"
                                    href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>
                        <div class="relative group" x-data="{ show: false }">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                            <input
                                class="block w-full pl-11 pr-12 py-3.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-slate-900 dark:text-white placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                id="password" :type="show ? 'text' : 'password'" name="password" required
                                autocomplete="current-password" placeholder="Masukkan password Anda" />
                            <button type="button" @click="show = !show"
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    x-text="show ? 'visibility_off' : 'visibility'"></span>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center">
                        <input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary" id="remember_me"
                            type="checkbox" name="remember">
                        <label class="ml-2 block text-sm text-slate-600 dark:text-slate-400" for="remember_me">Biarkan saya
                            tetap masuk</label>
                    </div>

                    <button
                        class="w-full flex justify-center items-center gap-2 py-4 px-4 bg-primary hover:bg-primary/90 text-white text-base font-bold rounded-xl shadow-lg shadow-primary/25 transition-all active:scale-[0.98]"
                        type="submit">
                        Masuk Sekarang
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-slate-100 dark:border-white/10 text-center">
                    <p class="text-slate-600 dark:text-slate-400">
                        Belum punya akun?
                        <a class="text-primary font-bold hover:underline decoration-2 underline-offset-4 ml-1"
                            href="{{ route('register') }}">Daftar Akun Baru</a>
                    </p>
                </div>
            </div>

            {{-- Footer Links --}}
            <div class="mt-12 text-center lg:text-left w-full max-w-[520px]">
                <div class="flex flex-wrap justify-center lg:justify-start gap-6 text-sm text-slate-400">
                    <a class="hover:text-primary transition-colors" href="#">Bantuan</a>
                    <a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                    <a class="hover:text-primary transition-colors" href="#">Ketentuan Layanan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
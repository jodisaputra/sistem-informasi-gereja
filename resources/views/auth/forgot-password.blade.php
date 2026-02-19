@extends('layouts.guest')
@section('title', 'Lupa Password | Church Connect')

@section('content')
    <div class="flex min-h-screen w-full flex-col lg:flex-row overflow-hidden">
        {{-- Left Side - Image & Quote (Reused from Login) --}}
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
                        "Tuhan adalah terangku dan keselamatanku, kepada siapakah aku harus takut?"
                    </h1>
                    <div class="mt-8 w-20 h-1 bg-primary"></div>
                    <p class="mt-6 text-white/80 text-lg font-light tracking-wide">
                        Jangan khawatir, kami akan membantu Anda memulihkan akses ke akun Anda.
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
                <div class="mb-8 text-center lg:text-left">
                    <div
                        class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary mb-6">
                        <span class="material-symbols-outlined text-3xl">lock_reset</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">Lupa Password?</h2>
                    <p class="mt-3 text-slate-500 dark:text-slate-400 font-normal">
                        Masukan alamat email Anda dan kami akan mengirimkan link untuk mereset password Anda.
                    </p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
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
                                placeholder="nama@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <button
                        class="w-full flex justify-center items-center gap-2 py-4 px-4 bg-primary hover:bg-primary/90 text-white text-base font-bold rounded-xl shadow-lg shadow-primary/25 transition-all active:scale-[0.98]"
                        type="submit">
                        Kirim Link Reset Password
                        <span class="material-symbols-outlined text-[18px]">send</span>
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-slate-100 dark:border-white/10 text-center">
                    <a class="inline-flex items-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors font-semibold"
                        href="{{ route('login') }}">
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        Kembali ke Halaman Login
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
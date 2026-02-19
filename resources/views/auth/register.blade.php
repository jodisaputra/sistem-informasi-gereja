@extends('layouts.guest')
@section('title', 'Daftar Akun Baru | Church Connect')

@section('content')
    <div class="flex min-h-screen w-full flex-col lg:flex-row overflow-hidden">
        {{-- Left Side - Image & Testimonial --}}
        <div class="relative hidden lg:flex lg:w-1/2 flex-col justify-between p-12 bg-primary overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-primary/40 mix-blend-multiply z-10"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-primary/20 z-20"></div>
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/register_bg.jpg') }}');"></div>
            </div>

            <div class="relative z-30 flex items-center gap-3">
                <div class="bg-white/20 p-2 rounded-lg backdrop-blur-md">
                    <span class="material-symbols-outlined text-white text-3xl">church</span>
                </div>
                <h1 class="text-white text-2xl font-bold tracking-tight">Church Connect</h1>
            </div>

            <div class="relative z-30 max-w-md">
                <h2 class="text-4xl font-extrabold text-white leading-tight mb-6">
                    Temukan Komunitas yang Mendukung Pertumbuhan Iman Anda
                </h2>
                <p class="text-white/90 text-lg leading-relaxed mb-8">
                    Bergabunglah dengan ribuan jemaat lainnya untuk tetap terhubung dengan pelayanan, kegiatan, dan kabar
                    terbaru dari gereja kami.
                </p>
                <div class="flex items-center gap-4">
                    <div class="flex -space-x-3">
                        <img alt="Member" class="size-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('assets/images/avatar_1.jpg') }}" />
                        <img alt="Member" class="size-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('assets/images/avatar_2.jpg') }}" />
                        <img alt="Member" class="size-10 rounded-full border-2 border-white object-cover"
                            src="{{ asset('assets/images/avatar_3.jpg') }}" />
                        <div
                            class="size-10 rounded-full border-2 border-white bg-primary flex items-center justify-center text-[10px] font-bold text-white">
                            500+</div>
                    </div>
                    <p class="text-white/80 text-sm font-medium">Sudah bergabung minggu ini</p>
                </div>
            </div>

            <div class="relative z-30 text-white/60 text-sm">
                © {{ date('Y') }} Church Connect Digital Ministry. All rights reserved.
            </div>
        </div>

        {{-- Right Side - Form --}}
        <div
            class="flex flex-1 flex-col items-center justify-center px-6 py-12 lg:px-24 bg-background-light dark:bg-background-dark overflow-y-auto">
            <div class="w-full max-w-[480px]">
                {{-- Mobile Logo --}}
                <div class="lg:hidden flex items-center gap-3 mb-8">
                    <div class="bg-primary p-2 rounded-lg">
                        <span class="material-symbols-outlined text-white">church</span>
                    </div>
                    <h1 class="text-xl font-bold text-slate-900 dark:text-white">Church Connect</h1>
                </div>

                <div class="mb-10">
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-2 tracking-tight">Daftar Akun Baru</h2>
                    <p class="text-slate-500 dark:text-slate-400">Lengkapi data di bawah untuk menjadi bagian dari komunitas
                        kami.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    {{-- Name --}}
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1" for="name">Nama
                            Lengkap</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">person</span>
                            <input
                                class="w-full pl-12 pr-4 py-3.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 text-slate-900 dark:text-white"
                                id="name" type="text" name="name" value="{{ old('name') }}" autofocus autocomplete="name"
                                placeholder="Masukkan nama lengkap Anda" />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Email --}}
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1"
                            for="email">Email</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">mail</span>
                            <input
                                class="w-full pl-12 pr-4 py-3.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 text-slate-900 dark:text-white"
                                id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="username"
                                placeholder="nama@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- WhatsApp --}}
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1" for="whatsapp">Nomor
                            WhatsApp</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">call</span>
                            <input
                                class="w-full pl-12 pr-4 py-3.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 text-slate-900 dark:text-white"
                                id="whatsapp" type="text" name="whatsapp" value="{{ old('whatsapp') }}"
                                placeholder="0812xxxxxxx" />
                        </div>
                        <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Password --}}
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1"
                                for="password">Password</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">lock</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 text-slate-900 dark:text-white"
                                    id="password" type="password" name="password" autocomplete="new-password"
                                    placeholder="••••••••" />
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        {{-- Confirm Password --}}
                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1"
                                for="password_confirmation">Konfirmasi</label>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">lock_reset</span>
                                <input
                                    class="w-full pl-12 pr-4 py-3.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 text-slate-900 dark:text-white"
                                    id="password_confirmation" type="password" name="password_confirmation"
                                    autocomplete="new-password" placeholder="••••••••" />
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    {{-- Terms --}}
                    <div class="flex items-start gap-3 py-2">
                        <div class="flex h-5 items-center">
                            <input
                                class="h-5 w-5 rounded border-slate-300 text-primary focus:ring-primary transition-all cursor-pointer"
                                id="terms" name="terms" type="checkbox" {{ old('terms') ? 'checked' : '' }} />
                        </div>
                        <div class="text-sm leading-5">
                            <label class="font-medium text-slate-700 dark:text-slate-300 cursor-pointer" for="terms">
                                Saya setuju dengan <a class="text-primary hover:underline font-bold" href="#">Ketentuan
                                    Layanan</a> dan <a class="text-primary hover:underline font-bold" href="#">Kebijakan
                                    Privasi</a>.
                            </label>
                        </div>
                    </div>

                    <button
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/25 transition-all flex items-center justify-center gap-2 group"
                        type="submit">
                        Daftar Sekarang
                        <span
                            class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </form>

                <p class="mt-10 text-center text-sm text-slate-500 dark:text-slate-400">
                    Sudah punya akun?
                    <a class="font-bold text-primary hover:underline ml-1" href="{{ route('login') }}">Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>
@endsection
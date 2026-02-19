@extends('layouts.church')
@section('title', 'Keamanan Akun | Church Connect')

@section('content')
    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="flex mb-8 text-sm text-slate-500 dark:text-slate-400">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a class="hover:text-primary transition-colors" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
                        <span class="font-medium text-slate-900 dark:text-white">Keamanan Akun</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            {{-- Sidebar --}}
            <aside class="lg:col-span-3">
                <div
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-4 border-b border-slate-100 dark:border-slate-800">
                        <h3 class="font-bold text-slate-900 dark:text-white">Pengaturan Akun</h3>
                    </div>
                    <nav class="flex flex-col">
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all border-r-4 border-transparent"
                            href="{{ route('profile.edit') }}">
                            <span class="material-symbols-outlined text-xl">person</span>
                            Informasi Pribadi
                        </a>
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium active-sidebar-item transition-all bg-primary/5 text-primary border-r-4 border-primary"
                            href="{{ route('profile.security') }}">
                            <span class="material-symbols-outlined text-xl">security</span>
                            Keamanan Akun
                        </a>
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all border-r-4 border-transparent"
                            href="{{ route('profile.history') }}">
                            <span class="material-symbols-outlined text-xl">history_edu</span>
                            Riwayat Persembahan
                        </a>
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all border-r-4 border-transparent"
                            href="{{ route('profile.notifications') }}">
                            <span class="material-symbols-outlined text-xl">notifications_active</span>
                            Pengaturan Notifikasi
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center gap-3 px-4 py-4 text-sm font-medium text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 transition-all border-r-4 border-transparent mt-4">
                                <span class="material-symbols-outlined text-xl">logout</span>
                                Keluar Akun
                            </button>
                        </form>
                    </nav>
                </div>
            </aside>

            {{-- Main Content --}}
            <div class="lg:col-span-9 space-y-6">
                <section
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                        <h2 class="text-xl font-bold text-slate-900 dark:text-white">Keamanan Akun</h2>
                        <p class="text-sm text-slate-500 mt-1">Kelola kata sandi dan keamanan akses akun Anda.</p>
                    </div>

                    <div class="p-6 space-y-10">
                        {{-- Change Password Form --}}
                        <div>
                            <h3 class="text-base font-semibold text-slate-900 dark:text-white mb-4">Ganti Kata Sandi</h3>
                            <form method="post" action="{{ route('password.update') }}" class="space-y-4 max-w-xl">
                                @csrf
                                @method('put')

                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                        for="current_password">Kata Sandi Saat Ini</label>
                                    <input
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="current_password" name="current_password" type="password" placeholder="••••••••"
                                        autocomplete="current-password" />
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                            for="password">Kata Sandi Baru</label>
                                        <input
                                            class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                            id="password" name="password" type="password" placeholder="••••••••"
                                            autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password')" />
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                            for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
                                        <input
                                            class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                            id="password_confirmation" name="password_confirmation" type="password"
                                            placeholder="••••••••" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                                    </div>
                                </div>

                                <div class="pt-2 flex items-center gap-4">
                                    <button type="submit"
                                        class="px-6 py-2 text-sm font-bold text-white bg-primary rounded-lg shadow-md shadow-primary/20 hover:bg-[#004494] transition-all">Perbarui
                                        Kata Sandi</button>
                                    @if (session('status') === 'password-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            class="text-sm text-green-600 dark:text-green-400 font-medium">
                                            {{ __('Tersimpan.') }}
                                        </p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        {{-- 2FA (Static UI for now) --}}
                        <div class="pt-6 border-t border-slate-100 dark:border-slate-800">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-base font-semibold text-slate-900 dark:text-white">Verifikasi Dua Faktor
                                        (2FA)</h3>
                                    <p class="text-sm text-slate-500 mt-1">Tambahkan lapisan keamanan ekstra pada akun Anda.
                                    </p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input class="sr-only peer" type="checkbox" value="" />
                                    <div
                                        class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                    </div>
                                </label>
                            </div>
                        </div>

                    </div>
                </section>

                {{-- Security Info --}}
                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10 flex gap-4">
                    <span class="material-symbols-outlined text-primary">verified_user</span>
                    <div>
                        <p class="text-sm font-semibold text-primary">Keamanan Akun Terjamin</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                            Kami menggunakan enkripsi standar industri untuk melindungi data Anda. Pastikan untuk selalu
                            menggunakan kata sandi yang kuat dan unik untuk keamanan maksimal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
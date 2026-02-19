@extends('layouts.church')
@section('title', 'Pengaturan Notifikasi | Church Connect')

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
                        <span class="font-medium text-slate-900 dark:text-white">Pengaturan Notifikasi</span>
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
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all border-r-4 border-transparent"
                            href="{{ route('profile.security') }}">
                            <span class="material-symbols-outlined text-xl">security</span>
                            Keamanan Akun
                        </a>
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all border-r-4 border-transparent"
                            href="{{ route('profile.history') }}">
                            <span class="material-symbols-outlined text-xl">history_edu</span>
                            Riwayat Persembahan
                        </a>
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium active-sidebar-item transition-all bg-primary/5 text-primary border-r-4 border-primary"
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
                        <h2 class="text-xl font-bold text-slate-900 dark:text-white">Pengaturan Notifikasi</h2>
                        <p class="text-sm text-slate-500 mt-1">Kelola bagaimana Anda menerima pembaruan dari gereja.</p>
                    </div>

                    <div class="p-6 space-y-8">
                        {{-- Email Notification --}}
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex gap-4">
                                <div class="mt-1 bg-blue-50 dark:bg-blue-900/20 p-2 rounded-lg">
                                    <span class="material-symbols-outlined text-primary">mail</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Email Notifikasi</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                        Dapatkan newsletter mingguan, update acara gereja, dan pengumuman penting langsung
                                        di inbox Anda.
                                    </p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer mt-1">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

                        {{-- WhatsApp Notification --}}
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex gap-4">
                                <div class="mt-1 bg-green-50 dark:bg-green-900/20 p-2 rounded-lg">
                                    <span class="material-symbols-outlined text-green-600">chat</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">WhatsApp Notifikasi</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                        Terima pengingat jadwal ibadah, permohonan doa mendesak, dan koordinasi pelayanan
                                        melalui WhatsApp.
                                    </p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer mt-1">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                        <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

                        {{-- Browser Notification --}}
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex gap-4">
                                <div class="mt-1 bg-amber-50 dark:bg-amber-900/20 p-2 rounded-lg">
                                    <span class="material-symbols-outlined text-amber-600">notifications_active</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Browser Notifications</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                        Aktifkan notifikasi desktop untuk pembaruan cepat saat Anda sedang menggunakan
                                        browser.
                                    </p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer mt-1">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                                </div>
                            </label>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div
                        class="p-6 bg-slate-50 dark:bg-slate-800/50 flex flex-col sm:flex-row items-center justify-end gap-4 rounded-b-xl border-t border-slate-100 dark:border-slate-800">
                        <button
                            class="w-full sm:w-auto px-6 py-2.5 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                            Batal
                        </button>
                        <button
                            class="w-full sm:w-auto px-8 py-2.5 text-sm font-bold text-white bg-primary rounded-lg shadow-md shadow-primary/20 hover:bg-[#004494] hover:-translate-y-0.5 active:translate-y-0 transition-all">
                            Simpan Pengaturan
                        </button>
                    </div>
                </section>

                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10 flex gap-4">
                    <span class="material-symbols-outlined text-primary">info</span>
                    <div>
                        <p class="text-sm font-semibold text-primary">Preferensi Notifikasi</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                            Anda dapat mengubah preferensi ini kapan saja. Untuk berhenti berlangganan sepenuhnya dari semua
                            komunikasi, silakan hubungi tim administrasi kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
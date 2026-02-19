@extends('layouts.church')
@section('title', 'Riwayat Persembahan | Church Connect')

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
                        <span class="font-medium text-slate-900 dark:text-white">Riwayat Persembahan</span>
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
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium active-sidebar-item transition-all bg-primary/5 text-primary border-r-4 border-primary"
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
                    <div class="p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <h2 class="text-xl font-bold text-slate-900 dark:text-white">Riwayat Persembahan</h2>
                            <p class="text-sm text-slate-500 mt-1">Lihat dan unduh bukti transaksi persembahan Anda.</p>
                        </div>
                        <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl p-4 min-w-[240px]">
                            <p class="text-[10px] uppercase tracking-wider font-bold text-primary mb-1">Total Persembahan
                                Tahun Ini</p>
                            <div class="flex items-baseline gap-1">
                                <span class="text-xs font-semibold text-slate-600">Rp</span>
                                <span class="text-2xl font-black text-slate-900 dark:text-white">12.450.000</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="text-[11px] font-bold text-slate-500 uppercase">Dari Tanggal</label>
                                    <input
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary"
                                        type="date" />
                                </div>
                                <div class="space-y-1.5">
                                    <label class="text-[11px] font-bold text-slate-500 uppercase">Sampai Tanggal</label>
                                    <input
                                        class="w-full text-sm rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary"
                                        type="date" />
                                </div>
                            </div>
                            <div class="flex items-end">
                                <button
                                    class="w-full md:w-auto px-6 py-2 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-all text-sm font-semibold flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-lg">filter_list</span>
                                    Filter Data
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Table (Static for now) --}}
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead
                                class="bg-slate-50/50 dark:bg-slate-800/30 text-slate-500 font-bold uppercase text-[10px] tracking-widest border-b border-slate-100 dark:border-slate-800">
                                <tr>
                                    <th class="px-6 py-4">Tanggal</th>
                                    <th class="px-6 py-4">Jenis Dana</th>
                                    <th class="px-6 py-4">Jumlah</th>
                                    <th class="px-6 py-4">Metode Bayar</th>
                                    <th class="px-6 py-4 text-center">Kwitansi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                    <td class="px-6 py-4 font-medium">12 Mei 2024</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">Umum</span>
                                    </td>
                                    <td class="px-6 py-4 font-semibold">Rp 500.000</td>
                                    <td class="px-6 py-4 text-slate-500">Transfer BCA</td>
                                    <td class="px-6 py-4 text-center">
                                        <button class="text-primary hover:text-[#004494] transition-colors"
                                            title="Download Kwitansi">
                                            <span class="material-symbols-outlined">picture_as_pdf</span>
                                        </button>
                                    </td>
                                </tr>
                                {{-- More rows would go here dynamically --}}
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination (Static) --}}
                    <div
                        class="p-4 border-t border-slate-100 dark:border-slate-800 bg-slate-50/30 dark:bg-slate-800/10 flex justify-between items-center">
                        <p class="text-xs text-slate-500">Menampilkan 1-4 dari 48 transaksi</p>
                        <div class="flex gap-1">
                            <button class="p-1.5 rounded-md hover:bg-slate-200 dark:hover:bg-slate-700 disabled:opacity-30"
                                disabled>
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button class="px-3 py-1 text-xs font-bold bg-primary text-white rounded-md">1</button>
                            <button
                                class="px-3 py-1 text-xs font-medium hover:bg-slate-200 dark:hover:bg-slate-700 rounded-md">2</button>
                            <button class="p-1.5 rounded-md hover:bg-slate-200 dark:hover:bg-slate-700">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </section>

                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10 flex gap-4">
                    <span class="material-symbols-outlined text-primary">info</span>
                    <div>
                        <p class="text-sm font-semibold text-primary">Rekap Tahunan</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                            Rekap persembahan tahunan resmi akan dikirimkan melalui email setiap akhir tahun anggaran
                            sebagai lampiran laporan SPT.
                            Silakan hubungi bagian keuangan jika terdapat ketidaksesuaian data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
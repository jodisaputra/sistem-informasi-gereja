@extends('layouts.church')
@section('title', 'Dashboard | Church Connect')

@section('content')
    <main class="flex-1 max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-10">
        {{-- Hero / Verse Section --}}
        <section class="mb-10">
            <div
                class="relative overflow-hidden rounded-2xl bg-primary px-8 py-12 lg:py-16 text-white shadow-2xl shadow-blue-900/20">
                <div class="absolute top-0 right-0 p-4 opacity-10 pointer-events-none">
                    <span class="material-symbols-outlined text-[240px]">format_quote</span>
                </div>
                <div class="relative z-10 max-w-3xl">
                    <h1 class="text-3xl lg:text-4xl font-extrabold leading-tight mb-6">
                        Selamat datang kembali, {{ Auth::user()->name }}
                    </h1>
                    <div class="space-y-4 mb-8">
                        {{-- Custom Font for Verse Only --}}
                        <p class="text-blue-100 text-xl lg:text-2xl leading-relaxed italic"
                            style="font-family: 'Playfair Display', serif;">
                            "Sebab Aku ini mengetahui rancangan-rancangan apa yang ada pada-Ku mengenai kamu, demikianlah
                            firman
                            TUHAN, yaitu rancangan damai sejahtera dan bukan rancangan kecelakaan, untuk memberikan kepadamu
                            hari depan yang penuh harapan."
                        </p>
                        <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-200">— Yeremia 29:11</p>
                    </div>
                    <button
                        class="inline-flex items-center gap-3 rounded-full bg-white px-8 py-3.5 text-primary font-bold transition-all hover:bg-blue-50 hover:-translate-y-1 shadow-lg">
                        <span class="material-symbols-outlined">menu_book</span>
                        Baca Renungan Hari Ini
                    </button>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            {{-- Schedule Card --}}
            <div
                class="flex flex-col rounded-2xl bg-white dark:bg-slate-900 p-8 border border-slate-200 dark:border-slate-800 shadow-sm transition-shadow hover:shadow-md">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-2.5 rounded-xl text-primary dark:text-blue-400">
                            <span class="material-symbols-outlined">calendar_month</span>
                        </div>
                        <h2 class="text-xl font-bold">Jadwal Saya</h2>
                    </div>
                    <button
                        class="text-primary dark:text-blue-400 text-xs font-bold uppercase tracking-widest hover:underline">Lihat
                        Semua</button>
                </div>
                <div class="space-y-5">
                    <div
                        class="flex gap-5 items-start p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer border border-transparent hover:border-slate-100 dark:hover:border-slate-700">
                        <div
                            class="flex flex-col items-center justify-center min-w-[56px] py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                            <span class="text-[10px] font-bold uppercase tracking-tighter">Min</span>
                            <span class="text-xl font-black">12</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Ibadah Raya Minggu</h4>
                            <p class="text-sm text-slate-500 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">schedule</span> 10:00 WIB • Ruang Utama
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex gap-5 items-start p-4 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer border border-transparent hover:border-slate-100 dark:hover:border-slate-700">
                        <div
                            class="flex flex-col items-center justify-center min-w-[56px] py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                            <span class="text-[10px] font-bold uppercase tracking-tighter">Sel</span>
                            <span class="text-xl font-black">14</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white mb-1">Pendalaman Alkitab (COOL)</h4>
                            <p class="text-sm text-slate-500 flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-sm">schedule</span> 19:00 WIB • Ruang Pertemuan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- News Card --}}
            <div
                class="flex flex-col rounded-2xl bg-white dark:bg-slate-900 p-8 border border-slate-200 dark:border-slate-800 shadow-sm transition-shadow hover:shadow-md">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-2.5 rounded-xl text-primary dark:text-blue-400">
                            <span class="material-symbols-outlined">newspaper</span>
                        </div>
                        <h2 class="text-xl font-bold">Warta Jemaat</h2>
                    </div>
                    <button
                        class="text-primary dark:text-blue-400 text-xs font-bold uppercase tracking-widest hover:underline">Lebih
                        Banyak</button>
                </div>
                <div class="space-y-6">
                    <div class="group cursor-pointer">
                        <p class="text-[10px] font-bold text-primary dark:text-blue-400 uppercase tracking-widest mb-1">
                            10 Juni 2024</p>
                        <h4
                            class="font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">
                            Renovasi Gedung Utama Tahap II</h4>
                        <p class="text-sm text-slate-500 line-clamp-2">Proses renovasi gedung utama kini memasuki tahap
                            kedua...</p>
                    </div>
                    <div class="group cursor-pointer">
                        <p class="text-[10px] font-bold text-primary dark:text-blue-400 uppercase tracking-widest mb-1">
                            08 Juni 2024</p>
                        <h4
                            class="font-bold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">
                            Pendaftaran Retreat Keluarga</h4>
                        <p class="text-sm text-slate-500 line-clamp-2">Pendaftaran untuk retreat keluarga tahunan telah
                            dibuka...</p>
                    </div>
                </div>
            </div>

            {{-- Prayer Request Card --}}
            <div
                class="flex flex-col rounded-2xl bg-white dark:bg-slate-900 p-8 border border-slate-200 dark:border-slate-800 shadow-sm transition-shadow hover:shadow-md">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-2.5 rounded-xl text-primary dark:text-blue-400">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                        </div>
                        <h2 class="text-xl font-bold">Permohonan Doa</h2>
                    </div>
                    <button class="text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">add_circle</span>
                    </button>
                </div>
                <div class="space-y-4">
                    <div
                        class="p-4 rounded-xl border border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                        <div class="flex items-center justify-between mb-2">
                            <span
                                class="text-[10px] font-bold text-emerald-600 dark:text-emerald-400 uppercase tracking-widest bg-emerald-50 dark:bg-emerald-900/30 px-2 py-0.5 rounded">Permohonan
                                Saya</span>
                            <span class="text-[10px] text-slate-400">2 hari yang lalu</span>
                        </div>
                        <p class="text-sm font-medium text-slate-800 dark:text-slate-200 mb-2">Doa untuk kesembuhan
                            Ibunda yang sedang dirawat.</p>
                    </div>
                    <div
                        class="p-4 rounded-xl border-2 border-dashed border-slate-100 dark:border-slate-800 text-center py-6">
                        <p class="text-xs font-medium text-slate-400 mb-3">Punya pergumulan yang ingin didoakan?</p>
                        <button
                            class="bg-primary text-white text-xs font-bold px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">Kirim
                            Permohonan</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Actions --}}
        <section>
            <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
                <span class="material-symbols-outlined text-primary">flash_on</span>
                Aksi Cepat
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <button
                    class="flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:border-primary/50 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="bg-emerald-50 dark:bg-emerald-900/20 text-emerald-600 p-4 rounded-2xl group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                    </div>
                    <div class="text-left">
                        <p class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Beri Persembahan</p>
                        <p class="text-sm text-slate-500">Persepuluhan &amp; Donasi</p>
                    </div>
                </button>
                <button
                    class="flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:border-primary/50 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="bg-blue-50 dark:bg-blue-900/20 text-primary p-4 rounded-2xl group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">front_hand</span>
                    </div>
                    <div class="text-left">
                        <p class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Permohonan Doa</p>
                        <p class="text-sm text-slate-500">Ada yang perlu didoakan?</p>
                    </div>
                </button>
                <button
                    class="flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm hover:border-primary/50 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="bg-amber-50 dark:bg-amber-900/20 text-amber-600 p-4 rounded-2xl group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">smart_display</span>
                    </div>
                    <div class="text-left">
                        <p class="text-lg font-bold text-slate-900 dark:text-white leading-tight">Khotbah Terbaru</p>
                        <p class="text-sm text-slate-500">Saksikan tayangan ibadah</p>
                    </div>
                </button>
            </div>
        </section>

        {{-- Latest Sermon Series --}}
        <div
            class="mt-16 rounded-3xl bg-slate-900 h-[300px] flex flex-col items-center justify-center text-white overflow-hidden relative group cursor-pointer">
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1515162305285-0293e4767cc2?q=80&amp;w=2071&amp;auto=format&amp;fit=crop')] bg-cover bg-center opacity-40 group-hover:scale-105 transition-transform duration-700">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
            <span class="material-symbols-outlined text-6xl mb-4 relative z-10 text-primary">play_circle</span>
            <div class="text-center relative z-10">
                <p class="text-xs font-bold uppercase tracking-[0.3em] mb-2 text-blue-300">Seri Khotbah Baru</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Berjalan dalam Iman</h2>
                <p class="text-slate-300 text-sm max-w-md mx-auto px-6">Terlewat ibadah minggu lalu? Simak pengajaran
                    terbaru kami dan jadilah bagian dari perjalanan ini.</p>
            </div>
        </div>
    </main>

    @push('head')
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&amp;display=swap"
            rel="stylesheet" />
    @endpush
@endsection
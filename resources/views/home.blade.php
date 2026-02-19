@extends('layouts.app')

@section('content')
    <x-hero />

    {{-- Dashboard Section (Screen 3) --}}
    {{-- In a real app, this would be wrapped in @auth check --}}
    <section
        class="py-16 px-6 md:px-20 bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-white/5"
        id="dashboard">
        <div class="mx-auto max-w-[1280px]">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <p class="text-primary font-bold text-sm uppercase tracking-widest mb-1">Welcome back, Andrew</p>
                    <h2 class="font-serif text-3xl font-bold text-[#111418] dark:text-white">My Personal Updates</h2>
                </div>
                <button
                    class="text-sm font-bold text-[#617589] hover:text-primary flex items-center gap-1 transition-colors">
                    Manage Profile <span class="material-symbols-outlined text-sm">settings</span>
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-dashboard-card>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-10 w-10 flex items-center justify-center rounded-lg bg-primary/10 text-primary">
                            <span class="material-symbols-outlined">edit_note</span>
                        </div>
                        <h3 class="font-bold">Latest Sermon Notes</h3>
                    </div>
                    <div class="space-y-3">
                        <a class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors border border-transparent hover:border-gray-200 dark:hover:border-white/10"
                            href="#">
                            <p class="text-sm font-bold truncate">Menemukan Kedamaian dalam Badai</p>
                            <p class="text-xs text-gray-500">Dec 17, 2023 • Ps. Samuel</p>
                        </a>
                        <a class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-white/5 transition-colors border border-transparent hover:border-gray-200 dark:hover:border-white/10"
                            href="#">
                            <p class="text-sm font-bold truncate">Kekuatan dalam Kelemahan</p>
                            <p class="text-xs text-gray-500">Dec 10, 2023 • Ps. Samuel</p>
                        </a>
                    </div>
                    <button
                        class="w-full mt-4 text-xs font-bold text-primary py-2 border border-primary/20 rounded-md hover:bg-primary/5">View
                        All Notes</button>
                </x-dashboard-card>

                <x-dashboard-card>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-10 w-10 flex items-center justify-center rounded-lg bg-green-500/10 text-green-500">
                            <span class="material-symbols-outlined">receipt_long</span>
                        </div>
                        <h3 class="font-bold">Recent Giving</h3>
                    </div>
                    <div class="space-y-3">
                        <div
                            class="flex justify-between items-center p-2 text-sm border-b border-gray-100 dark:border-white/5">
                            <div>
                                <p class="font-medium">Persembahan Umum</p>
                                <p class="text-[10px] text-gray-500 uppercase">Dec 15, 2023</p>
                            </div>
                            <p class="font-bold text-primary">Rp 500.000</p>
                        </div>
                        <div
                            class="flex justify-between items-center p-2 text-sm border-b border-gray-100 dark:border-white/5">
                            <div>
                                <p class="font-medium">Dana Pembangunan</p>
                                <p class="text-[10px] text-gray-500 uppercase">Dec 01, 2023</p>
                            </div>
                            <p class="font-bold text-primary">Rp 1.000.000</p>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 text-xs font-bold text-primary py-2 border border-primary/20 rounded-md hover:bg-primary/5">Download
                        Statement</button>
                </x-dashboard-card>

                <x-dashboard-card>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-10 w-10 flex items-center justify-center rounded-lg bg-orange-500/10 text-orange-500">
                            <span class="material-symbols-outlined">event_available</span>
                        </div>
                        <h3 class="font-bold">My Events</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex gap-3 items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/event-natal-keluarga.jpg') }}')">
                            </div>
                            <div>
                                <p class="text-sm font-bold">Ibadah Natal Keluarga</p>
                                <div class="flex items-center gap-1 text-[10px] text-gray-500">
                                    <span class="material-symbols-outlined text-[10px]">location_on</span> Main Sanctuary
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/event-bakti-sosial.jpg') }}')"></div>
                            <div>
                                <p class="text-sm font-bold">Bakti Sosial Natal</p>
                                <div class="flex items-center gap-1 text-[10px] text-gray-500">
                                    <span class="material-symbols-outlined text-[10px]">calendar_month</span> Dec 24, 2023
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 text-xs font-bold text-primary py-2 border border-primary/20 rounded-md hover:bg-primary/5">Explore
                        More Events</button>
                </x-dashboard-card>
            </div>
        </div>
    </section>

    {{-- Service Schedule Section --}}
    <section class="py-24 px-6 md:px-20 bg-white dark:bg-background-dark/50">
        <div class="mx-auto max-w-[1280px]">
            <div class="mb-16 text-center">
                <h2 class="font-serif text-4xl font-bold mb-4 text-[#111418] dark:text-white">Jadwal Ibadah Minggu Ini</h2>
                <div class="h-1 w-20 bg-primary mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-service-card title="Ibadah Raya 1" time="Pukul 08:00 WIB" location="Main Sanctuary, Gedung A"
                    image="{{ asset('assets/images/service-raya-1.jpg') }}" />
                <x-service-card title="Ibadah Raya 2" time="Pukul 10:30 WIB" location="Main Sanctuary, Gedung A"
                    image="{{ asset('assets/images/service-raya-2.jpg') }}" />
                <x-service-card title="Youth Service" time="Pukul 16:00 WIB" location="Youth Hall, Gedung B"
                    image="{{ asset('assets/images/service-youth.jpg') }}" />
            </div>
        </div>
    </section>

    <x-sermon-section />

    {{-- Events & News Section --}}
    <section class="py-24 px-6 md:px-20 bg-white dark:bg-background-dark/50">
        <div class="mx-auto max-w-[1280px]">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
                <div class="max-w-xl">
                    <h2 class="font-serif text-4xl font-bold mb-4 text-[#111418] dark:text-white">Events & News</h2>
                    <p class="text-[#617589] dark:text-gray-400">Ikuti perkembangan terbaru dan jangan lewatkan kesempatan
                        untuk melayani bersama dalam komunitas kami.</p>
                </div>
                <a class="text-primary font-bold flex items-center gap-1 border-b-2 border-transparent hover:border-primary transition-all"
                    href="#">
                    View All Events <span class="material-symbols-outlined text-sm">open_in_new</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-event-card category="Community" date="Dec 15, 2023" title="Bakti Sosial: Berbagi Kasih Menjelang Natal"
                    description="Mari berpartisipasi dalam pembagian paket sembako untuk saudara-saudara kita yang membutuhkan di area sekitar gereja."
                    image="{{ asset('assets/images/event-bakti-sosial.jpg') }}" />

                <x-event-card category="Ministry" date="Dec 22, 2023" title="Pendaftaran Kelompok Kecil (Cell Group)"
                    description="Bertumbuh lebih dalam dalam komunitas yang lebih intim. Pendaftaran semester baru kini telah dibuka untuk semua jemaat."
                    image="{{ asset('assets/images/event-cell-group.jpg') }}" />

                <x-event-card category="Special Event" date="Dec 25, 2023" title="Ibadah Natal Keluarga: Pengharapan Sejati"
                    description="Rayakan kelahiran Sang Juru Selamat bersama seluruh anggota keluarga dalam ibadah spesial Natal kami."
                    image="{{ asset('assets/images/event-natal-keluarga.jpg') }}" />
            </div>
        </div>
    </section>
@endsection
@extends('layouts.church')
@section('title', 'Edit Profil | Church Connect')

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
                        <span class="font-medium text-slate-900 dark:text-white">Informasi Pribadi</span>
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
                        <a class="flex items-center gap-3 px-4 py-4 text-sm font-medium active-sidebar-item transition-all bg-primary/5 text-primary border-r-4 border-primary"
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
                        <h2 class="text-xl font-bold text-slate-900 dark:text-white">Informasi Profil</h2>
                        <p class="text-sm text-slate-500 mt-1">Perbarui data diri dan preferensi pelayanan Anda.</p>
                    </div>

                    <div class="p-6 space-y-10">
                        {{-- Profile Photo --}}
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <div class="relative group">
                                <img alt="Profile Large"
                                    class="h-28 w-28 rounded-full object-cover ring-4 ring-white dark:ring-slate-800 shadow-md"
                                    src="{{ asset('assets/images/default_profile.jpg') }}" />
                                <button
                                    class="absolute bottom-0 right-0 bg-primary p-2 rounded-full text-white shadow-lg hover:bg-[#004494] transition-colors">
                                    <span class="material-symbols-outlined text-sm">photo_camera</span>
                                </button>
                            </div>
                            <div class="text-center sm:text-left">
                                <h4 class="font-semibold text-slate-900 dark:text-white">Foto Profil</h4>
                                <p class="text-xs text-slate-500 mt-1 mb-3">JPG, PNG atau GIF (Maks. 2MB)</p>
                                <div class="flex gap-2">
                                    <button
                                        class="px-4 py-2 text-xs font-semibold bg-primary/10 text-primary rounded-lg hover:bg-primary/20 transition-colors">Ubah
                                        Foto</button>
                                    <button
                                        class="px-4 py-2 text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors">Hapus</button>
                                </div>
                            </div>
                        </div>

                        {{-- Form --}}
                        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                            @csrf
                            @method('patch')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {{-- Name --}}
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="name">Nama
                                        Lengkap</label>
                                    <input
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                                        autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>

                                {{-- Email --}}
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                        for="email">Email</label>
                                    <input
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                                        required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" />
                                </div>

                                {{-- WhatsApp --}}
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                        for="whatsapp">Nomor WhatsApp</label>
                                    <input
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="whatsapp" name="whatsapp" type="tel"
                                        value="{{ old('whatsapp', $user->whatsapp) }}" placeholder="0812xxxxxxx" />
                                    <x-input-error :messages="$errors->get('whatsapp')" />
                                </div>

                                {{-- Birth Date --}}
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                        for="birth_date">Tanggal Lahir</label>
                                    <input
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="birth_date" name="birth_date" type="date"
                                        value="{{ old('birth_date', $user->birth_date) }}" />
                                    <x-input-error :messages="$errors->get('birth_date')" />
                                </div>

                                {{-- Address --}}
                                <div class="space-y-2 md:col-span-2">
                                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                        for="address">Alamat</label>
                                    <textarea
                                        class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-transparent focus:ring-primary focus:border-primary transition-all text-sm"
                                        id="address" name="address" rows="3">{{ old('address', $user->address) }}</textarea>
                                    <x-input-error :messages="$errors->get('address')" />
                                </div>
                            </div>

                            {{-- Service Interests (Static for now, meant for future implementation) --}}
                            <div class="pt-4 space-y-4">
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Minat Pelayanan</h4>
                                    <p class="text-xs text-slate-500 mt-1">Pilih bidang pelayanan yang ingin Anda ikuti.</p>
                                </div>
                                <div class="flex flex-wrap gap-3">
                                    @foreach(['Musik & Worship', 'Media & Kreatif', 'Sosial & Diakonia', 'Sekolah Minggu', 'Hospitality & Usher'] as $interest)
                                        <label class="cursor-pointer group">
                                            <input type="checkbox" class="hidden peer" />
                                            <span
                                                class="inline-flex items-center px-4 py-2 rounded-full border border-slate-200 dark:border-slate-700 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary hover:border-primary transition-all text-sm font-medium">
                                                {{ $interest }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div
                                class="pt-6 border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row items-center justify-end gap-4">
                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition
                                        class="text-sm text-green-600 dark:text-green-400 font-medium">
                                        {{ __('Tersimpan.') }}
                                    </p>
                                @endif

                                <button type="button"
                                    class="w-full sm:w-auto px-6 py-2.5 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="w-full sm:w-auto px-8 py-2.5 text-sm font-bold text-white bg-primary rounded-lg shadow-md shadow-primary/20 hover:bg-[#004494] hover:-translate-y-0.5 active:translate-y-0 transition-all">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </section>

                {{-- Data Update Info --}}
                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10 flex gap-4">
                    <span class="material-symbols-outlined text-primary">info</span>
                    <div>
                        <p class="text-sm font-semibold text-primary">Pembaruan Data</p>
                        <p class="text-xs text-slate-600 dark:text-slate-400 mt-1 leading-relaxed">
                            Beberapa data sensitif seperti nomor keanggotaan memerlukan verifikasi admin jika ingin diubah.
                            Hubungi sekretariat gereja untuk informasi lebih lanjut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
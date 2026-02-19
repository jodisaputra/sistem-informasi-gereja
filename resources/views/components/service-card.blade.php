@props(['title', 'time', 'location', 'image'])

<div
    class="group flex flex-col overflow-hidden rounded-xl bg-background-light dark:bg-white/5 border border-primary/10 transition-all hover:shadow-2xl hover:-translate-y-2">
    <div class="aspect-video w-full overflow-hidden bg-center bg-cover" data-alt="Church sanctuary"
        style="background-image: url('{{ $image }}');"></div>
    <div class="p-8">
        <div class="flex items-center gap-2 text-primary mb-3">
            <span class="material-symbols-outlined text-sm">schedule</span>
            <span class="text-sm font-bold uppercase tracking-wider">{{ $title }}</span>
        </div>
        <h3 class="text-2xl font-bold mb-2">{{ $time }}</h3>
        <p class="text-[#617589] dark:text-gray-400 mb-6 flex items-center gap-2">
            <span class="material-symbols-outlined text-base">location_on</span>
            {{ $location }}
        </p>
        <button
            class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-colors">
            Lihat Detail
        </button>
    </div>
</div>
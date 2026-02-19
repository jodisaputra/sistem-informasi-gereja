@props(['category', 'date', 'title', 'description', 'image'])

<div class="flex flex-col">
    <div class="relative mb-6 overflow-hidden rounded-xl aspect-[4/3]">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="{{ $title }}"
            style="background-image: url('{{ $image }}');"></div>
        <div
            class="absolute top-4 left-4 bg-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest text-[#111418] shadow-sm">
            {{ $category }}
        </div>
    </div>
    <span class="text-sm text-[#617589] mb-2 uppercase tracking-tighter font-semibold">{{ $date }}</span>
    <h3 class="text-xl font-bold mb-3 hover:text-primary cursor-pointer transition-colors">{{ $title }}</h3>
    <p class="text-[#617589] line-clamp-2">{{ $description }}</p>
</div>
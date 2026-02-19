<section class="py-24 px-6 md:px-20 bg-background-light">
    <div class="mx-auto max-w-[1280px]">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div
                class="relative w-full lg:w-1/2 aspect-video overflow-hidden rounded-2xl shadow-2xl group cursor-pointer">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                    data-alt="Speaker standing on stage"
                    style="background-image: url('{{ asset('assets/images/sermon-thumbnail.jpg') }}');"></div>
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div
                        class="flex h-20 w-20 items-center justify-center rounded-full bg-primary/90 text-white transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-4xl">play_arrow</span>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <h4 class="text-primary font-bold tracking-widest uppercase mb-4 text-sm">Latest Sermon</h4>
                <h2 class="font-serif text-4xl md:text-5xl font-bold mb-6 text-[#111418]">Menemukan
                    Kedamaian dalam Badai</h2>
                <p class="text-lg text-[#617589] mb-8 leading-relaxed">
                    Pesan minggu ini mengajak kita untuk merenungkan bagaimana iman dapat memberikan ketenangan sejati
                    di tengah tantangan hidup yang paling berat sekalipun.
                </p>
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-full overflow-hidden border-2 border-primary bg-cover bg-center"
                        data-alt="Profile portrait of Pastor Samuel"
                        style="background-image: url('{{ asset('assets/images/pastor-profile.jpg') }}');"></div>
                    <div>
                        <p class="font-bold">Ps. Samuel Abraham</p>
                        <p class="text-sm text-[#617589]">Senior Pastor</p>
                    </div>
                </div>
                <button
                    class="flex items-center gap-2 rounded-lg bg-primary px-8 py-3.5 text-base font-bold text-white hover:bg-primary/90 transition-all">
                    <span>Watch Full Sermon</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </div>
</section>
@props(['visionMission'])
<section class="py-12 bg-blue-500 relative overflow-hidden">
    {{-- Dekorasi Minimalis --}}
    <div class="absolute top-0 right-0 w-32 h-full bg-white/10 -skew-x-12 translate-x-10"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12">
            
            {{-- Judul Kecil --}}
            <div class="flex-shrink-0 border-b-2 md:border-b-0 md:border-r-2 border-white/30 pb-2 md:pb-0 md:pr-12">
                <span class="text-blue-100 font-bold text-lg block mb-1">Filosofi</span>
                <h3 class="text-xl font-semibold text-white">Visi & Misi</h3>
            </div>
            
            {{-- Konten Utama --}}
            <div class="flex-grow">
                <p class="text-lg md:text-xl text-white font-light">
                    {{ $visionMission }}
                </p>
            </div>

        </div>
    </div>
</section>
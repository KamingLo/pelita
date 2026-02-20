@props(['features'])
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($features as $feature)
            <div class="bg-slate-50 p-10 rounded-[3rem] border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-100 group-hover:rotate-12 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-4">{{ $feature }}</h4>
                <p class="text-slate-500 leading-relaxed">
                    Implementasi kurikulum yang dirancang khusus untuk memastikan siswa unggul dalam kompetensi dan karakter.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
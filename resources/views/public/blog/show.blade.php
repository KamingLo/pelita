<x-layouts.app>
    {{-- SEO Dinamis --}}
    <x-slot:title>{{ $post->title }} | Sekolah Pelita</x-slot:title>
    <x-slot:description>{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}</x-slot:description>

    {{-- Hero Banner --}}
    <x-ui.hero-banner
        img="{{ asset('image/assets/default_bg.jpg') }}" 
        title="Informasi Terkini"
        desc="Warta dan agenda terbaru mengenai kegiatan pendidikan di lingkungan Pelita"
    />

    <article class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6">
            
            {{-- 1. Header Konten --}}
            <div class="mb-16" data-aos="fade-up">
                <div class="flex items-center gap-6 mb-8">
                    {{-- Warna Badge Dinamis --}}
                    @php
                        $badgeStyles = match($post->type) {
                            'berita' => 'bg-blue-50 text-blue-500',
                            'pengumuman' => 'bg-orange-50 text-orange-500',
                            'prestasi' => 'bg-emerald-50 text-emerald-500',
                            default => 'bg-slate-50 text-slate-500'
                        };
                    @endphp

                    <span class="px-6 py-2 rounded-full text-xl font-bold {{ $badgeStyles }}">
                        {{ ucfirst($post->type) }}
                    </span>
                    <span class="text-2xl font-medium text-gray-400">
                        {{ $post->created_at->format('d F Y') }} • {{ number_format($post->view_count) }} Views
                    </span>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight">
                    {{ $post->title }}
                </h1>
                
                <div class="mt-10 h-3 w-32 bg-blue-500 rounded-full"></div>
            </div>

            {{-- 2. Foto Utama --}}
            <div class="mb-24" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" 
                     class="w-full h-auto md:h-[750px] object-cover rounded-[3.5rem] shadow-sm border border-gray-100"
                     alt="{{ $post->title }}">
            </div>

            {{-- 3. Isi Konten --}}
            <div class="w-full" data-aos="fade-up" data-aos-delay="200">
                <div class="text-slate-700 leading-relaxed text-justify
                            text-xl md:text-2xl 
                            [&_p]:mb-12 
                            [&_h2]:text-4xl [&_h2]:font-bold [&_h2]:text-slate-900 [&_h2]:mb-8 [&_h2]:mt-16
                            [&_ul]:list-disc [&_ul]:ml-12 [&_ul]:mb-10
                            trix-content">
                    
                    {!! $post->content !!}

                </div>

                {{-- 4. Tag & Navigasi Footer --}}
                <div class="mt-32 pt-16 border-t border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-12">
                    <div class="flex flex-wrap gap-4">
                        @if($post->meta_keywords)
                            @foreach(explode(',', $post->meta_keywords) as $tag)
                                <span class="px-8 py-4 bg-slate-50 text-slate-500 rounded-2xl text-xl font-medium">
                                    #{{ trim($tag) }}
                                </span>
                            @endforeach
                        @endif
                    </div>

                    @php
                        $indexRoute = match($post->type) {
                            'berita' => 'public.berita.index',
                            'pengumuman' => 'public.pengumuman.index',
                            'prestasi' => 'public.prestasi.index',
                        };
                    @endphp

                    <a href="{{ route($indexRoute) }}" 
                       class="group inline-flex items-center gap-8 text-3xl font-bold text-blue-500 transition-colors">
                        <span class="w-20 h-20 rounded-full border-2 border-blue-100 flex items-center justify-center group-hover:bg-blue-500 group-hover:border-blue-500 group-hover:text-white transition-all">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                        </span>
                        Kembali ke List {{ ucfirst($post->type) }}
                    </a>
                </div>
            </div>
        </div>
    </article>
</x-layouts.app>
@props(['posts', 'title' => 'Berita & Pengumuman Terbaru', 'subtitle' => 'Warta Terupdate'])

<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        {{-- Header Section --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <p class="text-blue-600 font-bold uppercase tracking-[0.2em] text-xs mb-3">
                    {{ $subtitle }}
                </p>
                <h3 class="text-4xl font-medium tracking-tight text-gray-900">
                    {{ $title }}
                </h3>
            </div>
            <div class="h-1.5 w-24 bg-blue-600 rounded-full hidden md:block mb-2"></div>
        </div>

        @if($posts && $posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach($posts as $post)
                    <article class="group">
                        {{-- Menggunakan Accessor $post->url yang sudah kita buat di Model --}}
                        <a href="{{ $post->url }}" class="block space-y-6">
                            
                            {{-- Thumbnail Container --}}
                            <div class="relative aspect-[16/10] overflow-hidden rounded-3xl bg-gray-100 shadow-sm group-hover:shadow-xl transition-shadow duration-500 border border-gray-100">
                                @if($post->thumbnail)
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $post->title }}">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-400 uppercase text-[10px] font-bold tracking-widest">No Image</div>
                                @endif
                                
                                {{-- Badge Tipe Dinamis --}}
                                <div class="absolute top-6 left-6">
                                    @php
                                        $typeColor = match($post->type) {
                                            'berita' => 'text-blue-600',
                                            'pengumuman' => 'text-orange-600',
                                            'prestasi' => 'text-emerald-600',
                                            default => 'text-slate-600'
                                        };
                                    @endphp
                                    <span class="px-5 py-2 bg-white/90 backdrop-blur-xl rounded-full text-[10px] font-bold uppercase tracking-[0.2em] {{ $typeColor }}">
                                        {{ $post->type }}
                                    </span>
                                </div>
                            </div>

                            {{-- Content Info --}}
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 text-[10px] font-bold text-blue-500 uppercase tracking-[0.2em]">
                                    <span class="bg-blue-50 px-2 py-1 rounded text-blue-700">{{ $post->levels }}</span>
                                    <span class="w-1 h-1 bg-blue-300 rounded-full"></span>
                                    <span>{{ $post->created_at->format('d M, Y') }}</span>
                                    <span class="w-1 h-1 bg-blue-300 rounded-full"></span>
                                    <span>{{ number_format($post->view_count) }} Views</span>
                                </div>
                                
                                <h2 class="text-2xl font-medium tracking-tight text-gray-900 leading-tight group-hover:text-blue-600 transition-colors line-clamp-2">
                                    {{ $post->title }}
                                </h2>
                                
                                <p class="text-gray-500 line-clamp-2 text-sm leading-relaxed font-light text-justify">
                                    {{ $post->meta_description ?? Str::limit(strip_tags($post->content), 120) }}
                                </p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            @if(method_exists($posts, 'links'))
                <div class="mt-20">
                    {{ $posts->links('vendor.pagination.tailwind') }}
                </div>
            @endif
        @else
            <div class="py-24 text-center border-2 border-dashed border-gray-100 rounded-[3rem] bg-slate-50">
                <p class="text-gray-400 tracking-widest uppercase text-xs font-bold">Belum ada informasi yang diterbitkan</p>
            </div>
        @endif
    </div>
</section>
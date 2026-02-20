<section class="mt-16 mb-32 max-w-7xl mx-auto px-6">
    <div class="mb-20 text-center md:text-left" data-aos="fade-up">
        <h3 class="text-4xl font-bold text-slate-900 tracking-tight">Metode Pembelajaran Pelita</h3>
        <div class="w-20 h-1.5 bg-blue-600 mt-4 rounded-full mx-auto md:mx-0"></div>
        <p class="text-slate-600 mt-6 text-lg max-w-xl">
            Pendekatan edukasi yang menggabungkan standar keunggulan akademis dengan lingkungan belajar yang inklusif, aman, dan penuh kasih sayang.
        </p>
    </div>

    @php
        $methodologies = [
            [
                'title' => 'Student-Centered Learning',
                'desc' => 'Menempatkan siswa sebagai pusat pembelajaran melalui proyek kreatif yang relevan, didampingi guru sebagai mentor yang membimbing dengan kesabaran.',
                'color' => 'text-blue-600',
                'delay' => '100',
                // Icon: User/Graduation Cap
                'icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z'
            ],
            [
                'title' => 'Disiplin Positif',
                'desc' => 'Menerapkan ekosistem Ramah Anak tanpa kekerasan, membangun kedisiplinan melalui dialog dan apresiasi untuk membentuk karakter yang kokoh.',
                'color' => 'text-blue-500',
                'delay' => '200',
                // Icon: Heart (Symbol of SRA)
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
            ],
            [
                'title' => 'Holistic Development',
                'desc' => 'Menyelaraskan kurikulum nasional dengan pengembangan minat dan bakat khusus, memastikan setiap anak tumbuh seimbang antara logika dan nurani.',
                'color' => 'text-blue-400',
                'delay' => '300',
                // Icon: Sparkles/Lightbulb
                'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.989-2.386l-.548-.547z'
            ]
        ];
    @endphp

    <div class="grid md:grid-cols-3 gap-16">
        @foreach($methodologies as $method)
            <div class="group flex flex-col items-start" 
                    data-aos="fade-up" 
                    data-aos-delay="{{ $method['delay'] }}">
                
                <div class="mb-6 transition-all duration-500 group-hover:scale-110">
                    <svg class="w-14 h-14 {{ $method['color'] }} opacity-90 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="{{ $method['icon'] }}" />
                    </svg>
                </div>

                <div class="relative mb-4">
                    <h4 class="text-2xl font-bold text-slate-900 tracking-tight transition-colors duration-300 group-hover:text-blue-600">
                        {{ $method['title'] }}
                    </h4>
                    <div class="absolute -bottom-1 left-0 w-8 h-0.5 bg-blue-600 transition-all duration-500 group-hover:w-full"></div>
                </div>
                
                <p class="text-slate-600 font-normal leading-relaxed text-lg opacity-85 transition-opacity duration-300 group-hover:opacity-100">
                    {{ $method['desc'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>
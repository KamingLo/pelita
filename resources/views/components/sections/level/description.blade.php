@props(['title', 'desc'])
<section class="bg-white pt-24 pb-12">
    <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-10 leading-tight">
            Pendidikan Berkualitas di Jenjang {{ $title }}
        </h2>
        <p class="text-2xl text-slate-600 font-light">
            "{{ $desc }} Kami percaya bahwa setiap anak adalah pribadi unik yang diciptakan Tuhan dengan potensi luar biasa yang siap dikembangkan."
        </p>
        <div class="mt-12 flex justify-center">
            <div class="h-1 w-32 bg-blue-600 rounded-full"></div>
        </div>
    </div>
</section>
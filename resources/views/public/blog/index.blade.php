<x-layouts.app>
    {{-- SEO Dinamis --}}
    <x-slot:title>
        {{ match($type) {
            'berita' => 'Berita & Kegiatan',
            'pengumuman' => 'Pengumuman Resmi',
            'prestasi' => 'Prestasi Siswa',
        } }} | Sekolah Pelita 
    </x-slot:title>
    
    <x-slot:description>
        Kumpulan {{ $type }} terbaru dan arsip informasi dari Sekolah Pelita.
    </x-slot:description>

    {{-- Hero Banner Dinamis --}}
    @php
        $banner = match($type) {
            'berita' => [
                'title' => 'Warta Pelita',
                'desc' => 'Ikuti terus perkembangan dan agenda terbaru di lingkungan Sekolah Pelita.'
            ],
            'pengumuman' => [
                'title' => 'Pusat Informasi',
                'desc' => 'Informasi resmi, kebijakan sekolah, dan pemberitahuan penting bagi orang tua dan siswa.'
            ],
            'prestasi' => [
                'title' => 'Galeri Prestasi',
                'desc' => 'Apresiasi atas pencapaian luar biasa siswa-siswi Pelita dalam bidang akademik maupun non-akademik.'
            ],
        };
    @endphp

    <x-ui.hero-banner
        img="{{ asset('image/assets/post-banner.webp') }}"
        :title="$banner['title']"
        :desc="$banner['desc']"
    />

    {{-- Komponen List Post --}}
    <x-ui.blog.post 
        :posts="$posts" 
        :title="match($type) {
            'berita' => 'Warta & Kegiatan Sekolah',
            'pengumuman' => 'Pusat Pengumuman Resmi',
            'prestasi' => 'Pencapaian & Prestasi Siswa',
        }" 
        :subtitle="match($type) {
            'berita' => 'Update Terkini',
            'pengumuman' => 'Informasi Penting',
            'prestasi' => 'Kebanggaan Kita',
        }" 
    />
</x-layouts.app>
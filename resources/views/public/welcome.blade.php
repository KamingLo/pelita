<x-layouts.app>
    <x-slot:title>Sekolah Pelita | Sekolah bertaraf internasional di jakarta barat</x-slot:title>
    <x-slot:description>Sekolah Pelita adalah sekolah bertaraf internasional yang menyelenggarakan pendidikan berbasis kurikulum internasional dengan fasilitas modern dan lingkungan belajar yang nyaman.</x-slot:description>

    <x-sections.hero />
    <x-sections.philosophy />
    <!-- jangan lupa tambahin section jenjang -->
    <x-ui.blog.post 
        :posts="$posts" 
        title="Berita & Pengumuman Terbaru" 
        subtitle="Update Pelita" 
    />
    <livewire:ui.testimonials  />
    <x-sections.cta-admisi />


</x-layouts.app>
<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            // SELURUHNYA
            [
                'title' => 'Agenda Buka Puasa Bersama Yayasan',
                'type' => 'pengumuman',
                'levels' => 'Seluruhnya',
                'content' => '<div>Seluruh siswa dan guru diundang untuk hadir dalam acara buka puasa bersama yang akan dilaksanakan di Aula Utama.</div>',
                'meta_description' => 'Acara buka puasa bersama seluruh warga sekolah.',
                'meta_keywords' => 'buka puasa, agenda sekolah, ramadan',
            ],
            [
                'title' => 'Penerimaan Peserta Didik Baru 2026',
                'type' => 'berita',
                'levels' => 'Seluruhnya',
                'content' => '<div>Pendaftaran siswa baru untuk tahun ajaran 2026/2027 resmi dibuka mulai hari ini secara online.</div>',
                'meta_description' => 'Informasi PPDB serentak untuk TK, SD, SMP, SMA, dan SMK.',
                'meta_keywords' => 'PPDB 2026, pendaftaran sekolah, siswa baru',
            ],
            [
                'title' => 'Update Seragam Batik Sekolah Baru',
                'type' => 'pengumuman',
                'levels' => 'Seluruhnya',
                'content' => '<div>Diberitahukan kepada seluruh siswa mengenai perubahan motif batik sekolah yang mulai berlaku semester depan.</div>',
                'meta_description' => 'Informasi perubahan motif seragam batik sekolah.',
                'meta_keywords' => 'seragam sekolah, batik, aturan baru',
            ],

            // TK
            [
                'title' => 'Lomba Mewarnai Tingkat Kecamatan',
                'type' => 'berita',
                'levels' => 'TK',
                'content' => '<div>Siswa TK kita berhasil meraih juara pertama dalam lomba mewarnai tingkat kecamatan kemarin.</div>',
                'meta_description' => 'Prestasi siswa TK dalam lomba mewarnai.',
                'meta_keywords' => 'lomba mewarnai, prestasi TK, anak kreatif',
            ],
            [
                'title' => 'Kunjungan Edukasi ke Kebun Binatang',
                'type' => 'pengumuman',
                'levels' => 'TK',
                'content' => '<div>Minggu depan anak-anak TK akan mengadakan kunjungan edukasi untuk mengenal jenis-jenis hewan.</div>',
                'meta_description' => 'Jadwal field trip siswa TK ke kebun binatang.',
                'meta_keywords' => 'field trip, edukasi anak, kebun binatang',
            ],
            [
                'title' => 'Pemeriksaan Kesehatan Gigi Anak',
                'type' => 'berita',
                'levels' => 'TK',
                'content' => '<div>Dokter gigi dari Puskesmas melakukan pemeriksaan rutin bagi seluruh siswa TK hari ini.</div>',
                'meta_description' => 'Kegiatan pemeriksaan gigi rutin untuk anak TK.',
                'meta_keywords' => 'kesehatan gigi, periksa dokter, anak sehat',
            ],

            // SD
            [
                'title' => 'Pelatihan Dokter Kecil Kelas 4 & 5',
                'type' => 'berita',
                'levels' => 'SD',
                'content' => '<div>Siswa kelas 4 dan 5 mengikuti pelatihan dasar P3K untuk persiapan menjadi Dokter Kecil sekolah.</div>',
                'meta_description' => 'Kegiatan pelatihan dokter kecil tingkat sekolah dasar.',
                'meta_keywords' => 'dokter kecil, P3K, UKS SD',
            ],
            [
                'title' => 'Persiapan Ujian Tengah Semester',
                'type' => 'pengumuman',
                'levels' => 'SD',
                'content' => '<div>Jadwal UTS semester genap untuk kelas 1-6 sudah tersedia di papan pengumuman masing-masing kelas.</div>',
                'meta_description' => 'Jadwal pelaksanaan UTS SD semester genap.',
                'meta_keywords' => 'UTS SD, jadwal ujian, pengumuman',
            ],
            [
                'title' => 'Juara Umum Lomba Pramuka Siaga',
                'type' => 'berita',
                'levels' => 'SD',
                'content' => '<div>Regu pramuka siaga sekolah kita berhasil membawa pulang piala juara umum tingkat kota.</div>',
                'meta_description' => 'Kemenangan regu pramuka siaga SD di tingkat kota.',
                'meta_keywords' => 'pramuka SD, prestasi siaga, lomba pramuka',
            ],

            // SMP
            [
                'title' => 'Workshop Digital Literacy Siswa',
                'type' => 'berita',
                'levels' => 'SMP',
                'content' => '<div>Siswa SMP mengikuti workshop penggunaan media sosial yang bijak dan aman di laboratorium komputer.</div>',
                'meta_description' => 'Pelatihan literasi digital untuk siswa menengah pertama.',
                'meta_keywords' => 'literasi digital, medsos bijak, SMP pintar',
            ],
            [
                'title' => 'Seleksi Tim Basket Sekolah',
                'type' => 'pengumuman',
                'levels' => 'SMP',
                'content' => '<div>Dicari pemain baru untuk memperkuat tim basket SMP guna menghadapi kompetisi antar sekolah.</div>',
                'meta_description' => 'Open recruitment pemain basket untuk tim SMP.',
                'meta_keywords' => 'basket SMP, seleksi olahraga, tim sekolah',
            ],
            [
                'title' => 'Study Tour Sejarah ke Museum',
                'type' => 'pengumuman',
                'levels' => 'SMP',
                'content' => '<div>Siswa kelas 8 akan melaksanakan studi lapangan ke Museum Nasional untuk pendalaman materi sejarah.</div>',
                'meta_description' => 'Rencana perjalanan studi sejarah siswa SMP kelas 8.',
                'meta_keywords' => 'museum nasional, study tour, sejarah',
            ],

            // SMA
            [
                'title' => 'Seminar Sukses Masuk PTN Favorit',
                'type' => 'berita',
                'levels' => 'SMA',
                'content' => '<div>Alumni sekolah hadir memberikan tips dan trik lolos seleksi perguruan tinggi negeri bagi kelas 12.</div>',
                'meta_description' => 'Strategi lolos PTN untuk siswa kelas 12 SMA.',
                'meta_keywords' => 'PTN, masuk kampus, tips SMA',
            ],
            [
                'title' => 'Debat Bahasa Inggris Antar Kelas',
                'type' => 'berita',
                'levels' => 'SMA',
                'content' => '<div>Kompetisi debat bahasa Inggris berlangsung sengit antara tim kelas 10 dan kelas 11.</div>',
                'meta_description' => 'Kegiatan lomba debat bahasa Inggris tingkat SMA.',
                'meta_keywords' => 'debat bahasa inggris, english club, SMA',
            ],
            [
                'title' => 'Bimbingan Konseling Pemilihan Jurusan',
                'type' => 'pengumuman',
                'levels' => 'SMA',
                'content' => '<div>Siswa kelas 10 diwajibkan mengikuti sesi konsultasi untuk penentuan jurusan IPA atau IPS.</div>',
                'meta_description' => 'Informasi bimbingan pemilihan jurusan bagi kelas 10.',
                'meta_keywords' => 'konseling sekolah, pilih jurusan, IPA IPS',
            ],

            // SMK
            [
                'title' => 'Uji Kompetensi Keahlian (UKK) 2026',
                'type' => 'pengumuman',
                'levels' => 'SMK',
                'content' => '<div>Jadwal Uji Kompetensi Keahlian untuk jurusan Teknik Informatika akan dimulai pada hari Senin depan.</div>',
                'meta_description' => 'Jadwal pelaksanaan UKK SMK tahun 2026.',
                'meta_keywords' => 'UKK SMK, ujian kejuruan, teknik',
            ],
            [
                'title' => 'MoU dengan Perusahaan Industri Global',
                'type' => 'berita',
                'levels' => 'SMK',
                'content' => '<div>Sekolah resmi menjalin kerjasama magang dan penempatan kerja dengan perusahaan otomotif besar.</div>',
                'meta_description' => 'Kerjasama sekolah dengan dunia industri untuk lulusan SMK.',
                'meta_keywords' => 'kerjasama industri, magang SMK, loker SMK',
            ],
            [
                'title' => 'Pameran Karya Inovasi Siswa SMK',
                'type' => 'berita',
                'levels' => 'SMK',
                'content' => '<div>Produk hasil rakitan siswa jurusan Elektronika dipamerkan dalam ajang kreativitas sekolah minggu ini.</div>',
                'meta_description' => 'Pameran hasil karya inovasi dan produk siswa SMK.',
                'meta_keywords' => 'karya SMK, produk kreatif, pameran',
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']) . '-' . rand(10, 99), // Slug unik
                'type' => $post['type'],
                'levels' => $post['levels'],
                'content' => $post['content'],
                'thumbnail' => 'thumbnails/dancer.webp', // Path gambar Anda
                'meta_description' => $post['meta_description'],
                'meta_keywords' => $post['meta_keywords'],
                'view_count' => rand(50, 500),
            ]);
        }
    }
}
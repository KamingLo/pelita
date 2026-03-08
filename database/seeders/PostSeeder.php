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
            // --- SELURUHNYA (6 Data) ---
            ['title' => 'Agenda Buka Puasa Bersama Yayasan', 'type' => 'pengumuman', 'levels' => 'Seluruhnya', 'content' => '<div>Seluruh siswa dan guru diundang untuk hadir dalam acara buka puasa bersama yang akan dilaksanakan di Aula Utama.</div>', 'meta_description' => 'Acara buka puasa bersama seluruh warga sekolah.', 'meta_keywords' => 'buka puasa, agenda sekolah, ramadan'],
            ['title' => 'Penerimaan Peserta Didik Baru 2026', 'type' => 'berita', 'levels' => 'Seluruhnya', 'content' => '<div>Pendaftaran siswa baru untuk tahun ajaran 2026/2027 resmi dibuka mulai hari ini secara online.</div>', 'meta_description' => 'Informasi PPDB serentak untuk TK, SD, SMP, SMA, dan SMK.', 'meta_keywords' => 'PPDB 2026, pendaftaran sekolah, siswa baru'],
            ['title' => 'Update Seragam Batik Sekolah Baru', 'type' => 'pengumuman', 'levels' => 'Seluruhnya', 'content' => '<div>Diberitahukan kepada seluruh siswa mengenai perubahan motif batik sekolah yang mulai berlaku semester depan.</div>', 'meta_description' => 'Informasi perubahan motif seragam batik sekolah.', 'meta_keywords' => 'seragam sekolah, batik, aturan baru'],
            ['title' => 'Libur Nasional dan Cuti Bersama 2026', 'type' => 'pengumuman', 'levels' => 'Seluruhnya', 'content' => '<div>Pengumuman mengenai kalender akademik dan hari libur nasional yang berlaku bagi seluruh unit pendidikan.</div>', 'meta_description' => 'Kalender hari libur nasional sekolah.', 'meta_keywords' => 'libur sekolah, kalender akademik'],
            ['title' => 'Peresmian Gedung Olahraga Baru', 'type' => 'berita', 'levels' => 'Seluruhnya', 'content' => '<div>Yayasan secara resmi membuka fasilitas gedung olahraga (GOR) yang dapat digunakan oleh seluruh siswa.</div>', 'meta_description' => 'Fasilitas baru GOR sekolah.', 'meta_keywords' => 'fasilitas sekolah, GOR, olahraga'],
            ['title' => 'Peringatan Hari Guru Nasional', 'type' => 'berita', 'levels' => 'Seluruhnya', 'content' => '<div>Kemeriahan perayaan hari guru yang diikuti oleh seluruh elemen sekolah dengan berbagai pementasan seni.</div>', 'meta_description' => 'Perayaan hari guru nasional di sekolah.', 'meta_keywords' => 'hari guru, acara sekolah, seni'],

            // --- TK (6 Data) ---
            ['title' => 'Lomba Mewarnai Tingkat Kecamatan', 'type' => 'berita', 'levels' => 'TK', 'content' => '<div>Siswa TK kita berhasil meraih juara pertama dalam lomba mewarnai tingkat kecamatan kemarin.</div>', 'meta_description' => 'Prestasi siswa TK dalam lomba mewarnai.', 'meta_keywords' => 'lomba mewarnai, prestasi TK, anak kreatif'],
            ['title' => 'Kunjungan Edukasi ke Kebun Binatang', 'type' => 'pengumuman', 'levels' => 'TK', 'content' => '<div>Minggu depan anak-anak TK akan mengadakan kunjungan edukasi untuk mengenal jenis-jenis hewan.</div>', 'meta_description' => 'Jadwal field trip siswa TK ke kebun binatang.', 'meta_keywords' => 'field trip, edukasi anak, kebun binatang'],
            ['title' => 'Pemeriksaan Kesehatan Gigi Anak', 'type' => 'berita', 'levels' => 'TK', 'content' => '<div>Dokter gigi dari Puskesmas melakukan pemeriksaan rutin bagi seluruh siswa TK hari ini.</div>', 'meta_description' => 'Kegiatan pemeriksaan gigi rutin untuk anak TK.', 'meta_keywords' => 'kesehatan gigi, periksa dokter, anak sehat'],
            ['title' => 'Pentas Seni Akhir Tahun TK', 'type' => 'pengumuman', 'levels' => 'TK', 'content' => '<div>Persiapan penampilan tari dan menyanyi anak-anak TK untuk acara pelepasan siswa.</div>', 'meta_description' => 'Acara perpisahan dan pentas seni TK.', 'meta_keywords' => 'pentas seni, perpisahan TK'],
            ['title' => 'Belajar Menanam Pohon Sejak Dini', 'type' => 'berita', 'levels' => 'TK', 'content' => '<div>Kegiatan "Green Day" dimana siswa TK belajar cara menanam dan merawat tanaman hias.</div>', 'meta_description' => 'Edukasi lingkungan untuk anak TK.', 'meta_keywords' => 'green day, menanam pohon, edukasi'],
            ['title' => 'Lomba Fashion Show Baju Adat', 'type' => 'berita', 'levels' => 'TK', 'content' => '<div>Memperingati Hari Kartini, siswa TK tampil menggemaskan dengan pakaian adat dari berbagai daerah.</div>', 'meta_description' => 'Fashion show hari kartini unit TK.', 'meta_keywords' => 'hari kartini, baju adat, fashion show'],

            // --- SD (6 Data) ---
            ['title' => 'Pelatihan Dokter Kecil Kelas 4 & 5', 'type' => 'berita', 'levels' => 'SD', 'content' => '<div>Siswa kelas 4 dan 5 mengikuti pelatihan dasar P3K untuk persiapan menjadi Dokter Kecil sekolah.</div>', 'meta_description' => 'Kegiatan pelatihan dokter kecil tingkat sekolah dasar.', 'meta_keywords' => 'dokter kecil, P3K, UKS SD'],
            ['title' => 'Persiapan Ujian Tengah Semester', 'type' => 'pengumuman', 'levels' => 'SD', 'content' => '<div>Jadwal UTS semester genap untuk kelas 1-6 sudah tersedia di papan pengumuman masing-masing kelas.</div>', 'meta_description' => 'Jadwal pelaksanaan UTS SD semester genap.', 'meta_keywords' => 'UTS SD, jadwal ujian, pengumuman'],
            ['title' => 'Juara Umum Lomba Pramuka Siaga', 'type' => 'berita', 'levels' => 'SD', 'content' => '<div>Regu pramuka siaga sekolah kita berhasil membawa pulang piala juara umum tingkat kota.</div>', 'meta_description' => 'Kemenangan regu pramuka siaga SD di tingkat kota.', 'meta_keywords' => 'pramuka SD, prestasi siaga, lomba pramuka'],
            ['title' => 'Ekstrakurikuler Robotik Mulai Dibuka', 'type' => 'pengumuman', 'levels' => 'SD', 'content' => '<div>Membuka pendaftaran bagi siswa yang berminat mempelajari dasar-dasar pemrograman dan perakitan robot.</div>', 'meta_description' => 'Ekskul baru robotik untuk siswa SD.', 'meta_keywords' => 'robotik, ekskul SD, IT'],
            ['title' => 'Lomba Cerdas Cermat Matematika', 'type' => 'berita', 'levels' => 'SD', 'content' => '<div>Persaingan ketat antar kelas dalam ajang asah otak matematika tingkat sekolah.</div>', 'meta_description' => 'Cerdas cermat matematika SD.', 'meta_keywords' => 'matematika, cerdas cermat, SD prestasi'],
            ['title' => 'Pembagian Rapor Semester Ganjil', 'type' => 'pengumuman', 'levels' => 'SD', 'content' => '<div>Informasi pengambilan rapor oleh orang tua siswa kelas 1 hingga kelas 6.</div>', 'meta_description' => 'Jadwal ambil rapor unit SD.', 'meta_keywords' => 'rapor, nilai siswa, agenda SD'],

            // --- SMP (6 Data) ---
            ['title' => 'Workshop Digital Literacy Siswa', 'type' => 'berita', 'levels' => 'SMP', 'content' => '<div>Siswa SMP mengikuti workshop penggunaan media sosial yang bijak dan aman di laboratorium komputer.</div>', 'meta_description' => 'Pelatihan literasi digital untuk siswa menengah pertama.', 'meta_keywords' => 'literasi digital, medsos bijak, SMP pintar'],
            ['title' => 'Seleksi Tim Basket Sekolah', 'type' => 'pengumuman', 'levels' => 'SMP', 'content' => '<div>Dicari pemain baru untuk memperkuat tim basket SMP guna menghadapi kompetisi antar sekolah.</div>', 'meta_description' => 'Open recruitment pemain basket untuk tim SMP.', 'meta_keywords' => 'basket SMP, seleksi olahraga, tim sekolah'],
            ['title' => 'Study Tour Sejarah ke Museum', 'type' => 'pengumuman', 'levels' => 'SMP', 'content' => '<div>Siswa kelas 8 akan melaksanakan studi lapangan ke Museum Nasional untuk pendalaman materi sejarah.</div>', 'meta_description' => 'Rencana perjalanan studi sejarah siswa SMP kelas 8.', 'meta_keywords' => 'museum nasional, study tour, sejarah'],
            ['title' => 'Latihan Dasar Kepemimpinan OSIS', 'type' => 'berita', 'levels' => 'SMP', 'content' => '<div>Pengurus OSIS baru menjalani pelatihan intensif untuk meningkatkan jiwa kepemimpinan.</div>', 'meta_description' => 'LDKS OSIS SMP.', 'meta_keywords' => 'LDKS, OSIS, SMP'],
            ['title' => 'Proyek Penguatan Profil Pelajar Pancasila', 'type' => 'berita', 'levels' => 'SMP', 'content' => '<div>Pameran hasil karya siswa dalam implementasi Kurikulum Merdeka di lingkungan SMP.</div>', 'meta_description' => 'Kegiatan P5 unit SMP.', 'meta_keywords' => 'P5, kurikulum merdeka, karya siswa'],
            ['title' => 'Try Out Ujian Sekolah Kelas 9', 'type' => 'pengumuman', 'levels' => 'SMP', 'content' => '<div>Pelaksanaan try out tahap pertama guna memetakan kesiapan siswa kelas 9 menghadapi ujian akhir.</div>', 'meta_description' => 'Jadwal try out ujian sekolah SMP.', 'meta_keywords' => 'try out, ujian sekolah, kelas 9'],

            // --- SMA (6 Data) ---
            ['title' => 'Seminar Sukses Masuk PTN Favorit', 'type' => 'berita', 'levels' => 'SMA', 'content' => '<div>Alumni sekolah hadir memberikan tips dan trik lolos seleksi perguruan tinggi negeri bagi kelas 12.</div>', 'meta_description' => 'Strategi lolos PTN untuk siswa kelas 12 SMA.', 'meta_keywords' => 'PTN, masuk kampus, tips SMA'],
            ['title' => 'Debat Bahasa Inggris Antar Kelas', 'type' => 'berita', 'levels' => 'SMA', 'content' => '<div>Kompetisi debat bahasa Inggris berlangsung sengit antara tim kelas 10 dan kelas 11.</div>', 'meta_description' => 'Kegiatan lomba debat bahasa Inggris tingkat SMA.', 'meta_keywords' => 'debat bahasa inggris, english club, SMA'],
            ['title' => 'Bimbingan Konseling Pemilihan Jurusan', 'type' => 'pengumuman', 'levels' => 'SMA', 'content' => '<div>Siswa kelas 10 diwajibkan mengikuti sesi konsultasi untuk penentuan jurusan IPA atau IPS.</div>', 'meta_description' => 'Informasi bimbingan pemilihan jurusan bagi kelas 10.', 'meta_keywords' => 'konseling sekolah, pilih jurusan, IPA IPS'],
            ['title' => 'Lomba Karya Tulis Ilmiah Nasional', 'type' => 'berita', 'levels' => 'SMA', 'content' => '<div>Tim SMA berhasil masuk babak final dalam lomba penelitian ilmiah tingkat nasional.</div>', 'meta_description' => 'Prestasi karya tulis ilmiah SMA.', 'meta_keywords' => 'LKTI, penelitian, SMA juara'],
            ['title' => 'Try Out UTBK Gelombang Pertama', 'type' => 'pengumuman', 'levels' => 'SMA', 'content' => '<div>Simulasi ujian masuk perguruan tinggi berbasis komputer bagi seluruh siswa kelas 12.</div>', 'meta_description' => 'Jadwal UTBK mandiri sekolah.', 'meta_keywords' => 'UTBK, SNBT, persiapan kuliah'],
            ['title' => 'Pelatihan Public Speaking SMA', 'type' => 'berita', 'levels' => 'SMA', 'content' => '<div>Membekali siswa dengan kemampuan berbicara di depan umum untuk presentasi dan organisasi.</div>', 'meta_description' => 'Workshop public speaking SMA.', 'meta_keywords' => 'public speaking, komunikasi, SMA'],

            // --- SMK (6 Data) ---
            ['title' => 'Uji Kompetensi Keahlian (UKK) 2026', 'type' => 'pengumuman', 'levels' => 'SMK', 'content' => '<div>Jadwal Uji Kompetensi Keahlian untuk jurusan Teknik Informatika akan dimulai pada hari Senin depan.</div>', 'meta_description' => 'Jadwal pelaksanaan UKK SMK tahun 2026.', 'meta_keywords' => 'UKK SMK, ujian kejuruan, teknik'],
            ['title' => 'MoU dengan Perusahaan Industri Global', 'type' => 'berita', 'levels' => 'SMK', 'content' => '<div>Sekolah resmi menjalin kerjasama magang dan penempatan kerja dengan perusahaan otomotif besar.</div>', 'meta_description' => 'Kerjasama sekolah dengan dunia industri untuk lulusan SMK.', 'meta_keywords' => 'kerjasama industri, magang SMK, loker SMK'],
            ['title' => 'Pameran Karya Inovasi Siswa SMK', 'type' => 'berita', 'levels' => 'SMK', 'content' => '<div>Produk hasil rakitan siswa jurusan Elektronika dipamerkan dalam ajang kreativitas sekolah minggu ini.</div>', 'meta_description' => 'Pameran hasil karya inovasi dan produk siswa SMK.', 'meta_keywords' => 'karya SMK, produk kreatif, pameran'],
            ['title' => 'Kunjungan Industri ke Pabrik Otomotif', 'type' => 'pengumuman', 'levels' => 'SMK', 'content' => '<div>Siswa kelas 11 SMK akan melakukan observasi langsung ke lini produksi industri manufaktur.</div>', 'meta_description' => 'Agenda kunjungan industri SMK.', 'meta_keywords' => 'kunjungan industri, SMK, pabrik'],
            ['title' => 'Sertifikasi Internasional Jaringan', 'type' => 'berita', 'levels' => 'SMK', 'content' => '<div>Pemberian sertifikat bagi siswa yang lolos ujian kompetensi jaringan standar internasional.</div>', 'meta_description' => 'Sertifikasi kompetensi lulusan SMK.', 'meta_keywords' => 'sertifikasi, IT, SMK kompeten'],
            ['title' => 'Bursa Kerja Khusus (BKK) SMK', 'type' => 'pengumuman', 'levels' => 'SMK', 'content' => '<div>Informasi lowongan pekerjaan terbaru bagi alumni dan siswa yang baru lulus.</div>', 'meta_description' => 'Lowongan kerja khusus lulusan SMK.', 'meta_keywords' => 'loker SMK, BKK, kerja'],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']) . '-' . rand(100, 999), // Gunakan 3 angka agar lebih aman
                'type' => $post['type'],
                'levels' => $post['levels'],
                'content' => $post['content'],
                'thumbnail' => 'thumbnails/dancer.webp',
                'meta_description' => $post['meta_description'],
                'meta_keywords' => $post['meta_keywords'],
                'view_count' => rand(50, 500),
            ]);
        }
    }
}
<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function show($slug)
    {
        $details = [
            'taman-kanak-kanak' => [
                'db_code' => 'TK',
                'title' => 'Taman Kanak-Kanak',
                'desc' => 'Menanamkan benih kasih Kristiani dan sukacita belajar sejak dini melalui pendekatan bermain yang bermakna (Play-based Learning).',
                'vision_mission' => 'Menjadi lembaga pendidikan anak usia dini yang unggul dalam membentuk karakter Kristiani yang mandiri, kreatif, dan penuh kasih melalui lingkungan belajar yang aman dan menyenangkan.',
                'img' => 'image/assets/tk_bg.jpg',
                'features' => ['Pendidikan Nilai Kristiani', 'Motorik & Art Class', 'Learning by Playing']
            ],
            'sekolah-dasar' => [
                'db_code' => 'SD',
                'title' => 'Sekolah Dasar',
                'desc' => 'Membangun fondasi iman, karakter teladan, dan kemampuan dasar akademik dengan semangat cinta kasih sesama.',
                'vision_mission' => 'Mewujudkan generasi cerdas berkarakter teladan yang memiliki dasar iman kokoh, unggul dalam literasi dan numerasi, serta memiliki kepedulian tinggi terhadap sesama dan lingkungan.',
                'img' => 'image/assets/sd_bg.jpg',
                'features' => ['Pendidikan Karakter (Virtues)', 'Program Literasi Digital', 'Bimbingan Rohani']
            ],
            'sekolah-menengah-pertama' => [
                'db_code' => 'SMP',
                'title' => 'Sekolah Menengah Pertama',
                'desc' => 'Membentuk pribadi remaja yang mandiri, kritis, dan berintegritas sesuai teladan Kristus di tengah perkembangan zaman.',
                'vision_mission' => 'Mengembangkan potensi peserta didik secara holistik agar menjadi pribadi yang berintegritas, berpikir kritis, kompetitif secara akademik, dan memiliki jiwa kepemimpinan yang melayani.',
                'img' => 'image/assets/smp_bg.jpg',
                'features' => ['Kepemimpinan (Leadership)', 'Eksplorasi Minat & Bakat', 'Retret Pembentukan Diri']
            ],
            'sekolah-menengah-atas' => [
                'db_code' => 'SMA',
                'title' => 'Sekolah Menengah Atas',
                'desc' => 'Mempersiapkan cendekiawan muda yang unggul secara intelektual dan memiliki kedalaman spiritual untuk melayani masyarakat.',
                'vision_mission' => 'Menghasilkan lulusan yang siap bersaing di kancah global dengan kedalaman spiritual, keunggulan intelektual, dan semangat pengabdian bagi kemanusiaan sesuai nilai-nilai luhur Kristiani.',
                'img' => 'image/assets/sma_bg.jpg',
                'features' => ['Persiapan PTN & Luar Negeri', 'Social Project / Pengabdian', 'Klub Sains & Humaniora']
            ],
            'sekolah-menengah-kejuruan' => [
                'db_code' => 'SMK',
                'title' => 'Sekolah Menengah Kejuruan',
                'desc' => 'Menghasilkan tenaga profesional yang kompeten di bidangnya dengan etos kerja Kristiani yang jujur, disiplin, dan tangguh.',
                'vision_mission' => 'Membentuk tenaga kerja profesional yang terampil, kompeten, dan memiliki etos kerja yang jujur serta disiplin tinggi untuk menjawab tantangan industri dengan semangat kewirausahaan.',
                'img' => 'image/assets/smk_bg.jpg',
                'features' => ['Sertifikasi Kompetensi Industri', 'Praktek Kerja Lapangan', 'Jiwa Entrepreneurship']
            ],
        ];

        if (!array_key_exists($slug, $details)) {
            abort(404);
        }

        $levelData = $details[$slug];
        
        $posts = Post::where('levels', $levelData['db_code'])
                    ->latest()
                    ->paginate(6);

        return view('public.level', compact('levelData', 'posts', 'slug'));
    }
}
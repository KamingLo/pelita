<?php

namespace App\Livewire\Ui;

use Livewire\Component;

class Faq extends Component
{
    public $faqs = [
        [
            'question' => 'Jenjang pendidikan apa saja yang tersedia di Sekolah Pelita?',
            'answer' => 'Sekolah Pelita melayani berbagai jenjang pendidikan mulai dari taman kanak-kanak hingga sekolah menengah atas dan kejuruan. Setiap jenjang menerapkan standar kurikulum yang terintegrasi dengan pengembangan karakter dan kecerdasan emosional anak.',
            'open' => false
        ],
        [
            'question' => 'Bagaimana Sekolah Pelita menjamin lingkungan yang bebas dari perundungan (bullying)?',
            'answer' => 'Sebagai Sekolah Ramah Anak (SRA), kami memiliki kebijakan tegas "Zero Bullying". Kami menerapkan pengawasan aktif, edukasi empati secara berkala, dan sistem pendampingan wali kelas yang memastikan setiap anak merasa aman, dihargai, dan memiliki ruang untuk melapor tanpa rasa takut.',
            'open' => false
        ],
        [
            'question' => 'Apa yang dimaksud dengan "Disiplin Positif" di Sekolah Pelita?',
            'answer' => 'Disiplin Positif adalah pendekatan kami dalam mendidik karakter anak tanpa kekerasan fisik maupun verbal. Kami mengganti hukuman dengan konsekuensi logis dan dialog edukatif, sehingga anak belajar bertanggung jawab atas tindakannya berdasarkan kesadaran diri, bukan rasa takut.',
            'open' => false
        ],
        [
            'question' => 'Bagaimana keseimbangan antara teknologi dan pembentukan karakter anak?',
            'answer' => 'Kami mengintegrasikan teknologi sebagai alat bantu belajar (tools), namun karakter tetap menjadi fondasi utama. Siswa diajarkan literasi digital yang sehat agar mampu memanfaatkan teknologi secara bijak, mandiri, dan tetap memiliki etika serta kepekaan nurani terhadap lingkungan sosial.',
            'open' => false
        ],
        [
            'question' => 'Apakah Sekolah Pelita mendukung pengembangan bakat minat di luar akademik?',
            'answer' => 'Sangat. Kami percaya setiap anak memiliki kecerdasan yang berbeda. Melalui berbagai program ekstrakurikuler dan proyek kreatif, kami memberikan ruang seluas-luasnya bagi siswa untuk mengeksplorasi potensi seni, olahraga, kepemimpinan, hingga teknologi.',
            'open' => false
        ],
        [
            'question' => 'Bagaimana cara berkonsultasi mengenai kebutuhan khusus atau adaptasi anak?',
            'answer' => 'Kami sangat terbuka untuk berdialog. Orang tua dapat menjadwalkan konsultasi dengan tim psikolog atau konselor sekolah kami untuk memastikan anak mendapatkan pendekatan belajar yang paling sesuai dengan profil perkembangannya.',
            'open' => false
        ]
    ];

    public function toggle($index)
    {
        // Menutup FAQ lain saat satu dibuka (Mode Single Accordion)
        foreach ($this->faqs as $key => $faq) {
            if ($key !== $index) {
                $this->faqs[$key]['open'] = false;
            }
        }

        $this->faqs[$index]['open'] = !$this->faqs[$index]['open'];
    }
    
    public function render()
    {
        return view('livewire.ui.faq');
    }
}
<?php
namespace App\Livewire\Ui;

use Livewire\Component;

class Navbar extends Component
{
    public $mobileMenu = false;
    public $scrolled = false;
    public $openDropdown = null;

    public $navItems = [
        'Beranda' => '/',
        'Jenjang' => [
            'Taman Kanak-Kanak' => '/jenjang/taman-kanak-kanak',
            'Sekolah Dasar' => '/jenjang/sekolah-dasar', 
            'Sekolah Menengah Pertama' => '/jenjang/sekolah-menengah-pertama', 
            'Sekolah Menengah Atas' => '/jenjang/sekolah-menengah-atas',
            'Sekolah Menengah Kejuruan' => '/jenjang/sekolah-menengah-kejuruan',
        ],
        'Fasilitas' => '/fasilitas',
        'Postingan' => [
            'Berita' => '/berita',
            'Pengumuman' => '/pengumuman',
            'Prestasi' => '/prestasi',
        ],
        'Profil' => '/profil',
    ];

    public function toggleMobileMenu()
    {
        $this->mobileMenu = !$this->mobileMenu;
    }

    public function render()
    {
        return view('livewire.ui.navbar');
    }
}
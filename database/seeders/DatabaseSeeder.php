<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat Akun Super Admin
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@pelita.com',
            'password' => bcrypt('password'),
        ]);

        // 2. Memanggil Seeder Lainnya
        $this->call([
            GallerySeeder::class,
            PostSeeder::class,
        ]);
    }
}
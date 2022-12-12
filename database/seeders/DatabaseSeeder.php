<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;
use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Pekerjaan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Kategori::create([
        //     'nama'=>'Networking',
        // ]);
        // Kategori::create([
        //     'nama'=>'Pemrograman Web',
        // ]);  
        // Pekerjaan::create([
        //     'nama'=>'Mahasiswa',
        // ]);
        // Pekerjaan::create([
        //     'nama'=>'Guru',
        // ]); 
        User::factory(1)->create();
        Anggota::factory(3)->create();
        Buku::factory(3)->create();
    }
}

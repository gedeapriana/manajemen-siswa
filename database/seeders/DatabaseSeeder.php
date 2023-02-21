<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ekstrakulikuler;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
				
			Siswa::create([
				'nama' => 'I Komang Gede Apriana',
				'slug' => 'i-komang-gede-apriana',
				'no_absen' => 1,
				'jabatan' => 'Ketua',
				'kelas' => '12A',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);
			
			Siswa::create([
				'nama' => 'Akarsana Hidayat',
				'slug' => 'akarsana-hidayat',
				'no_absen' => 2,
				'jabatan' => 'Ketua',
				'Kelas' => '12B',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);

			Siswa::create([
				'nama' => 'Hana Farida',
				'slug' => 'hana-farida',
				'no_absen' => 3,
				'jabatan' => 'Ketua',
				'kelas' => '12C',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);

			Ekstrakulikuler::create([
				'nama' => 'Basket',
				'slug' => 'basket',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			Ekstrakulikuler::create([
				'nama' => 'Sepak Bola',
				'slug' => 'footbal',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			Ekstrakulikuler::create([
				'nama' => 'Bulu Tangkis',
				'slug' => 'badminton',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);
    }
}

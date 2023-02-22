<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ekstrakulikuler;
use App\Models\Guru;
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
				'guru_id' => 1,
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			Ekstrakulikuler::create([
				'nama' => 'Sepak Bola',
				'slug' => 'footbal',
				'guru_id' => 3,
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			Ekstrakulikuler::create([
				'nama' => 'Bulu Tangkis',
				'slug' => 'badminton',
				'guru_id' => 2,
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			Guru::create([
				'nama'=> 'Ahmad',
				'slug'=> 'ahmad',
				'nip'=> '123456789',
				'alamat'=> 'Jl. Merdeka 1',
				'no_telp'=> '08123456789',
			]);

			Guru::create([
				'nama'=> 'Dani',
				'slug'=> 'dani',
				'nip'=> '123456987',
				'alamat'=> 'Jl. Merdeka 2',
				'no_telp'=> '08123456710',
			]);

			Guru::create([
				'nama'=> 'Deva',
				'slug'=> 'deva',
				'nip'=> '123456399',
				'alamat'=> 'Jl. Merdeka 3',
				'no_telp'=> '08123456920',
			]);

			Guru::create([
				'nama'=> 'devi',
				'slug'=> 'devi',
				'nip'=> '123456302',
				'alamat'=> 'Jl. Merdeka 3',
				'no_telp'=> '08123456920',
			]);

			Guru::create([
				'nama'=> 'Dewi',
				'slug'=> 'dewi',
				'nip'=> '123456403',
				'alamat'=> 'Jl. Merdeka 3',
				'no_telp'=> '08123456920',
			]);

			Guru::create([
				'nama'=> 'Dewa',
				'slug'=> 'dewa',
				'nip'=> '123456493',
				'alamat'=> 'Jl. Merdeka 3',
				'no_telp'=> '08123456920',
			]);
    }
}

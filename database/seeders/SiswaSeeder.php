<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
			DB::table('siswas')->insert([
				'nama' => 'I Komang Gede Apriana',
				'slug' => 'i-komang-gede-apriana',
				'no_absen' => 1,
				'jabatan' => 'Ketua',
				'kelas' => '12A',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);
			
			DB::table('siswas')->insert([
				'nama' => 'Akarsana Hidayat',
				'slug' => 'akarsana-hidayat',
				'no_absen' => 2,
				'jabatan' => 'Ketua',
				'Kelas' => '12B',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);

			DB::table('siswas')->insert([
				'nama' => 'Hana Farida',
				'slug' => 'hana-farida',
				'no_absen' => 3,
				'jabatan' => 'Ketua',
				'kelas' => '12C',
				'gambar'=>'i-komang-gede-apriana.jpg'
			]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
			DB::table('ekstrakulikulers')->insert([
				'nama' => 'Basket',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			DB::table('ekstrakulikulers')->insert([
				'nama' => 'Sepak Bola',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			DB::table('ekstrakulikulers')->insert([
				'nama' => 'Bulu Tangkis',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);
    }
}

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
				'slug' => 'basket',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			DB::table('ekstrakulikulers')->insert([
				'nama' => 'Sepak Bola',
				'slug' => 'footbal',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);

			DB::table('ekstrakulikulers')->insert([
				'nama' => 'Bulu Tangkis',
				'slug' => 'badminton',
				'pembina' => "Hehe",
				'deskripsi' => 'Ini deskripsi',
				'batas' => 100,
			]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Ekstrakulikuler extends Model
{
    use HasFactory;
		protected $guarded = ['id'];

		public function siswa() {
			return $this->belongsToMany(Siswa::class);
		}
}

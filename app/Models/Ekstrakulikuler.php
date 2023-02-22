<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Guru;

class Ekstrakulikuler extends Model
{
    use HasFactory;
		protected $guarded = ['id'];

		public function siswa() {
			return $this->belongsToMany(Siswa::class);
		}

		public function guru() {
			return $this->belongsTo(Guru::class);
		}
}

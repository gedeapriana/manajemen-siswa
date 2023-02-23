<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Ekstrakulikuler;

class Guru extends Model
{
    use HasFactory;
		protected $guarded = ['id'];

		public function kelas() {
			return $this->hasOne(Kelas::class);
		}

		public function pelajaran() {
			return $this->hasOne(Pelajaran::class);
		}

		public function ekstrakulikuler() {
			return $this->hasOne(Ekstrakulikuler::class);
		}
}

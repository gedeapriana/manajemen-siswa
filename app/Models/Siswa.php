<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ekstrakulikuler;

class Siswa extends Model
{
	use HasFactory;
	protected $guarded = ['id'];


	/* relation */
	public function ekstrakulikuler() {
		return $this->belongsToMany(Ekstrakulikuler::class);
	}
}

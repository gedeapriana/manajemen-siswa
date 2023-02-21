<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index() {
		$data = Siswa::get();
		return view('siswa', [
			'title'=> 'Siswa',
			'data' => $data
		]);
	}
}

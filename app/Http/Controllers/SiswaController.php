<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index(Request $request) {
		$keyeord = $request["cari-siswa"];
		$data = Siswa::with('ekstrakulikuler')->get();
		return view('siswa', [
			'title'=> 'Siswa',
			'data' => $data
		]);
	}

	public function ekstrakulikuler($slug) {
		$data = Ekstrakulikuler::with('siswa')->where('slug', $slug)->get();
		return view('siswa-ekstrakulikuler', [
			'title' => 'Siswa',
			'data' => $data
		]);
	}
}

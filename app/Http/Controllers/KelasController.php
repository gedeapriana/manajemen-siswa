<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
	public function index(Request $request) {
		$keyword = $request['cari-kelas'];
		$data = Kelas::with(['siswa', 'guru'])
													->where('nama', 'LIKE', '%'.$keyword.'%')
													->orWhere('rincian', 'LIKE', '%'.$keyword.'%')
													->get();
		return view('kelas', [
			'title' => 'Kelas',
			'data' => $data,
		]);
	}
}

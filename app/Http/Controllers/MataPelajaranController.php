<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
	public function index(Request $request) {
		$keyword = $request['cari-pelajaran'];
		$data = Pelajaran::with('guru')
											->where('nama', 'LIKE', '%'.$keyword.'%')
											->get();
		return view('matapelajaran', [
			'title' => 'Mata Pelajaran',
			'data'=>$data,
		]);
	}
}

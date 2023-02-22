<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
	public function index(Request $request) {
		$keyword = $request['cari-ekstra'];
		$data = Ekstrakulikuler::with(['siswa', 'guru'])
														->where('nama', 'LIKE', '%'.$keyword.'%')
														->orWhereHas('guru', function($query) use($keyword) {
															$query->where('nama', 'LIKE', '%'.$keyword.'%');
															})
														->get();
		return view('ekstrakulikuler', [
			'title'=> 'Ekstrakulikuler',
			'data' => $data
		]);
	}
}

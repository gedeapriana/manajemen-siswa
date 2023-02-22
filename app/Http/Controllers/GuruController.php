<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
	public function index(Request $request) {
		$keyword = $request['cari-guru'];
		$data = Guru::where('nama', 'LIKE', '%'.$keyword.'%')
							->orWhere('nip', 'LIKE', '%'.$keyword.'%')
							->orWhere('alamat', 'LIKE', '%'.$keyword.'%')
							->orWhere('no_telp', 'LIKE', '%'.$keyword.'%')
							->orWhere('id', 'LIKE', '%'.$keyword.'%')
							->get();
		return view('guru', [
			'title'=> 'Guru',
			'data'=> $data
		]);
	}
}

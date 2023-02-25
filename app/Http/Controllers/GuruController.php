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
							->orWhere('no_telepon', 'LIKE', '%'.$keyword.'%')
							->orWhere('id', 'LIKE', '%'.$keyword.'%')
							->get();
		return view('guru', [
			'title'=> 'Guru',
			'data'=> $data
		]);
	}

	public function detail($slug) {
		$data = Guru::with(['kelas', 'pelajaran', 'ekstrakulikuler'])->where('slug', $slug)->get(); 
		return view('guru-detail', [ 
			'title' => 'Guru',
			'data' => $data[0],
		]);
	}

	public function delete($id) {
		return view('guru-delete', [
			'title' => 'Guru',
		]);
	}
}

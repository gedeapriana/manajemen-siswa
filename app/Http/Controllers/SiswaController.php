<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
	public function index(Request $request) {
		$keyword = $request["cari-siswa"];
		$data = Siswa::with(['ekstrakulikuler', 'kelas'])
						->where('nama', 'LIKE', '%'.$keyword.'%')
->orWhereHas('ekstrakulikuler', function($query) use($keyword) {
								$query->where('nama', 'LIKE', '%'.$keyword.'%');
							})
						->get();

		return view('siswa', [
			'title'=> 'Siswa',
			'data' => $data
		]);
	}

	public function detail($slug) {
		$data = Siswa::with(['kelas', 'ekstrakulikuler'])->where('slug', $slug)->get();
		return view('siswa-detail', [
			'title' => 'Siswa',
			'data' => $data[0],
		]);
	}

	public function ekstrakulikuler($slug) {
		$data = Ekstrakulikuler::with(['siswa'])->where('slug', $slug)->get();
		return view('siswa-ekstrakulikuler', [
			'title' => 'Siswa',
			'data' => $data
		]);
	}

	public function kelas($slug) {
		$data = Kelas::with('siswa')->where('slug', $slug)->get();
		return view('siswa-kelas', [
			'title' => 'Siswa',
			'data' => $data,
		]);
	}

	public function delete ($id) {
		$data = Siswa::findOrFail($id);
		return view('siswa-delete', [
			'title' => 'Siswa',
			'data' => $data
		]);
	}

	public function destroy($id) {
		$delete = DB::table('siswas')->where('id', $id)->delete();
		return redirect('/');
	}
}

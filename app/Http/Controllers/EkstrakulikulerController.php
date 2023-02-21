<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
	public function index() {
		$data = Ekstrakulikuler::get();
		return view('ekstrakulikuler', [
			'title'=> 'Ekstrakulikuler',
			'data' => $data
		]);
	}
}

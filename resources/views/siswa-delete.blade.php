@extends('layouts.schema')

@section('contents')
 <div class="p-6 my-10 dark:bg-slate-800 flex flex-col justify-between items-center bg-gray-100 text-gray-700 rounded-xl">
    <section id="" class="w-full flex">
      <div class="w-full flex items-center justify-center gap-4 md:gap-7 xl:w-8/12">
        <div id="__siswa-foto" class="aspect-[3/4] md:mx-5 md:w-[140px] w-[120px] bg-slate-800 dark:bg-slate-700"></div>
        <div id="__siswa-detail" class="grow flex">
          <ul class="w-full">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Nama Lengkap</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nama ?? '' }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Alamat</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->alamat ?? '' }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Tempat, tanggal Lahir</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->tempat_lahir ?? '' }},
                {{ $data->tanggal_lahir ?? '' }}
              </h2>
            </li>
            <li class="w-full  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Jenis Kelamin</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500"> {{ $data->jenis_kelamin ?? '' }}</h2>
            </li>
          </ul>
          <ul class="w-full hidden xl:inline">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">NISN</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nisn ?? '' }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Kelas</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">
                {{ $data->kelas->nama ?? ('' . $data->kelas->rincian ?? '') }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">No Telepon</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon ?? '' }}</h2>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full xl:w-4/12 hidden xl:flex gap-3 justify-center items-center flex-col">
				<h1 class="text-xl">Anda yakin ingin menghapus data ini?</h1>
				<form action="/siswa/destroy/{{ $data->id }}" method="post">
					@csrf
					@method('delete')
					<button type="submit" class="bg-rose-500 rounded-2xl py-2 hover:bg-rose-700 px-4 text-white">Yakin</button>
				</form>
				<a href="/" class="bg-teal-500 rounded-2xl py-2 hover:bg-teal-700 px-4 text-white">Batalkan</a>
			</div>
    </section>

    <section class="w-full overflow-hidden flex flex-col md:flex-row xl:hidden">
      <div class="w-full md:w-7/12 overflow-hidden">
        <ul class="w-full md:mx-5 mb-8">
          <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">NISN</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nisn ?? '' }}</h2>
          </li>
          <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Kelas</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">
              {{ $data->kelas->nama ?? ('' . $data->kelas->rincian ?? '') }}</h2>
          </li>
          <li class="w-full border-b-0  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">No Telepon</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon ?? '' }}</h2>
          </li>
        </ul>
      </div>

      <div class="w-full md:w-5/12 flex-col gap-3 flex justify-center p-8 md:p-0 items-center">
				<h1>Anda yakin ingin menghapus data ini?</h1>
				<form action="">
					<a href="" class="bg-rose-500 rounded-2xl py-2 hover:bg-rose-700 px-4 text-white">Yakin</a>
				</form>
				<a href="/" class="bg-teal-500 hover:bg-teal-700 rounded-2xl py-2 px-4 text-white">Batalkan</a>
      </div>
    </section>
  </div>
  <!-- Jumbotron -->
@endsection

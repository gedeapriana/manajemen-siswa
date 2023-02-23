@extends('layouts.schema')

@section('contents')
  <!-- Jumbotron -->
  <div class="p-6 my-10 flex flex-col justify-between items-center bg-gray-100 text-gray-700 rounded-xl">
    <section id="" class="w-full flex">
      <div class="w-full flex items-center justify-center gap-4 md:gap-7 xl:w-8/12">
        <div id="__siswa-foto" class="aspect-[3/4] md:mx-5 md:w-[140px] w-[120px] bg-slate-800"></div>
        <div id="__siswa-detail" class="grow flex">
          <ul class="w-full">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Nama Lengkap</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nama }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Alamat</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->alamat }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Tempat, tanggal Lahir</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
              </h2>
            </li>
            <li class="w-full  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Jenis Kelamin</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500"> {{ $data->jenis_kelamin }}</h2>
            </li>
          </ul>
          <ul class="w-full hidden xl:inline">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">NISN</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nisn }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Kelas</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->kelas->nama.$data->kelas->rincian }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">No Telepon</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon }}</h2>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full xl:w-4/12 hidden xl:flex justify-center items-center flex-col">
        <a type="button" href=""
          class="text-white bg-teal-500 text-sm hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-teal-500 dark:hover:bg-teal-700 dark:focus:ring-teal-800"><i
            class="bi bi-pencil-square"></i> Modifikasi</a>
        <a type="button" href=""
          class="text-white bg-rose-500 hover:bg-rose-800 focus:outline-none focus:ring-4 focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-rose-500 dark:hover:bg-rose-700 dark:focus:ring-rose-800"><i
            class="bi bi-trash"></i> Hapus</a>
      </div>
    </section>

    <section class="w-full overflow-hidden flex flex-col md:flex-row xl:hidden">
      <div class="w-full md:w-7/12 overflow-hidden">
        <ul class="w-full md:mx-5">
          <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">NISN</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nisn }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">Kelas</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->kelas->nama.$data->kelas->rincian }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600">No Telepon</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon }}</h2>
            </li>
        </ul>
      </div>

      <div class="w-full md:w-5/12 md:flex-col flex justify-center p-8 md:p-0 items-center">
        <a type="button" href=""
          class="text-white bg-teal-500 text-sm hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-teal-500 dark:hover:bg-teal-700 dark:focus:ring-teal-800"><i
            class="bi bi-pencil-square"></i> Modifikasi</a>
        <a type="button" href=""
          class="text-white bg-rose-500 hover:bg-rose-800 focus:outline-none focus:ring-4 focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-rose-500 dark:hover:bg-rose-700 dark:focus:ring-rose-800"><i
            class="bi bi-trash"></i> Hapus</a>
      </div>
    </section>
  </div>
  <!-- Jumbotron -->

	{{-- Ekstrakulikuler --}}
	<h1 class="text-xl text-center border-b-0  border-gray-200 border-opacity-100  py-5 text-teal-500 font-bold">Ekstrakulikuler yang diikuti</h1>
	 @if (count($data->ekstrakulikuler) > 0)
    <section class="">
      <div
        class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 xl:grid-cols-3 lg:grid-cols-2">
        @foreach ($data->ekstrakulikuler as $ekstra)
          <figure id="__ekstra-card"
            class="flex flex-col items-center justify-center p-8 text-center border-b border-gray-200 md:border-r dark:border-gray-700"
            style="background-position: center; background-size: cover;">
            <h1 id="__ekstra-header" class="text-lg">{{ $ekstra->nama }}</h1>
            <p id="__ekstra-subheader" class="text-sm text-slate-400">Dibina oleh</p>
            <a href="/guru/{{ $ekstra->guru->slug }}"
              class="flex justify-center items-center gap-2 m-2 py-3 px-4 bg-gray-200 rounded-lg">
              <div class="h-8 w-8 rounded-full bg-slate-500"></div>
              <p class="text-slate-500 text-sm">{{ $ekstra->guru->nama }}</p>
            </a>
            <section class="flex mt-10">
              <a type="button" href="/siswa/ekstrakulikuler/{{ $ekstra->slug }}"
                class="text-white bg-teal-500 gap-1 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-xs px-4 py-2 text-center flex items-center justify-center mr-2 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-500">
                <i class="bi bi-card-checklist text-lg"></i>
                Lihat siswa
              </a>
              <button type="button"
                class="text-white bg-teal-500 gap-1 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-xs px-4 py-2 text-center flex items-center justify-center mr-2 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-500">
                <i class="bi bi-pencil-square text-lg"></i>
                Ubah
              </button>
              <button type="button"
                class="text-white bg-rose-500 gap-1 hover:bg-rose-600 focus:ring-4 focus:outline-none focus:ring-rose-500 font-medium rounded-lg text-xs px-4 py-2 text-center flex items-center justify-center mr-2 dark:bg-rose-500 dark:hover:bg-rose-600 dark:focus:ring-rose-500">
                <i class="bi bi-trash text-lg"></i>
              </button>
            </section>
            </figcaption>
          </figure>
        @endforeach
      </div>
    </section>
  @else
    <main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8">
      <div class="text-center">
        <p class="text-3xl font-semibold text-teal-500">404</p>
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">{{ $title }} Tidak Ditemukan
        </h1>
        <p class="mt-6 text-base leading-7 text-gray-600">Maaf, {{ $title }} yang anda cari, tidak kami temukan</p>
      </div>
    </main>
  @endif

	{{-- Ekstrakulikuler --}}
@endsection

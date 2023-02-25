@extends('layouts.schema')

@section('contents')
  <!-- Jumbotron -->
  <div class="p-6 my-10 dark:bg-slate-800 flex flex-col justify-between items-center bg-gray-100 text-gray-700 rounded-xl">
    <section id="" class="w-full flex">
      <div class="w-full flex items-center justify-center gap-4 md:gap-7 xl:w-8/12">
        <div id="__siswa-foto" class="aspect-[3/4] md:mx-5 md:w-[140px] w-[120px] bg-slate-800 dark:bg-slate-700"></div>
        <div id="__siswa-detail" class="grow flex">
          <ul class="w-full">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Nama Lengkap</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nama }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Alamat</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->alamat }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Tempat, tanggal Lahir</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
              </h2>
            </li>
            <li class="w-full  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Jenis Kelamin</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500"> {{ $data->jenis_kelamin }}</h2>
            </li>
          </ul>
          <ul class="w-full hidden xl:inline">
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">NIP</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nip }}</h2>
            </li>
            <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Lulusan</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->lulusan }}</h2>
            </li>
            <li class="w-full border-b-2  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
              <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">No Telepon</h3>
              <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon }}</h2>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full xl:w-4/12 hidden xl:flex gap-3 justify-center items-center flex-col">
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
        <ul class="w-full md:mx-5 mb-8">
          <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">NIP</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->nip }}</h2>
          </li>
          <li class="w-full border-b-2 border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">Lulusan</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->lulusan }}</h2>
          </li>
          <li class="w-full border-b-0  border-gray-200 border-opacity-100  py-3 dark:border-opacity-50">
            <h3 class="text-xs md:text-sm text-gray-600 dark:text-slate-200">No Telepon</h3>
            <h2 class="text-sm md:text-lg font-bold text-teal-500">{{ $data->no_telepon }}</h2>
          </li>
        </ul>
      </div>

      <div class="w-full md:w-5/12 md:flex-col gap-3 flex justify-center p-8 md:p-0 items-center">
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

  <div id="accordion-arrow-icon" class="mb-10" data-accordion="open">
    <h2 id="accordion-arrow-icon-heading-1">
      <button type="button"
        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-900 bg-gray-100 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-gray-800"
        data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true"
        aria-controls="accordion-arrow-icon-body-1">
        <span>Wali Dari Kelas</span>
        <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </h2>
    <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
      <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-slate-800">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <i class="bi bi-house-fill text-teal-500 dark:text-slate-50  text-4xl m-3 block"></i>
          <a href="#">
            <h5 class="mb-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Kelas
              {{ $data->kelas->nama . $data->kelas->rincian }}</h5>
          </a>
          <section class="flex mt-5">
            <a type="button" href="/siswa/kelas/{{ $data->kelas->slug }}"
              class="text-white bg-teal-500 gap-1 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-xs px-4 py-2 text-center flex items-center justify-center mr-2 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-500">
              <i class="bi bi-pencil-square text-lg"></i>
              Daftar Mahasiswa
            </a>
          </section>
          </a>
        </div>
      </div>
    </div>

    <h2 id="accordion-arrow-icon-heading-2">
      <button type="button"
        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:bg-slate-800 dark:hover:bg-gray-800"
        data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false"
        aria-controls="accordion-arrow-icon-body-2">
        <span>Ekstrakulikuler yang sedang di bina</span>
        <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </h2>
    <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
      <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-slate-800">
        <div
          class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <i class="bi bi-house-fill text-teal-500 dark:text-slate-50  text-4xl m-3 block"></i>
          <a href="#">
            <h5 class="mb-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
              {{ $data->ekstrakulikuler->nama }}</h5>
          </a>
          <section class="flex mt-5">
            <a type="button" href="/siswa/ekstrakulikuler/{{ $data->ekstrakulikuler->slug }}"
              class="text-white bg-teal-500 gap-1 hover:bg-teal-600 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-xs px-4 py-2 text-center flex items-center justify-center mr-2 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-500">
              <i class="bi bi-pencil-square text-lg"></i>
              Daftar Mahasiswa
            </a>
          </section>
          </a>
        </div>

      </div>
    </div>
  </div>
@endsection

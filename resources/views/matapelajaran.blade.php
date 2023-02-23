@extends('layouts.schema')

@section('contents')
  <!-- Jumbotron -->
  <div class="p-6 my-10 dark:bg-slate-800 flex justify-center items-center bg-gray-100 text-gray-700 rounded-xl">
    <form class="w-full md:w-3/4 xl:w-1/2">
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <input type="search" id="default-search"
          class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-teal-500 focus:border-teal-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500"
          placeholder="Cari Ekstrakulikuler" required name="cari-pelajaran">
        <button type="submit"
          class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-4 py-2 dark:bg-teal-500 dark:hover:bg-teal-500 dark:focus:ring-teal-500">Search</button>
      </div>
    </form>

  </div>
  <!-- Jumbotron -->

  {{-- cardsection --}}
  @if (count($data) > 0)
    <section class="">
      <div
        class="grid mb-8 border border-gray-200 overflow-hidden rounded-2xl shadow-sm dark:border-gray-700 md:mb-12 xl:grid-cols-3 lg:grid-cols-2">
        @foreach ($data as $pelajaran)
          <figure id="__ekstra-card"
            class="flex flex-col dark:bg-slate-800 items-center justify-center p-8 text-center border-b border-gray-200 md:border-r dark:border-gray-700"
            style="background-position: center; background-size: cover;">
            <h1 id="__ekstra-header" class="text-lg dark:text-slate-100">{{ $pelajaran->nama }} <span
                class="bg-teal-100 text-teal-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-teal-900 dark:text-teal-300">Kelas
                {{ $pelajaran->kelas }}</span></h1>
            <p id="__ekstra-subheader" class="text-sm text-slate-400">Diajarkan Oleh</p>
            <a href="/guru/{{ $pelajaran->guru->slug }}"
              class="flex justify-center items-center dark:bg-slate-700 gap-2 m-2 py-3 px-4 bg-gray-200 rounded-lg">
              <div class="h-8 w-8 rounded-full bg-slate-500"></div>
              <p class="text-slate-500 text-sm dark:text-slate-100">{{ $pelajaran->guru->nama }}</p>
            </a>
            <section class="flex mt-10">
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
    <main class="grid min-h-full place-items-center bg-white dark:bg-slate-700 py-24 px-6 sm:py-32 lg:px-8">
      <div class="text-center">
        <p class="text-3xl font-semibold text-teal-500">404</p>
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl dark:text-slate-100">
          {{ $title }} Tidak Ditemukan
        </h1>
        <p class="mt-6 text-base leading-7 text-gray-600 dark:text-slate-100">Maaf, {{ $title }} yang anda cari,
          tidak kami temukan</p>
      </div>
    </main>
  @endif
  {{-- cardsection --}}

@endsection

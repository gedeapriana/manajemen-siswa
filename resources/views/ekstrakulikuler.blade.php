@extends('layouts.schema')

@section('contents')
  <!-- Jumbotron -->
  <div class="p-6 my-10 flex justify-center items-center bg-gray-100 text-gray-700 rounded-xl">

    <form class="w-1/2">
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
          placeholder="Cari Ekstrakulikuler" required>
        <button type="submit"
          class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-4 py-2 dark:bg-teal-500 dark:hover:bg-teal-500 dark:focus:ring-teal-500">Search</button>
      </div>
    </form>

  </div>
  <!-- Jumbotron -->

  {{-- cardsection --}}
  <section class="">
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
      @foreach ($data as $ekstra)
        <figure
          class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
          <h1 id="__ekstra-header" class="text-lg">{{$ekstra->nama}}</h1>
					<p id="__ekstra-subheader" class="text-sm text-slate-400">Dibina oleh</p>
          </figcaption>
        </figure>
      @endforeach
    </div>
  </section>
  {{-- cardsection --}}
@endsection

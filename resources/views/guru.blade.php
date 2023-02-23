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
          placeholder="Cari Guru" required name="cari-guru">
        <button type="submit"
          class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-4 py-2 dark:bg-teal-500 dark:hover:bg-teal-500 dark:focus:ring-teal-500">Search</button>
      </div>
    </form>
  </div>
  <!-- Jumbotron -->

  @if (count($data) > 0)
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="relative overflow-x-auto rounded-lg">
            <table class="min-w-full">
              <thead class="bg-white dark:bg-slate-800 border-b">
                <tr class="">
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                    No
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                    Nama Lengkap
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                    NIP
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                    Alamat
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                    No Telepon
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-center">
                    Gambar
                  </th>
                  <th scope="col" class="text-sm font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-center">
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $guru)
                  <tr
                    class="bg-white dark:bg-slate-800 border-b dark:border-b-0 transition duration-300 ease-in-out hover:bg-gray-100 dark:hover:bg-slate-700">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-slate-100">
                      {{ $loop->iteration }}
                    </td>
                    <td class="text-sm font-bold text-gray-900 dark:text-slate-100 px-6 py-4 whitespace-nowrap">
                      <span
                        class="bg-teal-500 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-teal-500 dark:text-slate-100">#{{ $guru->id }}</span>{{ $guru->nama }}
                    </td>
                    <td
                      class="text-sm text-gray-900 dark:text-slate-100 font-light flex justify-start items-center px-6 py-4 whitespace-nowrap">
                      {{ $guru->nip }}
                    </td>
                    <td class="text-sm text-gray-900 dark:text-slate-100 font-light px-6 py-4 whitespace-nowrap">
                      {{ $guru->alamat }}
                    </td>
                    <td class="text-sm text-gray-900 dark:text-slate-100 font-light px-6 py-4 whitespace-nowrap">
                      {{ $guru->no_telp }}
                    </td>
                    <td class="text-sm text-gray-900 dark:text-slate-100 font-light px-6 py-4 whitespace-nowrap">
                      <div class="h-8 w-8 mx-auto rounded-full bg-slate-500"></div>
                    <td
                      class="text-sm text-gray-900 font-light flex gap-3 justify-center items-center px-6 py-4 whitespace-nowrap">
                      <a href=""><i class="bi bi-pencil-square text-2xl text-teal-500"></i></a>
                      <a href=""><i class="bi bi-trash text-2xl text-rose-500"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
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
@endsection

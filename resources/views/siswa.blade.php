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
          placeholder="Cari Siswa" required>
        <button type="submit"
          class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-500 font-medium rounded-lg text-sm px-4 py-2 dark:bg-teal-500 dark:hover:bg-teal-500 dark:focus:ring-teal-500">Search</button>
      </div>
    </form>

  </div>
  <!-- Jumbotron -->

  {{-- table --}}
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr class="">
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  No
                </th>
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  Nama Lengkap
                </th>
                <th scope="col"
                  class="text-sm font-medium flex justify-center items-center text-slate-800 px-6 py-4 text-left">
                  No Absen
                </th>
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  Jabatan
                </th>
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  Kelas
                </th>
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  Extrakulikuler
                </th>
                <th scope="col" class="text-sm font-medium text-slate-800 px-6 py-4 text-left">
                  Gambar
                </th>
                <th scope="col" class="text-sm flex justify-center font-medium text-slate-800 px-6 py-4 text-left">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $siswa)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                  <td class="text-sm font-bold text-gray-900 px-6 py-4 whitespace-nowrap">
                    {{ $siswa->nama }}
                  </td>
                  <td
                    class="text-sm text-gray-900 font-light flex justify-center items-center px-6 py-4 whitespace-nowrap">
                    {{ $siswa->no_absen }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $siswa->jabatan }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{ $siswa->kelas }}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    D
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    <div>
                      <div id="tooltip-jese" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Jese Leos
                        <div class="tooltip-arrow" data-popper-arrow></div>
                      </div>
                      <img data-tooltip-target="tooltip-jese" class="w-10 h-10 rounded"
                        src="{{ asset('images/example.jpg') }}" alt="Medium avatar">
                    </div>
                  </td>
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
@endsection

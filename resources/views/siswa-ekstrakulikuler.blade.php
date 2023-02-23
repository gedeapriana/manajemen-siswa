@extends('layouts.schema')

@section('contents')
  {{-- table --}}
  <div class="flex flex-col mt-10">
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
                  Kelas
                </th>
                <th scope="col" class="text-sm font-medium text-center text-slate-800 dark:text-slate-100 px-6 py-4">
                  Gambar
                </th>
                <th scope="col"
                  class="text-sm flex justify-center font-medium text-slate-800 dark:text-slate-100 px-6 py-4 text-left">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data[0]->siswa as $siswa)
                <tr
                  class="bg-white dark:bg-slate-800 dark:border-b-0 border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-slate-100">
                    {{ $loop->iteration }}
                  </td>
                  <td class="text-sm font-bold text-gray-900 dark:text-slate-100 px-6 py-4 whitespace-nowrap">
                    {{ $siswa->nama }}
                  </td>
                  <td class="text-sm text-gray-900 dark:text-slate-100 font-light px-6 py-4 whitespace-nowrap">
                    <span
                      class="bg-purple-100 text-purple-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{ $siswa->kelas->nama ?? '' }}
                      {{ $siswa->kelas->rincian ?? '' }}</span>
                  </td>
                  <td class="text-sm text-gray-900 dark:text-slate-100 font-light px-6 py-4 whitespace-nowrap">
                    <div class="h-8 w-8 mx-auto rounded-full bg-slate-500"></div>
                  </td>
                  <td
                    class="text-sm text-gray-900 dark:text-slate-100 font-light flex gap-3 justify-center items-center px-6 py-4 whitespace-nowrap">
                    <a href="/siswa/{{ $siswa->slug }}"><i class="bi bi-eye text-2xl text-teal-500"></i></a>
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

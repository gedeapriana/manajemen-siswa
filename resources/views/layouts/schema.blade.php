<!doctype html>
<html class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  @vite('resources/css/app.css')
</head>

<body>

  <div id="root" class="w-full">
    <nav id="__navbar-root" class="w-full flex justify-center items-center h-auto dark:bg-slate-800">
      <section id="__navbar" class="w-11/12 md:w-10/12 lg:w-9/12 flex justify-between items-center h-16 lg:h-20">
        <h3 id="__navbar-brand" class="font-sans font-bold text-xl text-teal-500">Manajemen Siswa</h3>
        <ul id="__navbar-list" class="gap-2 2xl:gap-6 lg:gap-3 hidden lg:flex">
          <li>
            <i
              class="bi bi-person-lines-fill {{ $title == 'Siswa' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/"
              class="font-sans text-lg {{ $title == 'Siswa' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Siswa</a>
          </li>
          <li>
            <i class="bi bi-mortarboard-fill {{ $title == 'Guru' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/guru"
              class="font-sans text-lg {{ $title == 'Guru' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Guru</a>
          </li>
          <li>
            <i class="bi bi-fire {{ $title == 'Ekstrakulikuler' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/ekstrakulikuler"
              class="font-sans text-lg {{ $title == 'Ekstrakulikuler' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Ekstrakulikuler</a>
          </li>
          <li>
            <i
              class="bi bi-journals {{ $title == 'Mata Pelajaran' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/matapelajaran"
              class="font-sans text-lg {{ $title == 'Mata Pelajaran' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Mata
              Pelajaran</a>
          </li>
          <li>
            <i class="bi bi-houses-fill {{ $title == 'Kelas' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/kelas"
              class="font-sans text-lg {{ $title == 'Kelas' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Kelas</a>
          </li>
          <li>
            <i
              class="bi bi-info-circle-fill {{ $title == 'Tentang' ? 'text-teal-500 font-bold' : 'text-slate-700' }}"></i>
            <a href="/tentang"
              class="font-sans text-lg {{ $title == 'Tentang' ? 'text-teal-500 font-bold' : 'text-slate-700' }}">Tentang</a>
          </li>
        </ul>
        <i id="__navbar-hamburger" class="bi bi-list text-teal-500 text-4xl lg:hidden"></i>
      </section>
    </nav>

    <main id="__main-root" class="w-full flex justify-center items-center">
      <section id="__main" class="w-11/12 md:w-10/12 lg:w-9/12 h-20">
        @yield('contents')
      </section>
    </main>
  </div>

</body>

</html>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e6bc1ebaee.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body bgcolor="#EEEDEB">
    <!-- SIDEBAR -->

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6 absolute top-0 left-0 mt-4 mr-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>   

    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-army" aria-label="Sidebar">
        <div class="flex flex-col items-center justify-center mb-2 mx-auto">
            <img src="{{url('/assets/img/LogoDashboard.png')}}" alt="Logo" class="h-22 w-auto mb-2 ml-10">
        </div>
        <div class="mb-4 border-b border-gray-300 text-putih"></div>
        <div class="text-white text-center font-medium text-putih m-5">Selamat Datang, {{ auth()->user()->role->nama_role }}</div>
        <div class="mb-4 border-b border-gray-300 text-putih mt-4"></div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/RW" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3 text-putih group-hover:text-army">Dashboard</span>
                </a>
            </li>
            <li x-data="{ open: false }">
                <a href="#" @click="open = !open" class="text-putih flex items-center p-2 text-gray-900 dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5 text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kelola Warga</span>
                    <svg class="w-4 h-4 ml-auto transition-transform transform text-putih" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <ul x-show="open" x-transition class="space-y-2 ml-4">
                    <li>
                        <a href="/RW/KartuKeluarga" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                                <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                            </svg>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Daftar Kartu Keluarga</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/Warga" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Daftar Warga</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li x-data="{ open: false }">
                <a href="#" @click="open = !open" class="text-putih flex items-center p-2 text-gray-900 dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <i class="fa-solid fa-money-check text-putih transition duration-75 group-hover:text-army"></i>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kelola Bansos</span>
                    <svg class="w-4 h-4 ml-auto transition-transform transform text-putih" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <ul x-show="open" x-transition class="space-y-2 ml-4">
                    <li>
                        <a href="/RW/criteriaweights" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon fas fa-cube text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kriteria & Bobot</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/criteriaratings" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon fas fa-cubes text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Rating Kriteria</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/alternatives" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon fas fa-database text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Alternatif & Skor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/decision" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon fas fa-table text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Matriks Keputusan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/normalization" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon far fa-chart-bar text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Normalisasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/rank" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <i class="nav-icon fas fa-chart-line text-putih transition duration-75 group-hover:text-army"></i>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Perangkingan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/RW/User" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"/>
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kelola User</span>
                </a>
            </li>
            <li>
                <a href="/RW/Iuran" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Daftar Iuran</span>

                </a>
            </li>
            <li>
                <a href="/RW/Persuratan" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Request Surat</span>
                </a>
            </li>
            <li>
                <a href="/RW/Pengaduan" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kelola Pengaduan</span>
                </a>
            </li>
            <li x-data="{ open: false }">
                <a href="#" @click="open = !open" class="text-putih flex items-center p-2 text-gray-900 dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512">
                        <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Kelola Pengumuman</span>
                    <svg class="w-4 h-4 ml-auto transition-transform transform text-putih" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <ul x-show="open" x-transition class="space-y-2 ml-4">
                    <li>
                        <a href="/RW/Agenda" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Agenda</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RW/Berita" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                            <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z" clip-rule="evenodd" />
                                <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
                            </svg>
                            <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Berita</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/RW/FasilitasUmum" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap  group-hover:text-army">Fasilitas Umum</span>
                </a>
            </li>
            <li>
                <a href="/RW/LayananDarurat" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M15 3.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0V5.56l-4.72 4.72a.75.75 0 1 1-1.06-1.06l4.72-4.72h-2.69a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Layanan Darurat</span>
                </a>
            </li>
            <li>
                <a href="/RW/StrukturRw" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M211.2 96a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM32 256c0 17.7 14.3 32 32 32h85.6c10.1-39.4 38.6-71.5 75.8-86.6c-9.7-6-21.2-9.4-33.4-9.4H96c-35.3 0-64 28.7-64 64zm461.6 32H576c17.7 0 32-14.3 32-32c0-35.3-28.7-64-64-64H448c-11.7 0-22.7 3.1-32.1 8.6c38.1 14.8 67.4 47.3 77.7 87.4zM391.2 226.4c-6.9-1.6-14.2-2.4-21.6-2.4h-96c-8.5 0-16.7 1.1-24.5 3.1c-30.8 8.1-55.6 31.1-66.1 60.9c-3.5 10-5.5 20.8-5.5 32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32c0-11.2-1.9-22-5.5-32c-10.8-30.7-36.8-54.2-68.9-61.6zM563.2 96a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM321.6 192a80 80 0 1 0 0-160 80 80 0 1 0 0 160zM32 416c-17.7 0-32 14.3-32 32s14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32z"/>
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Struktur RW</span>
                </a>
            </li>
            <li>
                <a href="/RW/TataTertib" class=" text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
                        <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                    </svg>
                    <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Tata Tertib</span>
                </a>
            </li>
            <li>
                <form action="/logout" method="post" class="text-putih flex items-center p-2 text-gray-900  dark:text-white hover:bg-cream dark:hover:bg-cream group">
                    @csrf
                    <button type="submit" class="flex items-center">
                        <svg class="w-5 h-5  text-putih transition duration-75 dark:text-gray-400 group-hover:text-army dark:group-hover:text-army" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                        <span class=" text-putih flex-1 ms-3 whitespace-nowrap group-hover:text-army">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
        </div>
    </aside>

    <!-- CONTENT -->
    @yield('content')


    <!-- FOOTER -->
    <footer class="bg-abu-army text-center sticky footer bottom-0 w-full">
        <div class="p-4 text-center text-surface dark:text-white">
            Copyright 2024 © :
            <a href="https://projectsirw-production-56c4.up.railway.app/">SiRW</a>
        </div>
    </footer>
    

</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <!-- NAVBAR -->
    <nav class="block bg-abu-putih bg-opacity-80 shadow-md backdrop-blur-2xl backdrop-saturate-200 mx-auto px-4 lg:px-8 py-2 lg:py-4 w-full max-w-screen text-white">
        <div class="flex flex-wrap justify-between items-center mx-auto text-blue-gray-900 container">
            <div>
                <a href="#" class="block mr-4 antialiased cursor-pointer">
                    <img src="https://media.discordapp.net/attachments/1222905897848934450/1223143600188293180/image.png?ex=6618c83f&is=6606533f&hm=cab0f89b323bb3787adb4d760c00cc6813d8177267af06ac34416b8a20f35241&=&format=webp&quality=lossless" width="200" />
                </a>
            </div>
            <div class="lg:block hidden">
                <ul class="flex lg:flex-row flex-col lg:items-center gap-2 lg:gap-6 mt-2 lg:mt-0 mb-4 lg:mb-0">
                    <li class="flex items-center gap-x-2 p-1 font-sans font-semibold text-army-gelap text-blue-gray-90 text-lg antialiased leading-normal">
                        <a href="dashboard" class="flex items-center">
                            Beranda
                        </a>
                    </li>
                    <li class="flex items-center gap-x-2 p-1 font-sans font-semibold text-army-gelap text-lg antialiased leading-normal">
                        <a href="profil" class="flex items-center">
                            Profil
                        </a>
                    </li>
                    <li class="flex items-center gap-x-2 p-1 font-sans font-semibold text-army-gelap text-lg antialiased leading-normal">
                        <a href="info" class="flex items-center"> Info </a>
                    </li>
                    <li class="flex items-center gap-x-2 p-1 font-sans font-semibold text-army-gelap text-lg antialiased leading-normal">
                        <a href="layanan" class="flex items-center">
                            Layanan
                        </a>
                    </li>
                    <li class="flex items-center gap-x-2 p-1 font-sans font-semibold text-army-gelap text-lg antialiased leading-normal">
                        <a href="login" class="flex items-center">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:flex items-center gap-x-2 hidden">
                <div class="relative flex gap-2 w-full md:w-max">
                    <div class="relative w-full min-w-[288px] h-10">
                        <input type="search" placeholder="Search" class="focus:border-2 disabled:border-0 bg-transparent disabled:bg-blue-gray-50 px-3 py-2.5 pl-9 border placeholder-shown:border !border-t-blue-gray-300 border-t-transparent focus:border-t-transparent placeholder-shown:border-t-blue-gray-200 border-blue-gray-200 focus:!border-blue-gray-300 placeholder-shown:border-blue-gray-200 rounded-[7px] w-full h-full font-normal font-sans text-blue-gray-700 text-sm placeholder:text-blue-gray-300 transition-all outline outline-0 peer focus:outline-0" />
                        <label class="before:content[' before:block after:block left-0 before:box-border after:box-border after:flex-grow after:content-none peer-focus:before:!border-gray-900 peer-focus:after:!border-gray-900 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:before:border-transparent peer-focus:before:border-t-2 peer-disabled:before:border-transparent after:border-t peer-placeholder-shown:after:border-transparent peer-focus:after:border-t-2 peer-disabled:after:border-transparent after:border-r peer-focus:after:border-r-2 after:border-blue-gray-200 peer-focus:before:border-l-2 after:rounded-tr-md after:w-2.5 after:h-1.5 peer-focus:text-[11px] peer-disabled:text-transparent peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:text-sm peer-focus:text-gray-900 peer-disabled:peer-placeholder-shown:text-blue-gray-500 peer-focus:leading-tight peer-placeholder-shown:leading-[3.75] after:transition-all after:pointer-events-none '] after:content[' -top-1.5 absolute flex before:content-none before:mt-[6.5px] before:mr-1 before:border-t before:border-blue-gray-200 before:border-l before:rounded-tl-md w-full before:w-2.5 h-full before:h-1.5 font-normal text-[11px] text-gray-500 truncate leading-tight transition-all before:transition-all !overflow-visible pointer-events-none before:pointer-events-none select-none ']"></label>
                    </div>
                    <div class="top-[13px] left-3 !absolute">
                        <svg width="13" height="14" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.97811 7.95252C10.2126 7.38634 10.3333 6.7795 10.3333 6.16667C10.3333 4.92899 9.84167 3.742 8.9665 2.86683C8.09133 1.99167 6.90434 1.5 5.66667 1.5C4.42899 1.5 3.242 1.99167 2.36683 2.86683C1.49167 3.742 1 4.92899 1 6.16667C1 6.7795 1.12071 7.38634 1.35523 7.95252C1.58975 8.51871 1.93349 9.03316 2.36683 9.4665C2.80018 9.89984 3.31462 10.2436 3.88081 10.4781C4.447 10.7126 5.05383 10.8333 5.66667 10.8333C6.2795 10.8333 6.88634 10.7126 7.45252 10.4781C8.01871 10.2436 8.53316 9.89984 8.9665 9.4665C9.39984 9.03316 9.74358 8.51871 9.97811 7.95252Z" fill="#CFD8DC"></path>
                            <path d="M13 13.5L9 9.5M10.3333 6.16667C10.3333 6.7795 10.2126 7.38634 9.97811 7.95252C9.74358 8.51871 9.39984 9.03316 8.9665 9.4665C8.53316 9.89984 8.01871 10.2436 7.45252 10.4781C6.88634 10.7126 6.2795 10.8333 5.66667 10.8333C5.05383 10.8333 4.447 10.7126 3.88081 10.4781C3.31462 10.2436 2.80018 9.89984 2.36683 9.4665C1.93349 9.03316 1.58975 8.51871 1.35523 7.95252C1.12071 7.38634 1 6.7795 1 6.16667C1 4.92899 1.49167 3.742 2.36683 2.86683C3.242 1.99167 4.42899 1.5 5.66667 1.5C6.90434 1.5 8.09133 1.99167 8.9665 2.86683C9.84167 3.742 10.3333 4.92899 10.3333 6.16667Z" stroke="#CFD8DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <button class="relative lg:hidden hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:opacity-50 disabled:shadow-none ml-auto rounded-lg w-6 max-w-[40px] h-6 max-h-[40px] font-medium font-sans text-center text-inherit text-xs uppercase transition-all disabled:pointer-events-none select-none align-middle" type="button">
                <span class="top-1/2 left-1/2 absolute transform -translate-x-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>

    <!-- CONTENT -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5">STATUS SURAT</p>

    <div class="bg-login2 mx-16 px-4 py-3 rounded-md shadow-md ">
        <table class="table-auto text-center ">
            <thead>
                <tr>
                    <th scope="col" class="px-28 py-3">NIK</th>
                    <th scope="col" class="px-28 py-3">Nama</th>
                    <th scope="col" class="px-28 py-3">RT</th>
                    <th scope="col" class="px-28 py-3">Jenis Surat</th>
                    <th scope="col" class="px-20 py-3">Tanggal Pengajuan</th>
                    <th scope="col" class="px-28 py-3">Status</th>
                </tr>
            </thead>
            <tbody">
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    <td scope="col" class="py-3">Surat Usaha</td>
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-kuning cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Menunggu</button></td>
                </tr>
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    <td scope="col" class="py-3">Surat Usaha</td>
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-hijau cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Disetujui</button></td>
                </tr>
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    <td scope="col" class="py-3">Surat Usaha</td>
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-merah cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Ditolak</button></td>
                </tr>
            </tbody>
        </table>

    </div>
    <!-- FOOTER -->
    <footer class="bg-zinc-50 dark:bg-neutral-700 text-center lg:text-left">
        <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
            Copyright 2024 © :
            <a href="https://www.instagram.com/athallah_alsha/">ATHALLAH ADJANI</a>
        </div>
    </footer>
</body>

</html>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e6bc1ebaee.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        function updateTime() {
            var now = new Date();
            var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            var date = now.toLocaleDateString('id-ID', options);
            var time = now.toLocaleTimeString('id-ID');
            document.getElementById('current-time').innerText = date + ' - ' + time + ' WIB';
        }
        setInterval(updateTime, 1000);
    </script>
</head>

<body bgcolor="#FCFBF9">
    <!-- NAVBAR -->
    <nav class="block w-full max-w-screen px-4 py-2 mx-auto text-white bg-abu-putih  shadow-md  bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-blue-gray-900">
            <div><a href="#" class="mr-4 block cursor-pointer antialiased ">
                    <img src="{{url('/assets/img/logo.png')}}" width="200">
                </a>
            </div>
            <div class=" hidden lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2 text-blue-gray-90 text-army-gelap">
                        <a href="/" class="flex items-center">
                            Beranda
                        </a>
                    </li>
                    <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                        <a href="/profil" class="flex items-center">
                            Profil
                        </a>
                    </li>
                    <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                        <a href="/info" class="flex items-center">
                            Info
                        </a>
                    </li>
                    <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                        <a href="/layanan" class="flex items-center">
                            Layanan
                        </a>
                    </li>
                    <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                        <a href="/login" class="flex items-center">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
            <div class="items-center hidden gap-x-2 lg:flex border border-solid border-army-gelap rounded-lg p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-army-gelap">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <div id="current-time" class="text-lg font-bold text-army-gelap"></div>
            </div>
            <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>

    <!-- CONTENT -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="bg-zinc-50  text-center dark:bg-neutral-700 lg:text-left">
        <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
            Copyright 2024 © :
            <a href="#">SiRW</a>
        </div>
    </footer>
</body>

</html>

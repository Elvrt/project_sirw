<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <!-- NAVBAR -->
    <nav class="block w-full max-w-screen px-4 py-2 mx-auto text-white bg-abu-putih  shadow-md  bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-blue-gray-900">
            <div><a href="#" class="mr-4 block cursor-pointer antialiased ">
                    <img src="https://media.discordapp.net/attachments/1222905897848934450/1223143600188293180/image.png?ex=6618c83f&is=6606533f&hm=cab0f89b323bb3787adb4d760c00cc6813d8177267af06ac34416b8a20f35241&=&format=webp&quality=lossless" width="200"">
    </a>
    </div>
    <div class=" hidden lg:block">
                    <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2 text-blue-gray-90 text-army-gelap">
                            <a href="dashboard" class="flex items-center">
                                Beranda
                            </a>
                        </li>
                        <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                            <a href="profil" class="flex items-center">
                                Profil
                            </a>
                        </li>
                        <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                            <a href="info" class="flex items-center">
                                Info
                            </a>
                        </li>
                        <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                            <a href="layanan" class="flex items-center">
                                Layanan
                            </a>
                        </li>
                        <li class="flex items-center p-1 font-sans text-lg antialiased font-semibold leading-normal gap-x-2  text-army-gelap">
                            <a href="login" class="flex items-center">
                                Login
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="items-center hidden gap-x-2 lg:flex">
                <div class="relative flex w-full gap-2 md:w-max">
                    <div class="relative h-10 w-full  min-w-[288px]">
                        <input type="search" placeholder="Search" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent !border-t-blue-gray-300 bg-transparent px-3 py-2.5 pl-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder:text-blue-gray-300 placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2  focus:!border-blue-gray-300 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all before:content-none after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500"></label>
                    </div>
                    <div class="!absolute left-3 top-[13px]">
                        <svg width="13" height="14" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.97811 7.95252C10.2126 7.38634 10.3333 6.7795 10.3333 6.16667C10.3333 4.92899 9.84167 3.742 8.9665 2.86683C8.09133 1.99167 6.90434 1.5 5.66667 1.5C4.42899 1.5 3.242 1.99167 2.36683 2.86683C1.49167 3.742 1 4.92899 1 6.16667C1 6.7795 1.12071 7.38634 1.35523 7.95252C1.58975 8.51871 1.93349 9.03316 2.36683 9.4665C2.80018 9.89984 3.31462 10.2436 3.88081 10.4781C4.447 10.7126 5.05383 10.8333 5.66667 10.8333C6.2795 10.8333 6.88634 10.7126 7.45252 10.4781C8.01871 10.2436 8.53316 9.89984 8.9665 9.4665C9.39984 9.03316 9.74358 8.51871 9.97811 7.95252Z" fill="#CFD8DC"></path>
                            <path d="M13 13.5L9 9.5M10.3333 6.16667C10.3333 6.7795 10.2126 7.38634 9.97811 7.95252C9.74358 8.51871 9.39984 9.03316 8.9665 9.4665C8.53316 9.89984 8.01871 10.2436 7.45252 10.4781C6.88634 10.7126 6.2795 10.8333 5.66667 10.8333C5.05383 10.8333 4.447 10.7126 3.88081 10.4781C3.31462 10.2436 2.80018 9.89984 2.36683 9.4665C1.93349 9.03316 1.58975 8.51871 1.35523 7.95252C1.12071 7.38634 1 6.7795 1 6.16667C1 4.92899 1.49167 3.742 2.36683 2.86683C3.242 1.99167 4.42899 1.5 5.66667 1.5C6.90434 1.5 8.09133 1.99167 8.9665 2.86683C9.84167 3.742 10.3333 4.92899 10.3333 6.16667Z" stroke="#CFD8DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
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

    <!-- BERITA -->
    <p class="text-center text-army-gelap font-extrabold text-3xl drop-shadow-md mt-10 mb-10">BERITA</p>
    <div class="grid grid-cols-3 gap-4 ml-32 mr-32 bg-login2 rounded-lg">
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223524941799096401/image.png?ex=661a2b66&is=6607b666&hm=5cd597ed870316323ca49c8b7c90946675f37b5376c22d967624e9f1a0e5f095&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
    </div>
    <!-- AGENDA -->
    <p class="text-center text-army-gelap font-extrabold text-3xl drop-shadow-md mt-10 mb-10">AGENDA</p>
    <div class="grid grid-cols-3 gap-4 ml-32 mr-32 bg-login2 rounded-lg">
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
        <div class="item-center ml-10 mr-10 pt-10 pb-10">
        <a href="#" class="mr-4 block cursor-pointer antialiased ">
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless" alt="berita">
            <p class="bg-army-gelap ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias architecto accusamus quaerat aut consequatur culpa cumque error magnam repudiandae sit!</p>
        </a>
        </div>
    </div>
    
    <!-- FOOTER -->
<footer class="bg-zinc-50 text-center dark:bg-neutral-700 lg:text-left">
              <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
                Copyright 2024 © :
                <a href="https://www.instagram.com/athallah_alsha/">ATHALLAH ADJANI</a>
              </div>
            </footer>
</body>

</html>
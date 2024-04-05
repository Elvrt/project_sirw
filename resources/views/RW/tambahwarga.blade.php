<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md ">Form Tambah Data Warga</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-1 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Warga</p>

        <div class="px-3 py-2">
            <p class="font-medium">NIK</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan NIK..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">No KK</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan NoKK..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Nama</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Nama..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Kelamin</p>
            <div class="items">
                <div class="flex items-center ps-4   rounded  ">
                    <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki - Laki</label>
                    <div class="flex items-center ps-4  rounded dark:border-gray-700 ">
                        <input checked id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                    </div>
                </div>


            </div>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Tempat Lahir</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Tempat Lahir..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Tanggal Lahir</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Tanggal Lahir..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Agama</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Agama..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">Alamat</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Alamat..." required>
        </div>
        <div class="px-3 py-2">
            <p class="font-medium">RT</p>
            <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan RT..." required>
        </div>
        <div class="text-end px-10">
            <button class="bg-hijau  text-putih font-bold py-2 px-4 border border-blue-700 rounded">
                Button
            </button>
        </div>
    </div>

    </div>

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
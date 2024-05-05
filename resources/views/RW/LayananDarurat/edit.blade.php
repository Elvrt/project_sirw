<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Layanan Darurat</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data Layanan</p>

        <form action="{{url('/RW/layanan-darurat/'.$data->id_layanan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_layanan" class="block text-sm font-bold mb-2">Nama</label>
                <input type="text" name="nama_layanan" value="{{$data->nama_layanan}}" id="nama_layanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nomor_layanan" class="block text-sm font-bold mb-2">Nomor</label>
                <input type="text" name="nomor_layanan" value="{{$data->nomor_layanan}}" id="nomor_layanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </form>
        <div class="text-end px-10">
            <button class="bg-hijau  text-putih font-bold py-2 px-8 rounded-lg">
                Simpan
            </button>
        </div>
    </form>
</div>

        <!-- FOOTER -->
        <footer class="bg-zinc-50 dark:bg-neutral-700 text-center lg:text-left">
            <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
                Copyright 2024 © : SiRW</a>
            </div>
        </footer>
    </body>

    </html>

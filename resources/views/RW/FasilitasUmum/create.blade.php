<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Fasilitas Umum</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Fasilitas Umum</p>

        <form action="/RW/FasilitasUmum/" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="gambar_fasilitas" class="block text-sm font-bold mb-2">Gambar</label>
                <input type="file" name="gambar_fasilitas" id="gambar_fasilitas" value="{{old('gambar_fasilitas')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_fasilitas')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama_fasilitas" class="block text-sm font-bold mb-2">Nama</label>
                <input type="text" name="nama_fasilitas" id="nama_fasilitas" value="{{old('nama_fasilitas')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nama_fasilitas')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="keterangan_fasilitas" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_fasilitas" id="keterangan_fasilitas" cols="30" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('keterangan_fasilitas')}}</textarea>
                @error('keterangan_fasilitas')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                        <option value="{{$rt->id_rt}}" {{old('id_rt') == $rt->id_rt ? "selected" : ""}}>{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
                @error('id_rt')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat_fasilitas" class="block text-sm font-bold mb-2">Alamat</label>
                <input type="text" name="alamat_fasilitas" id="alamat_fasilitas" value="{{old('alamat_fasilitas')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('alamat_fasilitas')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
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



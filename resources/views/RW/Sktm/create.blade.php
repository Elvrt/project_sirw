<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data SKTM</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data SKTM</p>

        <form action="/RW/Sktm/" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pengaju</label>
                <select name="id_warga" id="id_warga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Nama</option>
                    @foreach($niks as $nik)
                        <option value="{{$nik->id_warga}}" {{old('id_warga') == $nik->id_warga ? "selected" : ""}}>{{$nik->nama_warga}}</option>
                    @endforeach
                </select>
                @error('id_warga')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="keterangan_sktm" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_sktm" id="keterangan_sktm" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('keterangan_sktm')}}</textarea>
                @error('keterangan_sktm')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gambar_rumah" class="block text-sm font-bold mb-2">Foto Rumah</label>
                <input type="file" name="gambar_rumah" id="gambar_rumah" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_rumah')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah_penghasilan" class="block text-sm font-bold mb-2">Jumlah Penghasilan</label>
                <input type="number" name="jumlah_penghasilan" id="jumlah_penghasilan" value="{{old('jumlah_penghasilan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('jumlah_penghasilan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gambar_slip" class="block text-sm font-bold mb-2">Foto Slip Gaji</label>
                <input type="file" name="gambar_slip" id="gambar_slip" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_slip')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah_anggota" class="block text-sm font-bold mb-2">Jumlah Anggota Keluarga</label>
                <input type="number" name="jumlah_anggota" id="jumlah_anggota" value="{{old('jumlah_anggota')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('jumlah_anggota')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah_kendaraan" class="block text-sm font-bold mb-2">Jumlah Kendaraan</label>
                <input type="number" name="jumlah_kendaraan" id="jumlah_kendaraan" value="{{old('jumlah_kendaraan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('jumlah_kendaraan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gambar_kendaraan" class="block text-sm font-bold mb-2">Foto Kendaraan</label>
                <input type="file" name="gambar_kendaraan" id="gambar_kendaraan" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_kendaraan')
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

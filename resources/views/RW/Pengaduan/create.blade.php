<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Pengaduan</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Pengaduan</p>

        <form action="/RW/Pengaduan/" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pelapor</label>
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
                <label for="judul_pengaduan" class="block text-sm font-bold mb-2">Judul Pengaduan</label>
                <input type="text" name="judul_pengaduan" id="judul_pengaduan" value="{{old('judul_pengaduan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('judul_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deskripsi_pengaduan" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_pengaduan" id="deskripsi_pengaduan" value="{{old('deskripsi_pengaduan')}}" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                @error('deskripsi_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="tanggal_pengaduan" class="block text-sm font-bold mb-2">Tanggal Pengaduan</label>
                <input type="datetime-local" name="tanggal_pengaduan" id="tanggal_pengaduan" value="{{old('tanggal_pengaduan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tanggal_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div> --}}
            {{-- <div class="mb-4">
                <label for="status_pengaduan" class="block text-sm font-bold mb-2">Status Pengaduan</label>
                <select name="status_pengaduan" id="status_pengaduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{old('status_pengaduan') == "Menunggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{old('status_pengaduan') == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Selesai" {{old('status_pengaduan') == "Selesai" ? "selected" : ""}}>Selesai</option>
                </select>
                @error('status_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div> --}}
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

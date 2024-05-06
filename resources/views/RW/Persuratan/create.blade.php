<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Warga</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Warga</p>

        <form action="/RW/Persuratan/" method="POST">
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
                <label for="jenis_persuratan" class="block text-sm font-bold mb-2">Jenis Surat</label>
                <select name="jenis_persuratan" id="jenis_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Jenis</option>
                    <option value="Surat Domisili" {{old('jenis_persuratan') == "Surat Domisili" ? "selected" : ""}}>Surat Domisili</option>
                    <option value="Surat Keterangan Usaha" {{old('jenis_persuratan') == "Surat Keterangan Usaha" ? "selected" : ""}}>Surat Keterangan Usaha</option>
                    <option value="Surat Kematian" {{old('jenis_persuratan') == "Surat Kematian" ? "selected" : ""}}>Surat Kematian</option>
                </select>
                @error('jenis_persuratan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="keterangan_persuratan" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_persuratan" id="keterangan_persuratan" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('keterangan_persuratan')}}</textarea>
                @error('keterangan_persuratan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="tanggal_persuratan" class="block text-sm font-bold mb-2">Tanggal Diajukan</label>
                <input type="datetime-local" name="tanggal_persuratan" id="tanggal_persuratan" value="{{old('tanggal_persuratan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tanggal_persuratan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status_persuratan" class="block text-sm font-bold mb-2">Status</label>
                <select name="status_persuratan" id="status_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{old('status_persuratan') == "Menunggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{old('status_persuratan') == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Dibuat di RT" {{old('status_persuratan') == "Dibuat di RT" ? "selected" : ""}}>Dibuat di RT</option>
                    <option value="Verifikasi RW" {{old('status_persuratan') == "Verifikasi RW" ? "selected" : ""}}>Verifikasi RW</option>
                    <option value="Diambil di RW" {{old('status_persuratan') == "Diambil di RW" ? "selected" : ""}}>Diambil di RW</option>
                </select>
                @error('status_persuratan')
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

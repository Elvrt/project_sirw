<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Persuratan</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data Persuratan</p>

        <form action="{{url('/RW/Persuratan/'.$data->id_persuratan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pengaju</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->warga->nama_warga}}</p>
            </div>
            <div class="mb-4">
                <label for="jenis_persuratan" class="block text-sm font-bold mb-2">Jenis Surat</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->jenis_persuratan}}</p>
            </div>
            <div class="mb-4">
                <label for="keterangan_persuratan" class="block text-sm font-bold mb-2">Keterangan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->keterangan_persuratan}}</p>
            </div>
            <div class="mb-4">
                <label for="tanggal_persuratan" class="block text-sm font-bold mb-2">Tanggal Diajukan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->tanggal_persuratan}}</p>
            </div>
            <div class="mb-4">
                <label for="status_persuratan" class="block text-sm font-bold mb-2">Status Persuratan</label>
                <select name="status_persuratan" id="status_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{old('status_persuratan', $data->status_persuratan) == "Menungggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{old('status_persuratan', $data->status_persuratan) == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Disetujui" {{old('status_persuratan', $data->status_persuratan) == "Disetujui" ? "selected" : ""}}>Disetujui</option>
                </select>
                @error('status_persuratan')
                <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="catatan_persuratan" class="block text-sm font-bold mb-2">Catatan Persuratan</label>
                <input type="text" name="catatan_persuratan" value="{{old('catatan_persuratan', $data->catatan_persuratan)}}" id="catatan_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('catatan_persuratan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-end px-10">
                <button class="bg-hijau  text-putih font-bold py-2 px-8 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
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

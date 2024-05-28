<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data SKTM</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data SKTM</p>

        <form action="{{url('/RT/Sktm/'.$data->id_sktm)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pengaju</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->warga->nama_warga}}</p>
            </div>
            <div class="mb-4">
                <label for="keterangan_sktm" class="block text-sm font-bold mb-2">Keterangan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->keterangan_sktm}}</p>
            </div>
            <div class="mb-4">
                <label for="gambar_rumah" class="block text-sm font-bold mb-2">Foto Rumah</label>
                @if ($data->gambar_rumah)
                    <img src="{{ url('assets/img/rumah/' . $data->gambar_rumah) }}" class="border rounded mb-2" width="500" alt="">
                @else
                    <Span>No Picture</Span>
                @endif
            </div>
            <div class="mb-4">
                <label for="jumlah_penghasilan" class="block text-sm font-bold mb-2">Jumlah Penghasilan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->jumlah_penghasilan}}</p>
            </div>
            <div class="mb-4">
                <label for="gambar_slip" class="block text-sm font-bold mb-2">Foto Slip Gaji</label>
                @if ($data->gambar_slip)
                    <img src="{{ url('assets/img/slip/' . $data->gambar_slip) }}" class="border rounded mb-2" width="500" alt="">
                @else
                    <Span>No Picture</Span>
                @endif
            </div>
            <div class="mb-4">
                <label for="jumlah_anggota" class="block text-sm font-bold mb-2">Jumlah Anggota Keluarga</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->jumlah_anggota}}</p>
            </div>
            <div class="mb-4">
                <label for="jumlah_kendaraan" class="block text-sm font-bold mb-2">Jumlah Kendaraan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->jumlah_kendaraan}}</p>
            </div>
            <div class="mb-4">
                <label for="tanggal_sktm" class="block text-sm font-bold mb-2">Tanggal Diajukan</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->tanggal_sktm}}</p>
            </div>
            <div class="mb-4">
                <label for="status_sktm" class="block text-sm font-bold mb-2">Status SKTM</label>
                <select name="status_sktm" id="status_sktm" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{old('status_sktm', $data->status_sktm) == "Menungggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{old('status_sktm', $data->status_sktm) == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Disetujui" {{old('status_sktm', $data->status_sktm) == "Disetujui" ? "selected" : ""}}>Disetujui</option>
                </select>
                @error('status_sktm')
                <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-4">
                <label for="catatan_sktm" class="block text-sm font-bold mb-2">Catatan SKTM</label>
                <input type="text" name="catatan_sktm" value="{{old('catatan_sktm', $data->catatan_sktm)}}" id="catatan_sktm" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('catatan_sktm')
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

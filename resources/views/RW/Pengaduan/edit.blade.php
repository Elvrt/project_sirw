<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data Pengaduan</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data Pengaduan</p>

        <form action="{{url('/RW/Pengaduan/'.$data->id_pengaduan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pelapor</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->warga->nama_warga}}</p>
            </div>
            <div class="mb-4">
                <label for="judul_pengaduan" class="block text-sm font-bold mb-2">Judul Pengaduan</label>
                <input type="text" name="judul_pengaduan" value="{{$data->judul_pengaduan}}" id="judul_pengaduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="deskripsi_pengaduan" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_pengaduan" id="deskripsi_pengaduan" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->deskripsi_pengaduan}}</textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal_pengaduan" class="block text-sm font-bold mb-2">Tanggal Pengaduan</label>
                <input type="datetime-local" name="tanggal_pengaduan" value="{{$data->tanggal_pengaduan}}" id="tanggal_pengaduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="status_pengaduan" class="block text-sm font-bold mb-2">Status Pengaduan</label>
                <select name="status_pengaduan" id="status_pengaduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{$data->status_pengaduan == "Menungggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{$data->status_pengaduan == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Selesai" {{$data->status_pengaduan == "Selesai" ? "selected" : ""}}>Selesai</option>
                </select>
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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA PENGADUAN</h1>
        <div class="mb-3">
            <label for="id_warga" class="block text-lg font-semibold mb-3">Nama Pelapor</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->warga->nama_warga}}</p>
        </div>
        <div class="mb-3">
            <label for="judul_pengaduan" class="block text-lg font-semibold mb-3">Judul Pengaduan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->judul_pengaduan}}</p>
        </div>
        <div class="mb-3">
            <label for="deskripsi_pengaduan" class="block text-lg font-semibold mb-3">Deskripsi</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->deskripsi_pengaduan}}</p>
        </div>
        <div class="mb-3">
            <label for="tanggal_pengaduan" class="block text-lg font-semibold mb-3">Tanggal Pengaduan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->tanggal_pengaduan}}</p>
        </div>
        <div class="mb-3">
            <label for="status_pengaduan" class="block text-lg font-semibold mb-3">Status</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->status_pengaduan}}</p>
        </div>
    </div>
</body>
</html>

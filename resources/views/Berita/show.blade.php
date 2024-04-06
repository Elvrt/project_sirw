<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA BERITA</h1>
        <div class="mb-3">
            <label for="gambar_berita" class="block text-lg font-semibold mb-3">Gambar</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->gambar_berita}}</p>
        </div>
        <div class="mb-3">
            <label for="judul_berita" class="block text-lg font-semibold mb-3">Judul</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->judul_berita}}</p>
        </div>
        <div class="mb-3">
            <label for="deskripsi_berita" class="block text-lg font-semibold mb-3">Deskripsi</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->deskripsi_berita}}</p>
        </div>
        <div class="mb-3">
            <label for="tanggal_berita" class="block text-lg font-semibold mb-3">Tanggal</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->tanggal_berita}}</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fasilitas Umum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA FASILITAS UMUM</h1>
        <div class="mb-3">
            <label for="gambar_fasilitas" class="block text-lg font-semibold mb-3">Gambar</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->gambar_fasilitas}}</p>
        </div>
        <div class="mb-3">
            <label for="nama_fasilitas" class="block text-lg font-semibold mb-3">Nama</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nama_fasilitas}}</p>
        </div>
        <div class="mb-3">
            <label for="keterangan_fasilitas" class="block text-lg font-semibold mb-3">Keterangan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->keterangan_fasilitas}}</p>
        </div>
        <div class="mb-3">
            <label for="id_rt" class="block text-lg font-semibold mb-3">RT</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->rt->nomor_rt}}</p>
        </div>
        <div class="mb-3">
            <label for="alamat_fasilitas" class="block text-lg font-semibold mb-3">Alamat</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->alamat_fasilitas}}</p>
        </div>
    </div>
</body>
</html>

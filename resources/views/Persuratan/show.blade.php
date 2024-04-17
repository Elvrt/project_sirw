<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persuratan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA PERSURATAN</h1>
        <div class="mb-3">
            <label for="id_warga" class="block text-lg font-semibold mb-3">Nama Pengaju</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->warga->nama_warga}}</p>
        </div>
        <div class="mb-3">
            <label for="jenis_persuratan" class="block text-lg font-semibold mb-3">Jenis Surat</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->jenis_persuratan}}</p>
        </div>
        <div class="mb-3">
            <label for="keterangan_persuratan" class="block text-lg font-semibold mb-3">Keterangan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->keterangan_persuratan}}</p>
        </div>
        <div class="mb-3">
            <label for="tanggal_persuratan" class="block text-lg font-semibold mb-3">Tanggal Diajukan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->tanggal_persuratan}}</p>
        </div>
        <div class="mb-3">
            <label for="status_persuratan" class="block text-lg font-semibold mb-3">Status</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->status_persuratan}}</p>
        </div>
    </div>
</body>
</html>

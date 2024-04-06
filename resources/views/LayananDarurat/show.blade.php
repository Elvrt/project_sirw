<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA LAYANAN DARURAT</h1>
        <div class="mb-3">
            <label for="nama_layanan" class="block text-lg font-semibold mb-3">Nama</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nama_layanan}}</p>
        </div>
        <div class="mb-3">
            <label for="nomor_layanan" class="block text-lg font-semibold mb-3">Nomor</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nomor_layanan}}</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Keluarga</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA KARTU KELUARGA</h1>
        <div class="mb-3">
            <label for="id_rt" class="block text-lg font-semibold mb-3">RT</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->rt->nomor_rt}}</p>
        </div>
        <div class="mb-3">
            <label for="no_kk" class="block text-lg font-semibold mb-3">No. KK</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->no_kk}}</p>
        </div>
        <div class="mb-3">
            <label for="id_warga" class="block text-lg font-semibold mb-3">Kepala Keluarga</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">
                @php
                    $kepalaKeluarga = $data->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                    if ($kepalaKeluarga) {
                        echo $kepalaKeluarga->nama_warga;
                    }
                @endphp
            </p>
        </div>
    </div>
</body>
</html>

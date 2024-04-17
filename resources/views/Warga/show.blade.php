<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA WARGA</h1>
        <div class="mb-3">
            <label for="id_rt" class="block text-lg font-semibold mb-3">RT</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->kartuKeluarga->rt->nomor_rt}}</p>
        </div>
        <div class="mb-3">
            <label for="no_kk" class="block text-lg font-semibold mb-3">No. KK</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->kartuKeluarga->no_kk}}</p>
        </div>
        <div class="mb-3">
            <label for="nik" class="block text-lg font-semibold mb-3">NIK</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nik}}</p>
        </div>
        <div class="mb-3">
            <label for="nama_warga" class="block text-lg font-semibold mb-3">Nama</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nama_warga}}</p>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="block text-lg font-semibold mb-3">Jenis Kelamin</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}}</p>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="block text-lg font-semibold mb-3">Tempat Lahir</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->tempat_lahir}}</p>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="block text-lg font-semibold mb-3">Tanggal Lahir</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->tanggal_lahir}}</p>
        </div>
        <div class="mb-3">
            <label for="alamat" class="block text-lg font-semibold mb-3">Alamat</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->alamat}}</p>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="block text-lg font-semibold mb-3">Nomor Telepon</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->nomor_telepon}}</p>
        </div>
        <div class="mb-3">
            <label for="agama" class="block text-lg font-semibold mb-3">Agama</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->agama}}</p>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="block text-lg font-semibold mb-3">Pekerjaan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->pekerjaan}}</p>
        </div>
        <div class="mb-3">
            <label for="penghasilan" class="block text-lg font-semibold mb-3">Penghasilan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->penghasilan}}</p>
        </div>
        <div class="mb-3">
            <label for="status_hubungan" class="block text-lg font-semibold mb-3">Status Hubungan</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->status_hubungan}}</p>
        </div>
    </div>
</body>
</html>

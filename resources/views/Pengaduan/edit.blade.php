<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA PENGADUAN</h1>
        <form action="{{url('/pengaduan/'.$data->id_pengaduan)}}" method="POST">
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
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

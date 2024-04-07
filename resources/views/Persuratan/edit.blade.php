<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persuratan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA PERSURATAN</h1>
        <form action="{{url('/persuratan/'.$data->id_persuratan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pengaju</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->warga->nama_warga}}</p>
            </div>
            <div class="mb-4">
                <label for="jenis_persuratan" class="block text-sm font-bold mb-2">Jenis Surat</label>
                <select name="jenis_persuratan" id="sjenis_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Surat Domisili" {{$data->jenis_persuratan == "Surat Domisili" ? "selected" : ""}}>Surat Domisili</option>
                    <option value="Surat Keterangan Usaha" {{$data->jenis_persuratan == "Surat Keterangan Usaha" ? "selected" : ""}}>Surat Keterangan Usaha</option>
                    <option value="Surat Kematian" {{$data->jenis_persuratan == "Surat Kematian" ? "selected" : ""}}>Surat Kematian</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="keterangan_persuratan" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_persuratan" id="keterangan_persuratan" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->keterangan_persuratan}}</textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal_persuratan" class="block text-sm font-bold mb-2">Tanggal Diajukan</label>
                <input type="datetime-local" name="tanggal_persuratan" value="{{$data->tanggal_persuratan}}" id="tanggal_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="status_persuratan" class="block text-sm font-bold mb-2">Status Persuratan</label>
                <select name="status_persuratan" id="status_persuratan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Menunggu" {{$data->status_persuratan == "Menungggu" ? "selected" : ""}}>Menunggu</option>
                    <option value="Ditolak" {{$data->status_persuratan == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                    <option value="Dibuat di RT" {{$data->status_persuratan == "Selesai" ? "selected" : ""}}>Dibuat di RT</option>
                    <option value="Verifikasi RW" {{$data->status_persuratan == "Selesai" ? "selected" : ""}}>Verifikasi RW</option>
                    <option value="Diambil di RW" {{$data->status_persuratan == "Selesai" ? "selected" : ""}}>Diambil di RW</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

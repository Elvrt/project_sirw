<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iuran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA IURAN</h1>
        <form action="{{url('/iuran/'.$data->id_iuran)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->kartuKeluarga->rt->nomor_rt}}</p>
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->kartuKeluarga->no_kk}}</p>
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @php
                        $kepalaKeluarga = $data->kartuKeluarga->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                        if ($kepalaKeluarga) {
                            echo $kepalaKeluarga->nama_warga;
                        }
                    @endphp
                </p>
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-sm font-bold mb-2">Nominal</label>
                <input type="text" name="nominal" value="{{$data->nominal}}" id="nominal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="status_iuran" class="block text-sm font-bold mb-2">Status</label>
                <select name="status_iuran" id="status_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Lunas" {{$data->status_iuran == "Lunas" ? "selected" : ""}}>Lunas</option>
                    <option value="Belum Lunas" {{$data->status_iuran == "Belum Lunas" ? "selected" : ""}}>Belum Lunas</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal_iuran" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_iuran" value="{{$data->tanggal_iuran}}" id="tanggal_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

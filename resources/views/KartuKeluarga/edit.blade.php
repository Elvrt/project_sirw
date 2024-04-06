<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Keluarga</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA KARTU KELUARGA</h1>
        <form action="{{url('/kartu-keluarga/'.$data->id_kk)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                    <option value="{{$rt->id_rt}}" {{$data->id_rt == $rt->id_rt ? 'selected' : ''}}>{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <input type="text" name="no_kk" value="{{$data->no_kk}}" id="no_kk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @php
                        $kepalaKeluarga = $data->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                        if ($kepalaKeluarga) {
                            echo $kepalaKeluarga->nama_warga;
                        }
                    @endphp
                </p>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

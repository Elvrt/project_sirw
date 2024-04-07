<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fasilitas Umum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA FASILITAS UMUM</h1>
        <form action="{{url('/fasilitas-umum/'.$data->id_fasilitas)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="gambar_fasilitas" class="block text-sm font-bold mb-2">Gambar</label>
                <input type="file" name="gambar_fasilitas" value="{{$data->gambar_fasilitas}}" id="gambar_fasilitas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_fasilitas" class="block text-sm font-bold mb-2">Nama</label>
                <input type="text" name="nama_fasilitas" value="{{$data->nama_fasilitas}}" id="nama_fasilitas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="keterangan_fasilitas" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_fasilitas" id="keterangan_fasilitas" cols="30" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->keterangan_fasilitas}}</textarea>
            </div>
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                    <option value="{{$rt->id_rt}}" {{$data->id_rt == $rt->id_rt ? 'selected' : ''}}>{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="alamat_fasilitas" class="block text-sm font-bold mb-2">Alamat</label>
                <input type="text" name="alamat_fasilitas" value="{{$data->alamat_fasilitas}}" id="alamat_fasilitas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

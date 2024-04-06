<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA LAYANAN DARURAT</h1>
        <form action="{{url('/layanan-darurat/'.$data->id_layanan)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama_layanan" class="block text-sm font-bold mb-2">Nama</label>
                <input type="text" name="nama_layanan" value="{{$data->nama_layanan}}" id="nama_layanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nomor_layanan" class="block text-sm font-bold mb-2">Nomor</label>
                <input type="text" name="nomor_layanan" value="{{$data->nomor_layanan}}" id="nomor_layanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

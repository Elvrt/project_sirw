<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur RW</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">TAMBAH DATA STRUKTUR RW</h1>
        <form action="/struktur-rw" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="kode_struktur" class="block text-sm font-bold mb-2">Kode</label>
                <input type="text" name="kode_struktur" id="kode_struktur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="nama_struktur" class="block text-sm font-bold mb-2">Nama Struktur</label>
                <input type="text" name="nama_struktur" id="nama_struktur" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Warga</label>
                <select name="id_warga" id="id_warga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Nama</option>
                    @foreach($niks as $nik)
                    @if(!in_array($nik->id_warga, $existingIds)) 
                        <option value="{{$nik->id_warga}}">{{$nik->nama_warga}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

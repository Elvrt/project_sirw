<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA AGENDA</h1>
        <form action="{{url('/agenda/'.$data->id_agenda)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="gambar_agenda" class="block text-sm font-bold mb-2">Gambar</label>
                <input type="file" name="gambar_agenda" value="{{$data->gambar_agenda}}" id="gambar_agenda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="judul_agenda" class="block text-sm font-bold mb-2">Judul</label>
                <input type="text" name="judul_agenda" value="{{$data->judul_agenda}}" id="judul_agenda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="deskripsi_agenda" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_agenda" id="deskripsi_agenda" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->deskripsi_agenda}}</textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal_agenda" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_agenda" value="{{$data->tanggal_agenda}}" id="tanggal_agenda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

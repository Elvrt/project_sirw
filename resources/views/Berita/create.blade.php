<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">TAMBAH DATA BERITA</h1>
        <form action="/berita" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="gambar_berita" class="block text-sm font-bold mb-2">Gambar</label>
                <input type="file" name="gambar_berita" id="gambar_berita" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="judul_berita" class="block text-sm font-bold mb-2">Judul</label>
                <input type="text" name="judul_berita" id="judul_berita" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="deskripsi_berita" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_berita" id="deskripsi_berita" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal_berita" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_berita" id="tanggal_berita" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

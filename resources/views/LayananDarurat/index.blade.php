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
        <h1 class="text-3xl font-bold mb-5">DATA LAYANAN DARURAT</h1>
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{session('success')}}</span>
        </div>
        @endif
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{session('error')}}</span>
        </div>
        @endif
        <a href="/layanan-darurat/create"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5 inline-block">Add</a>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">No.</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Nomor</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="border px-4 py-2">{{$loop->iteration}}</td>
                    <td class="border px-4 py-2">{{$item->nama_layanan}}</td>
                    <td class="border px-4 py-2">{{$item->nomor_layanan}}</td>
                    <td class="border px-4 py-2">
                        <div class="flex gap-3">
                            <a href="/layanan-darurat/{{$item->id_layanan}}/edit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <a href="/layanan-darurat/{{$item->id_layanan}}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Detail</a>
                            <form action="{{url('layanan-darurat/'.$item->id_layanan)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="return confirm('Apakah anda ingin menghapus data ini ?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

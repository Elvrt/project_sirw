<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white p-5">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">DETAIL DATA USER</h1>
        <div class="mb-3">
            <label for="id_role" class="block text-lg font-semibold mb-3">Role</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->role->nama_role}}</p>
        </div>
        <div class="mb-3">
            <label for="id_warga" class="block text-lg font-semibold mb-3">Nama</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->warga->nama_warga}}</p>
        </div>
        <div class="mb-3">
            <label for="username" class="block text-lg font-semibold mb-3">Username</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->username}}</p>
        </div>
        <div class="mb-3">
            <label for="password" class="block text-lg font-semibold mb-3">Password</label>
            <p class="text-lg border-2 border-gray-300 rounded-md p-3">{{$data->password}}</p>
        </div>
    </div>
</body>
</html>

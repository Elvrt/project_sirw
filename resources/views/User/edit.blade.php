<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">EDIT DATA USER</h1>
        <form action="{{url('/user/'.$data->id_user)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_role" class="block text-sm font-bold mb-2">Role</label>
                <select name="id_role" id="id_role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Role</option>
                    @foreach($roles as $role)
                    <option value="{{$role->id_role}}" {{$data->id_role == $role->id_role ? 'selected' : ''}}>{{$role->nama_role}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama</label>
                <select name="id_warga" id="id_warga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Nama</option>
                    @foreach($niks as $nik)
                        @if($data->warga->id_warga == $nik->id_warga)
                                <option value="{{$nik->id_warga}}" selected>{{$nik->nama_warga}}</option>
                            @elseif(!in_array($nik->id_warga, $existingIds))
                                <option value="{{$nik->id_warga}}">{{$nik->nama_warga}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="username" class="block text-sm font-bold mb-2">Username</label>
                <input type="text" name="username" value="{{$data->username}}" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Username</label>
                <input type="password" name="password" value="{{$data->password}}" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</body>
</html>

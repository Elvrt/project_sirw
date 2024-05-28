<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data User</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data User</p>

        <form action="{{url('/RW/User/'.$data->id_user)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- <div class="mb-4">
                <label for="id_role" class="block text-sm font-bold mb-2">Role</label>
                <select name="id_role" id="id_role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Role</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id_role}}" {{old('id_role', $data->role->id_role) == $role->id_role ? "selected" : ""}}>{{$role->nama_role}}</option>
                    @endforeach
                </select>
                @error('id_role')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="mb-4">
                <label for="id_role" class="block text-sm font-bold mb-2">Role</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->role->nama_role}}</p>
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Warga</label>
                <select name="id_warga" id="id_warga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Nama</option>
                    @foreach($niks as $nik)
                        @if($data->warga->id_warga == $nik->id_warga)
                            <option value="{{$nik->id_warga}}" selected>{{$nik->nama_warga}}</option>
                        @elseif(!in_array($nik->id_warga, $existingIds))
                            <option value="{{$nik->id_warga}}">{{$nik->nama_warga}}</option>
                        @endif
                    @endforeach
                </select>
                @error('id_warga')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="block text-sm font-bold mb-2">Username</label>
                <input type="text" name="username" value="{{old('username', $data->username)}}" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('username')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" value="{{old('password')}}" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @else
                    <div class="form-text text-muted">Abaikan (jangan diisi) jika tidak ingin mengganti password user.</div>
                @enderror
            </div>
            <div class="text-end px-10">
                <button class="bg-hijau  text-putih font-bold py-2 px-8 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- FOOTER -->
    <footer class="bg-zinc-50 dark:bg-neutral-700 text-center lg:text-left">
        <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
            Copyright 2024 © : SiRW</a>
        </div>
    </footer>
</body>

</html>

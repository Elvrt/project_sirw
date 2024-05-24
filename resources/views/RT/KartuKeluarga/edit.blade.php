<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data Kartu Keluarga</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data Kartu Keluarga</p>

        <form action="{{url('/RT/KartuKeluarga/'.$data->id_kk)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                        <option value="{{$rt->id_rt}}" {{old('id_rt', $data->rt->id_rt) == $rt->id_rt ? "selected" : ""}}>{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
                @error('id_rt')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">No.KK</label>
                <input type="number" name="no_kk" id="no_kk" value="{{old('no_kk', $data->no_kk)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('no_kk')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @php
                        $kepalaKeluarga = $data->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                        if ($kepalaKeluarga) {
                            echo $kepalaKeluarga->nama_warga;
                        }
                    @endphp
                </p>
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


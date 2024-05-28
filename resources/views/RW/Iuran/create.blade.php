<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Iuran</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Iuran</p>

        <form action="/RW/Iuran/" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                        <option value="{{$rt->id_rt}}" {{old('id_rt') == $rt->id_rt ? "selected" : ""}}>{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
                @error('id_rt')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_kk" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <select name="id_kk" id="id_kk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Kepala Keluarga</option>
                    @foreach($kks as $kk)
                        <option value="{{$kk->id_kk}}" {{old('id_kk') == $kk->id_kk ? "selected" : ""}}>{{$kk->nama_warga}}</option>
                    @endforeach
                </select>
                @error('id_kk')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-sm font-bold mb-2">Nominal</label>
                <input type="number" name="nominal" id="nominal" value="{{old('nominal')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nominal')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status_iuran" class="block text-sm font-bold mb-2">Status</label>
                <select name="status_iuran" id="status_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Status</option>
                    <option value="Lunas" {{old('status_iuran') == "Lunas" ? "selected" : ""}}>Lunas</option>
                    <option value="Belum Lunas" {{old('status_iuran') == "Belum Lunas" ? "selected" : ""}}>Belum Lunas</option>
                </select>
                @error('status_iuran')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_iuran" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="date" name="tanggal_iuran" id="tanggal_iuran" value="{{old('tanggal_iuran')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tanggal_iuran')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
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

        <script>
            // Menggunakan JavaScript untuk mengatur opsi dropdown No. KK berdasarkan RT yang dipilih
            document.getElementById('id_rt').addEventListener('change', function() {
            var idRt = this.value; // Mendapatkan nilai id_rt yang dipilih
            var idKkSelect = document.getElementById('id_kk'); // Dropdown No. KK
            idKkSelect.innerHTML = ''; // Menghapus semua opsi yang ada
            // Menambahkan opsi default
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = 'Pilih Kepala Keluarga';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.classList.add('text-gray-400');
            idKkSelect.appendChild(defaultOption);
            // Menambahkan opsi No. KK berdasarkan id_rt yang dipilih
            @foreach($kks as $kk)
                if ('{{$kk->id_rt}}' == idRt) {
                    var option = document.createElement('option');
                    option.value = '{{$kk->id_kk}}';
                    option.text = '{{$kk->nama_warga}}';
                    idKkSelect.appendChild(option);
                }
            @endforeach
        });
        </script>
    </body>
</html>

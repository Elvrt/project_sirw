<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Data Warga</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Form Tambah Data Warga</p>

        <form action="/RW/Warga/" method="POST">
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
                <label for="id_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <select name="id_kk" id="id_kk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih No. KK</option>
                    @foreach($kks as $kk)
                        <option value="{{$kk->id_kk}}" {{old('id_kk') == $kk->id_kk ? "selected" : ""}}>{{$kk->no_kk}}</option>
                    @endforeach
                </select>
                @error('id_kk')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nik" class="block text-sm font-bold mb-2">NIK</label>
                <input type="number" name="nik" id="nik" value="{{old('nik')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nik')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama_warga" class="block text-sm font-bold mb-2">Nama</label>
                <input type="text" name="nama_warga" id="nama_warga" value="{{old('nama_warga')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nama_warga')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-sm font-bold mb-2">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih JK</option>
                    <option value="L" {{old('jenis_kelamin') == "L" ? "selected" : ""}}>Laki-laki</option>
                    <option value="P" {{old('jenis_kelamin') == "P" ? "selected" : ""}}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tempat_lahir" class="block text-sm font-bold mb-2">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{old('tempat_lahir')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tempat_lahir')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-sm font-bold mb-2">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{old('tanggal_lahir')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tanggal_lahir')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-bold mb-2">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{old('alamat')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('alamat')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nomor_telepon" class="block text-sm font-bold mb-2">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{old('nomor_telepon')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('nomor_telepon')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="agama" class="block text-sm font-bold mb-2">Agama</label>
                <select name="agama" id="agama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Agama</option>
                    <option value="Islam" {{old('agama') == "Islam" ? "selected" : ""}}>Islam</option>
                    <option value="Kristen Katolik" {{old('agama') == "Kristen Katolik" ? "selected" : ""}}>Kristen Katolik</option>
                    <option value="Kristen Protestan" {{old('agama') == "Kristen Protestan" ? "selected" : ""}}>Kristen Protestan</option>
                    <option value="Hindu" {{old('agama') == "Hindu" ? "selected" : ""}}>Hindu</option>
                    <option value="Budha" {{old('agama') == "Budha" ? "selected" : ""}}>Budha</option>
                    <option value="Konghucu" {{old('agama') == "Konghucu" ? "selected" : ""}}>Konghucu</option>
                </select>
                @error('agama')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pekerjaan" class="block text-sm font-bold mb-2">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" value="{{old('pekerjaan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('pekerjaan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="penghasilan" class="block text-sm font-bold mb-2">Penghasilan</label>
                <input type="number" name="penghasilan" id="penghasilan" value="{{old('penghasilan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('penghasilan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status_hubungan" class="block text-sm font-bold mb-2">Status Hubungan</label>
                <select name="status_hubungan" id="status_hubungan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Status</option>
                    <option value="Kepala Keluarga" {{old('status_hubungan') == "Kepala Keluarga" ? "selected" : ""}}>Kepala Keluarga</option>
                    <option value="Anggota" {{old('status_hubungan') == "Anggota" ? "selected" : ""}}>Anggota</option>
                </select>
                @error('status_hubungan')
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
    </body>

    </html>

    <script>
        // Menggunakan JavaScript untuk mengatur opsi dropdown No. KK berdasarkan RT yang dipilih
        document.getElementById('id_rt').addEventListener('change', function() {
            var idRt = this.value; // Mendapatkan nilai id_rt yang dipilih
            var idKkSelect = document.getElementById('id_kk'); // Dropdown No. KK
            idKkSelect.innerHTML = ''; // Menghapus semua opsi yang ada
            // Menambahkan opsi default
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = 'Pilih No. KK';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.classList.add('text-gray-400');
            idKkSelect.appendChild(defaultOption);
            // Menambahkan opsi No. KK berdasarkan id_rt yang dipilih
            @foreach($kks as $kk)
                if ('{{$kk->id_rt}}' == idRt) {
                    var option = document.createElement('option');
                    option.value = '{{$kk->id_kk}}';
                    option.text = '{{$kk->no_kk}}';
                    idKkSelect.appendChild(option);
                }
            @endforeach
        });
    </script>

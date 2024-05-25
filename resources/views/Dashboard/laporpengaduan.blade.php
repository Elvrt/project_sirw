@extends('./layout/warga')

@section('content')
    <!-- CONTENT -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">FORM PENGADUAN</p>
    <div class="bg-putih shadow-md mx-5 mb-2 px-3">
        <p class="text-sub">Form Pengaduan</p>
    </div>

    <div class="bg-putih shadow-md mx-5 py-10 px-8 relative">
        <a href="/pengaduan" class="bg-kuning text-putih py-2 px-4 rounded-lg absolute top-0 left-0 mt-4 ml-4 flex items-center hover:bg-kuning-gelap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>
        </a>
        <form action="/laporpengaduan" method="POST" class="mt-10">
            @csrf
            @method('POST')
            <div class="mb-10">
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
            <div class="mb-10">
                <label for="id_warga" class="block text-sm font-bold mb-2">Nama Pelapor</label>
                <select name="id_warga" id="id_warga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Nama</option>
                    @foreach($niks as $nik)
                        <option value="{{$nik->id_warga}}" {{old('id_warga') == $nik->id_warga ? "selected" : ""}}>{{$nik->nama_warga}}</option>
                    @endforeach
                </select>
                @error('id_warga')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-10">
                <label for="judul_pengaduan" class="block text-sm font-bold mb-2">Judul Pengaduan</label>
                <input type="text" name="judul_pengaduan" id="judul_pengaduan" value="{{old('judul_pengaduan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('judul_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-10">
                <label for="deskripsi_pengaduan" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_pengaduan" id="deskripsi_pengaduan" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('deskripsi_pengaduan')}}</textarea>
                @error('deskripsi_pengaduan')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button class=" w-max px-10 bg-coklat-muda text-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat mt-10 mb-6">Kirim</button>
            </div>
        </form>
    </div>
    <script>
        // Menggunakan JavaScript untuk mengatur opsi dropdown Nama Warga berdasarkan RT yang dipilih
        document.getElementById('id_rt').addEventListener('change', function() {
            var idRt = this.value; // Mendapatkan nilai id_rt yang dipilih
            var idWargaSelect = document.getElementById('id_warga'); // Dropdown Nama Warga
            idWargaSelect.innerHTML = ''; // Menghapus semua opsi yang ada

            // Menambahkan opsi default
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = 'Pilih Nama';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.classList.add('text-gray-400');
            idWargaSelect.appendChild(defaultOption);

            // Menambahkan opsi Nama Warga berdasarkan id_rt yang dipilih
            @foreach($niks as $nik)
                if ('{{$nik->kartuKeluarga->rt->id_rt}}' == idRt) {
                    var option = document.createElement('option');
                    option.value = '{{$nik->id_warga}}';
                    option.text = '{{$nik->nama_warga}}';
                    idWargaSelect.appendChild(option);
                }
            @endforeach
        });
    </script>
@endsection

<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data Berita</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data berita</p>

        <form action="{{url('/RT/Berita/'.$data->id_berita)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="gambar_berita" class="block text-sm font-bold mb-2">Gambar</label>
                @if ($data->gambar_berita)
                    <img src="{{$data->gambar_berita}}" class="border rounded mb-2" width="200px" alt="gambar berita">
                @else
                    <Span>No Picture</Span>
                @endif
                <input type="file" name="gambar_berita" value="" id="gambar_berita" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_berita')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="judul_berita" class="block text-sm font-bold mb-2">Judul</label>
                <input type="text" name="judul_berita" value="{{old('judul_berita', $data->judul_berita)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('judul_berita')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deskripsi_berita" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_berita" id="deskripsi_berita" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('deskripsi_berita', $data->deskripsi_berita)}}</textarea>
                @error('deskripsi_berita')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_berita" class="block text-sm font-bold mb-2">Tanggal Upload</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{\Carbon\Carbon::parse($data->tanggal_berita)->format('d M Y H:i')}} WIB</p>
            </div>
            <div class="text-end px-10">
                <button class="bg-hijau  text-putih font-bold py-2 px-8 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
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

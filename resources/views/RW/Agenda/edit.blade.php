<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Edit Data Agenda</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Edit Data Agenda</p>

        <form action="{{url('/RW/Agenda/'.$data->id_agenda)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="gambar_agenda" class="block text-sm font-bold mb-2">Gambar</label>
                @if ($data->gambar_agenda)
                    <img src="{{ url('assets/img/agenda/' . $data->gambar_agenda) }}" class="border rounded mb-2" width="200px" alt="">
                @else
                    <Span>No Picture</Span>
                @endif
                <input type="file" name="gambar_agenda" value="" id="gambar_agenda" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('gambar_agenda')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="judul_agenda" class="block text-sm font-bold mb-2">Judul</label>
                <input type="text" name="judul_agenda" value="{{old('judul_agenda', $data->judul_agenda)}}" id="judul_agenda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('judul_agenda')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deskripsi_agenda" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi_agenda" id="deskripsi_agenda" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('deskripsi_agenda', $data->deskripsi_agenda)}}</textarea>
                @error('deskripsi_agenda')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_agenda" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_agenda" value="{{old('tanggal_agenda', $data->tanggal_agenda)}}" id="tanggal_agenda" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('tanggal_agenda')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
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

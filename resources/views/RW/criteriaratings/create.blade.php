<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Rating Kriteria</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Tambah Raring Kriteria</p>

        <form action="{{ route('RW.criteriaratings.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="criteria_id" class="block text-sm font-bold mb-2">Kriteria</label>
                <select name="criteria_id" id="criteria_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Kriteria</option>
                    @foreach ($criteriaweight as $c)
                        <option value="{{ $c->id }}" {{old('criteria_id') == $c->id ? "selected" : ""}}>{{ $c->name }}</option>
                    @endforeach
                </select>
                @error('type')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="rating" class="block text-sm font-bold mb-2">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}" placeholder="Masukkan rating" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('rating')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-bold mb-2">Deskripsi</label>
                <input type="text" name="description" id="description" value="{{old('description')}}" placeholder="Masukkan deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('description')
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

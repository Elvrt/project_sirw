<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body bgcolor="#FCFBF9">
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5 mb-5">Form Tambah Alternatif</p>
    <div class="bg-backgroundform md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="font-medium text-sub">Tambah Alternatif</p>

        <form action="{{ route('RW.alternatives.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <input type="number" name="no_kk" id="no_kk" value="{{old('no_kk')}}" placeholder="Masukkan nomor kk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('no_kk')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kepala_keluarga" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <input type="text" name="kepala_keluarga" id="kepala_keluarga" value="{{old('kepala_keluarga')}}" placeholder="Masukkan kepala keluarga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('kepala_keluarga')
                    <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                @enderror
            </div>
            @foreach ($criteriaweights as $cw)
                <div class="mb-4">
                    <label for="criteria[{{$cw->id}}]" class="block text-sm font-bold mb-2">{{$cw->name}} :</label>
                    <select id="criteria[{{$cw->id}}]" name="criteria[{{$cw->id}}]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @php
                            $res = $criteriaratings->where('criteria_id', $cw->id)->all();
                        @endphp
                        <option value="" disabled selected class="text-gray-400">Pilih Kriteria</option>
                        @foreach ($res as $cr)
                            <option value="{{$cr->id}}">{{$cr->description}}</option>
                        @endforeach
                    </select>
                    @error('criteria.' . $cw->id)
                        <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
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

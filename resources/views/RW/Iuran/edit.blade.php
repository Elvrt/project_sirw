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
        <p class="font-medium text-sub">Edit Data Iuran</p>

        <form action="{{url('/RW/Iuran/'.$data->id_iuran)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->kartuKeluarga->rt->nomor_rt}}</p>
            </div>
            <div class="mb-4">
                <label for="no_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$data->kartuKeluarga->no_kk}}</p>
            </div>
            <div class="mb-4">
                <label for="id_warga" class="block text-sm font-bold mb-2">Kepala Keluarga</label>
                <p class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @php
                        $kepalaKeluarga = $data->kartuKeluarga->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                        if ($kepalaKeluarga) {
                            echo $kepalaKeluarga->nama_warga;
                        }
                    @endphp
                </p>
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-sm font-bold mb-2">Nominal</label>
                <input type="text" name="nominal" value="{{$data->nominal}}" id="nominal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="status_iuran" class="block text-sm font-bold mb-2">Status</label>
                <select name="status_iuran" id="status_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled class="text-gray-400">Pilih Status</option>
                    <option value="Lunas" {{$data->status_iuran == "Lunas" ? "selected" : ""}}>Lunas</option>
                    <option value="Belum Lunas" {{$data->status_iuran == "Belum Lunas" ? "selected" : ""}}>Belum Lunas</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal_iuran" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_iuran" value="{{$data->tanggal_iuran}}" id="tanggal_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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

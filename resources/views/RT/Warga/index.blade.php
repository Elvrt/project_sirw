<!DOCTYPE html>
<html lang="en">
<head>
    @extends('./layout/rt')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warga</title>
    @vite('resources/css/table.css')
</head>
<body>
<div class="justify-center flex sm:block">
    <div class="p-4 sm:ml-64">
        <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Data Warga</p>
        <div class="bg-putih drop-shadow-md mx-2 px-10 p-4">
            <a href="Warga/create">
                <button class="bg-hijau hover:bg-hijau-gelap text-putih font-bold py-2 px-4 rounded-lg float-right">
                    + Tambah Data Warga
                </button>
            </a>
            <p class="text-sub ml-4">Data</p>
        </div>

        <div class="flex justify-center">
            @section('content')
            <!-- TABLE -->
            <div class="bg-putih drop-shadow-md mx-2 mt-5">
                <div class="card-body pl-10 pt-5">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group p-5">
                                    <form id="filter-form" method="GET" action="{{ url('/RT/Warga') }}">
                                        <label class="col-1 control-label col-form-label">Filter:</label>
                                        <div class="flex justify-between max-w-xs relative">
                                            <div class="cursor-pointer flex-grow mr-2">
                                                <small class="form-text text-muted">Nomor RT</small>
                                                <select class="border form-control w-full" id="id_rt" name="id_rt">
                                                    <option value="" selected>-  Semua -</option>
                                                    @foreach($rt as $data)
                                                        <option value="{{ $data->id_rt }}" {{ request('id_rt') == $data->id_rt ? 'selected' : '' }}>{{ $data->nomor_rt }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="cursor-pointer flex-grow ml-2">
                                                <small class="form-text text-muted">Jenis Kelamin</small>
                                                <select class="border form-control w-full" id="jk" name="jk">
                                                    <option value="" selected>-  Semua -</option>
                                                    <option value="L" {{request('jk') == "L" ? "selected" : ""}}>Laki-laki</option>
                                                    <option value="P" {{request('jk') == "P" ? "selected" : ""}}>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 offset-md-6">
                                                <div class="form-group text-right pr-10">
                                                    <div class="col-md-6 offset-md-6">
                                                        <label class="col-1 control-label col-form-label">Search:</label>
                                                        <input type="search" class="form-control rounded border pl-2" id="search" name="search" value="{{ request('search') }}" placeholder="Masukkan Pencarian">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-14 mt-4 p-10 sm:ml-68 drop-shadow-md text-center mr-9">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 texbg-abu-tua px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 tbg-abu-tua px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                <div class="col-span-6 pl-10 pr-10 sm:ml-68 text-left ml-10 pt-0">
                    <!-- HEADER -->
                    <div class="table-responsive">
                        <div class="overflow-x-auto">
                        <table id="table_warga" class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">No.</th>
                                    <th class="px-4 py-2">RT</th>
                                    <th class="px-4 py-2">No. KK</th>
                                    <th class="px-4 py-2">NIK</th>
                                    <th class="px-4 py-2">Nama</th>
                                    <th class="px-4 py-2">Jenis Kelamin</th>
                                    <th class="px-4 py-2">Tempat Lahir</th>
                                    <th class="px-4 py-2">Tanggal Lahir</th>
                                    <th class="px-4 py-2">Alamat</th>
                                    <th class="px-4 py-2">No. Telp</th>
                                    <th class="px-4 py-2">Agama</th>
                                    <th class="px-4 py-2">Pekerjaan</th>
                                    <th class="px-4 py-2">Penghasilan</th>
                                    <th class="px-4 py-2">Status Hubungan</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = $startNumber;
                                @endphp
                                @forelse ($warga as $data)
                                    <tr>
                                        <td class="px-4 py-2">{{ $i++ }}</td></td>
                                        <td class="px-4 py-2">{{ $data->kartuKeluarga->rt->nomor_rt }}</td>
                                        <td class="px-4 py-2">{{ $data->kartuKeluarga->no_kk }}</td>
                                        <td class="px-4 py-2">{{ $data->nik }}</td>
                                        <td class="px-4 py-2">{{ $data->nama_warga }}</td>
                                        <td class="px-4 py-2">{{ $data->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                        <td class="px-4 py-2">{{ $data->tempat_lahir }}</td>
                                        <td class="px-4 py-2">{{ $data->tanggal_lahir }}</td>
                                        <td class="px-4 py-2">{{ $data->alamat }}</td>
                                        <td class="px-4 py-2">{{ $data->nomor_telepon }}</td>
                                        <td class="px-4 py-2">{{ $data->agama }}</td>
                                        <td class="px-4 py-2">{{ $data->pekerjaan }}</td>
                                        <td class="px-4 py-2">{{ $data->penghasilan }}</td>
                                        <td class="px-4 py-2">{{ $data->status_hubungan}}</td>
                                        <td class="px-4 py-2">
                                            <div class="flex gap-3">
                                                <a href="/RT/Warga/{{ $data->id_warga }}/edit" class="bg-kuning hover:bg-kuning-gelap text-putih font-medium py-2 px-4 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                    </svg>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#ModalShow{{ $data->id_warga }}" class="detail bg-abu-tua hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                <form action="{{ url('/RT/Warga/' . $data->id_warga) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-merah hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="15" class="text-center px-4 py-2">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                        <div class="mt-5  ">
                            {{ $warga->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const filterForm = document.getElementById('filter-form');
            const idRt = document.getElementById('id_rt');
            const jk = document.getElementById('jk');
            const search = document.getElementById('search');

            idRt.addEventListener('change', () => {
                filterForm.submit();
            });

            jk.addEventListener('change', () => {
                filterForm.submit();
            });

            search.addEventListener('input', () => {
                filterForm.submit();
            });
        });
    </script>
</body>
</html>
@if(isset($data))
    @include('RT.Warga.show', ['data' => $data])
@endif

@endsection

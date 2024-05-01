<!DOCTYPE html>
<html lang="en">
<head>
    @extends('./layout/rw')
    <meta charset="UTF-8">
    <meta name="viewpopengaduan" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pengaduan</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
</head>
<body>
<div class="flex justify-center datas-center">
    <div class="p-4 sm:ml-64">
        <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Data pengaduan</p>
        <div class="bg-putih drop-shadow-md mx-4 px-10 p-4">
            <a href="pengaduan/create">
                <button class="bg-hijau hover:bg-hijau-gelap text-putih font-bold py-2 px-4 rounded-lg float-right">
                    + Tambah Data pengaduan
                </button>
            </a>
            <p class="text-sub ml-4">Data</p>
        </div>
        <div class="flex justify-center datas-center">
            @section('content')
            <!-- TABLE -->
            <div class="bg-putih drop-shadow-md mx-2 mt-5">
                <div class="card-body pl-10 pt-5">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-1 control-label col-form-label">Filter:</label>
                                    <div class="max-w-xs relative">
                                        <div class="border cursor-pointer">
                                            <div class="col-3">
                                                <select class="form-control w-full" id="id_pengaduan" name="id_pengaduan" required>
                                                    <option value="">-  Semua -</option>
                                                    {{-- @foreach($pengaduan as $data)
                                                        <option value="{{ $data->id_pengaduan }}">{{ $data->id_pengaduan }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Nomor pengaduan</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="form-group text-right pr-10">
                                                <div class="col-md-6 offset-md-6">
                                                    <label class="col-1 control-label col-form-label">Search:</label>
                                                    <input type="search" class="form-control rounded border pl-2" id="search" placeholder="Masukkan Nomor pengaduan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-7 mt-4 p-10 sm:ml-68 drop-shadow-md text-left mr-9"> 
                    <!-- HEADER -->
                    <div class="table-responsive">
                        <table id="table_pengaduan" class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">No.</th>
                                    <th class="px-4 py-2">Nama Pelapor</th>
                                    <th class="px-4 py-2">Judul Pengaduan</th>
                                    <th class="px-4 py-2">Deskripsi</th>
                                    <th class="px-4 py-2">Tanggal Pengaduan</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td class="border px-4 py-2">{{$loop->iteration}}</td>
                                    <td class="border px-4 py-2">{{$data->warga->nama_warga}}</td>
                                    <td class="border px-4 py-2">{{$data->judul_pengaduan}}</td>
                                    <td class="border px-4 py-2">{{$data->deskripsi_pengaduan}}</td>
                                    <td class="border px-4 py-2">{{$data->tanggal_pengaduan}}</td>
                                    <td class="border px-4 py-2">{{$data->status_pengaduan}}</td>
                                    <td class="border px-4 py-2">
                                        <div class="flex gap-3">
                                            {{-- <a href="/RW/pengaduan/{{ $data->id_pengaduan }}/edit" class="bg-kuning hover:bg-kuning-gelap text-putih font-medium py-2 px-4 rounded-lg">Edit</a> --}}
                                            <a href="#" data-toggle="modal" data-target="#ModalShow{{ $data->id_pengaduan }}" class="detail bg-abu-tua hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg">Detail</a>
                                            {{-- <form action="{{ url('/pengaduan/' . $data->id_pengaduan) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-merah hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">Delete</button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-K2ycQBY9RVuW3VhR5CtIikU0PnB5NBVqgYwe5RfwG1g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table_Berita').DataTable();
    });
</script> --}}


</body>
</html>
@include('RW.Pengaduan.show')


@endsection

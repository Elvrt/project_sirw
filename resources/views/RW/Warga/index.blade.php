@extends('./layout/rw')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Warga</title>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<div class="flex justify-center items-center">
    <div class="p-4 sm:ml-64">
        <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Data Warga</p>
        <div class="bg-putih drop-shadow-md mx-4 px-10 p-4">
            <a href="Warga/create">
                <button class="bg-hijau hover:bg-hijau-gelap text-putih font-bold py-2 px-4 rounded-lg float-right">
                    + Tambah Data Warga
                </button>
            </a>
            <p class="text-sub ml-4">Data</p>
        </div>
        <div class="flex justify-center items-center">
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
                                                <select class="form-control w-full" id="id_rt" name="id_rt" required>
                                                    <option value="">-  Semua -</option>
                                                    @foreach($rt as $item)
                                                        <option value="{{ $item->id_rt }}">{{ $item->id_rt }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Nomor RT</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="form-group text-right pr-10">
                                                <div class="col-md-6 offset-md-6">
                                                    <label class="col-1 control-label col-form-label">Search:</label>
                                                    <input type="search" class="form-control rounded border pl-2" id="search" placeholder="Masukkan Nomor RT">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-14 mt-4 p-10 sm:ml-68 drop-shadow-md text-center mr-9">
                    <!-- HEADER -->
                    <table  class="table-auto w-full" id="table_warga">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">RT</th>
                                <th class="px-4 py-2">No. KK</th>
                                <th class="px-4 py-2">NIK</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Alamat</th>
                                <th class="px-4 py-2">Jenis Kelamin</th>
                                <th class="px-4 py-2">Tempat Lahir</th>
                                <th class="px-4 py-2">Tanggal Lahir</th>
                                <th class="px-4 py-2">Agama</th>
                                <th class="px-4 py-2">Pekerjaan</th>
                                <th class="px-4 py-2">Status Hubungan</th>
                                <th class="px-4 py-2">no Telp.</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        var dataWarga = $('#table_warga').DataTable({
            serverSide: true,
            searching: true,
            ajax: {
                "url": "{{ url('Warga/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d.id_rt = $('#id_rt').val();
                }
            },
            columns: [
                { data: "DT_RowIndex", className: "text-center", orderable: false, searchable: false },
                { data: "kartuKeluarga.rt.nomor_rt", className: "", orderable: true, searchable: true },
                { data: "kartuKeluarga.no_kk", className: "", orderable: true, searchable: true },
                { data: "nik", className: "", orderable: false, searchable: false },
                { data: "nama_warga", className: "", orderable: true, searchable: true },
                { data: "alamat", className: "", orderable: true, searchable: true },
                { data: "jenis_kelamin", className: "", orderable: true, searchable: true },
                { data: "tempat_lahir", className: "", orderable: true, searchable: true },
                { data: "tanggal_lahir", className: "", orderable: true, searchable: true },
                { data: "agama", className: "", orderable: true, searchable: true },
                { data: "pekerjaan", className: "", orderable: true, searchable: true },
                { data: "status_hubungan", className: "", orderable: true, searchable: true },
                { data: "no_telepon", className: "", orderable: true, searchable: true },
                { 
                    data: "aksi", 
                    className: "", 
                    orderable: false, 
                    searchable: false,
                    render: function (data, type, row) {
                        return '<div class="flex gap-3">' +
                            '<a href="/warga/' + row.id_warga + '/edit" class="bg-kuning hover:bg-kuning-gelap text-putih font-medium py-2 px-4 rounded-lg">Edit</a>' +
                            '<a href="/warga/' + row.id_warga + '" class="bg-abu-tua hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg">Detail</a>' +
                            '<form action="{{ url('warga') }}/' + row.id_warga + '" method="POST">' +
                            '@csrf' +
                            '@method('DELETE')' +
                            '<button type="submit" class="bg-merah hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg" onclick="return confirm(' + "'Apakah anda ingin menghapus data ini ?'" +')">Delete</button>' +
                            '</form>' +
                            '</div>';
                    }
                }
            ]
        });
        
        $('#id_rt').on('change', function() {
            dataWarga.ajax.reload();
        });
    });
</script>
@endpush

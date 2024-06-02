@extends('./layout/rt')
@section('content')
<style>
    .card-body {
    width: 200%; /* Lebar card 100% dari parent element */
    max-width: 800px; /* Maksimum lebar card */
    margin: 0 auto; /* Posisi card di tengah */
    padding: 20px; /* Padding pada card */
}

</style>
    <div class="justify-center flex sm:block">
        <div class="p-4 sm:ml-64">
            <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Data Bansos</p>
            <div class="bg-putih drop-shadow-md mx-2 px-10 p-4">
                <p class="text-sub ml-4">Data</p>
            </div>        
            <div class="flex justify-center data-center">
                <!-- TABLE -->
                <div class="bg-putih drop-shadow-md mx-2 mt-5">
                    <div class="card-body pl-10 pt-5">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <form id="filter-form" method="GET" action="{{ url('/RT/Bansos') }}">
                                            <label class="col-1 control-label col-form-label">Filter:</label>
                                            <div class="flex justify-between max-w-xs relative">
                                                <div class="cursor-pointer flex-grow mr-2">
                                                    <small class="form-text text-muted">Status</small>
                                                    <select class="border form-control w-full" id="status" name="status" required>
                                                        <option value="" selected>-  Semua -</option>
                                                        <option value="Menunggu" {{request('status') == "Menunggu" ? "selected" : ""}}>Menunggu</option>
                                                        <option value="Ditolak" {{request('status') == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                                                        <option value="Disetujui" {{request('status') == "Disetujui" ? "selected" : ""}}>Disetujui</option>
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
                
                <div class="col-span-14 mt-4 p-10 sm:ml-68 drop-shadow-md text-center mr-9 ">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                    <div class="col-span-7 mt-4 p-10 sm:ml-68 text-left ml-10 pt-0">
                        <!-- HEADER -->
                        <div class="flex justify-center">
                            <div class="overflow-x-auto">
                                <div class="table-responsive">
                                    <table id="table_bansos" class="table-auto">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-2">No.</th>
                                                <th class="px-4 py-2">RT</th>
                                                <th class="px-4 py-2">Nomor KK</th>
                                                <th class="px-4 py-2">Jumlah Tanggungan</th>
                                                <th class="px-4 py-2">Jumlah Penghasilan</th>
                                                <th class="px-4 py-2">Gambar Slip</th>
                                                <th class="px-4 py-2">Jumlah Daya Listrik</th>
                                                <th class="px-4 py-2">Luas Bangunan</th>
                                                <th class="px-4 py-2">Gambar Rumah</th>
                                                <th class="px-4 py-2">Jumlah Kendaraan</th>
                                                <th class="px-4 py-2">Gambar Kendaraan</th>
                                                <th class="px-4 py-2">Keterangan SKTM</th>
                                                <th class="px-4 py-2">Status</th>
                                                <th class="px-4 py-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = $startNumber;
                                            @endphp
                                            @forelse ($bansos as $data)
                                                <tr>
                                                    <td class="px-4 py-2">{{$i++}}</td>
<td class="px-4 py-2">{{$data->id_rt}}</td>
<td class="px-4 py-2">{{$data->nomorkk}}</td>
<td class="px-4 py-2">{{$data->jumlah_tanggungan}}</td>
<td class="px-4 py-2">{{$data->jumlah_penghasilan}}</td>
<td class="px-4 py-2">
    @if($bansos->gambar_slip)
        <img src="{{ asset('storage/'.$bansos->gambar_slip) }}" alt="Slip Gaji">
    @endif
</td>
<td class="px-4 py-2">{{$data->jumlah_dayalistrik}}</td>
<td class="px-4 py-2">{{$data->luas_bangunan}}</td>
<td class="px-4 py-2"><img src="{{ asset('path_to_rumah/' . $data->gambar_rumah) }}" alt="Gambar Rumah" class="w-20 h-20"></td>
<td class="px-4 py-2">{{$data->jumlah_kendaraan}}</td>
<td class="px-4 py-2"><img src="{{ asset('path_to_kendaraan/' . $data->gambar_kendaraan) }}" alt="Gambar Kendaraan" class="w-20 h-20"></td>
<td class="px-4 py-2">{{$data->keterangan_sktm}}</td>
<td class="px-4 py-2">{{$data->status}}</td>
<td class="px-4 py-2">
    <div class="flex gap-3">
        <a href="/RT/Bansos/{{ $data->id }}/edit" class="bg-kuning hover:bg-kuning-gelap text-putih font-medium py-2 px-4 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a    <.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
            </svg>
        </a>
    </div>
</td>
</tr>
@empty
<tr>
    <td colspan="14" class="text-center px-4 py-2">No data found</td>
</tr>
@endforelse
</tbody>
</table>
</div>
<div class="mt-5  ">
    {{ $bansos->appends(request()->query())->links() }}
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
    const status = document.getElementById('status');
    const search = document.getElementById('search');

    status.addEventListener('change', () => {
        filterForm.submit();
    });

    search.addEventListener('input', () => {
        filterForm.submit();
    });
});
</script>
@endsection


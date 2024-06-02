@extends('./layout/warga')
@vite('resources/css/tabledashboard.css')
@section('content')
<!-- CONTENT -->
<p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5">STATUS PENGADUHAN</p>
<a href="/pengaduan" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-44 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
    </svg>
</a>

<div class="bg-login2 mx-16 px-4 py-3 rounded-md shadow-md flex flex-col items-center relative">
    <div class="form-group p-5 mt-5 w-full flex justify-between items-center">
        <form id="filter-form" method="GET" action="{{ url('statuspengaduan') }}" class="flex w-full justify-between">
            <div class="flex items-center">
                <label class="control-label col-form-label mr-2">Filter:</label>
                <div class="max-w-xs relative">
                    <div class="cursor-pointer flex-grow mr-2">
                        <small class="form-text text-muted">Status</small>
                        <select class="border form-control w-full" id="status" name="status">
                            <option value="" selected>- Semua -</option>
                            <option value="Menunggu" {{request('status') == "Menunggu" ? "selected" : ""}}>Menunggu</option>
                            <option value="Ditolak" {{request('status') == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                            <option value="Selesai" {{request('status') == "Selesai" ? "selected" : ""}}>Selesai</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <label class="control-label col-form-label mr-2">Search:</label>
                <input type="search" class="form-control rounded border pl-2" id="search" name="search" value="{{ request('search') }}" placeholder="Masukkan Pencarian">
            </div>
        </form>
    </div>
    <div class="w-full overflow-x-auto pl-10 pr-10 pb-10">
        <table class="table-auto text-center w-full">
            <thead>
                <tr>
                    <!-- <th scope="col" class="px-4 py-3">NIK</th> -->
                    <th scope="col" class="px-4 py-3">Nama Pelapor</th>
                    <th scope="col" class="px-4 py-3">Judul Pengaduan</th>
                    <th scope="col" class="px-4 py-3">Deskripsi</th>
                    <th scope="col" class="px-4 py-3">Tanggal Pengaduan</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                    <th scope="col" class="px-4 py-3">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengaduan as $data)
                    <tr>
                        <!-- <td scope="col" class="px-4 py-3 text-justify">{{ $data->warga->nik }}</td> -->
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->warga->nama_warga }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->judul_pengaduan }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->deskripsi_pengaduan }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ \Carbon\Carbon::parse($data->tanggal_pengaduan)->format('d M Y H:i') }} WIB</td>
                        <td scope="col" class="px-4 py-3">
                            @php
                                $statusClass = '';
                                if ($data->status_pengaduan == 'Menunggu') {
                                    $statusClass = 'bg-kuning';
                                } elseif ($data->status_pengaduan == 'Selesai') {
                                    $statusClass = 'bg-hijau';
                                } elseif ($data->status_pengaduan == 'Ditolak') {
                                    $statusClass = 'bg-merah';
                                }
                            @endphp
                            <button type="button" class="text-putih {{ $statusClass }} cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>{{ $data->status_pengaduan }}</button>
                        </td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->catatan_pengaduan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-3">No data found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
<div class=" text-left pl-20 pr-20 mt-5">
    {{ $pengaduan->appends(request()->query())->links() }}
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

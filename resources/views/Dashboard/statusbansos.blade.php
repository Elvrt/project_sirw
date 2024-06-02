@extends('./layout/warga')
@vite('resources/css/tabledashboard.css')
@section('content')
<!-- CONTENT -->
<p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5">STATUS BANSOS</p>
<a href="/pengajuanbansos" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-44 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
    </svg>
</a>

<div class="bg-login2 mx-16 px-4 py-3 rounded-md shadow-md flex flex-col items-center relative">
    <div class="form-group p-5 mt-5 w-full flex justify-between items-center">
        <form id="filter-form" method="GET" action="{{ url('statusbansos') }}" class="flex w-full justify-between">
            <div class="flex items-center">
                <label class="control-label col-form-label mr-2">Filter:</label>
                <div class="max-w-xs relative">
                    <div class="cursor-pointer flex-grow mr-2">
                        <small class="form-text text-muted">Nomor RT</small>
                        <select class="border form-control w-full" id="id_rt" name="id_rt">
                            <option value="" selected>- Semua -</option>
                            @foreach($rts as $data)
                                <option value="{{ $data->id_rt }}" {{ request('id_rt') == $data->id_rt ? 'selected' : '' }}>{{ $data->nomor_rt }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="max-w-xs relative">
                    <div class="cursor-pointer flex-grow mr-2">
                        <small class="form-text text-muted">Status</small>
                        <select class="border form-control w-full" id="status" name="status">
                            <option value="" selected>- Semua -</option>
                            <option value="Menunggu" {{request('status') == "Menunggu" ? "selected" : ""}}>Menunggu</option>
                            <option value="Ditolak" {{request('status') == "Ditolak" ? "selected" : ""}}>Ditolak</option>
                            <option value="Disetujui" {{request('status') == "Disetujui" ? "selected" : ""}}>Disetujui</option>
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
                    <th scope="col" class="px-4 py-3">No.</th>
                    <th scope="col" class="px-4 py-3">RT</th>
                    <th scope="col" class="px-4 py-3">Nomor KK</th>
                    <th scope="col" class="px-4 py-3">Jumlah Tanggungan</th>
                    <th scope="col" class="px-4 py-3">Jumlah Penghasilan</th>
                    <th scope="col" class="px-4 py-3">Keterangan SKTM</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = $startNumber;
                @endphp
                @forelse ($bansos as $data)
                    <tr>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $i++ }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->id_rt }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data ->nomorkk }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->jumlah_tanggungan }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->jumlah_penghasilan }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->keterangan_sktm }}</td>
                        <td scope="col" class="px-4 py-3">
                            @php
                                $statusClass = '';
                                if ($data->status == 'Menunggu') {
                                    $statusClass = 'bg-kuning';
                                } elseif ($data->status == 'Disetujui') {
                                    $statusClass = 'bg-hijau';
                                } elseif ($data->status == 'Ditolak') {
                                    $statusClass = 'bg-merah';
                                }
                            @endphp
                            <button type="button" class="text-putih {{ $statusClass }} font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>{{ $data->status }}</button>
                        </td>
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
    {{ $bansos->appends(request()->query())->links() }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const filterForm = document.getElementById('filter-form');
        const idRt = document.getElementById('id_rt');
        const status = document.getElementById('status');
        const search = document.getElementById('search');

        idRt.addEventListener('change', () => {
            filterForm.submit();
        });

        status.addEventListener('change', () => {
            filterForm.submit();
        });

        search.addEventListener('input', () => {
            filterForm.submit();
        });
    });
</script>
@endsection


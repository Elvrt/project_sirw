@extends('./layout/warga')
@vite('resources/css/tabledashboard.css')
@section('content')
<!-- CONTENT -->
<p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5">STATUS IURAN</p>

<div class="bg-login2 mx-16 px-4 py-3 rounded-md shadow-md flex flex-col items-center relative">
    <div class="form-group p-5 mt-5 w-full flex justify-between items-center">
        <form id="filter-form" method="GET" action="{{ url('statusiuran') }}" class="flex w-full justify-between">
            <div class="flex items-center">
                <label class="control-label col-form-label mr-2">Filter:</label>
                <div class="max-w-xs relative">
                    <div class="cursor-pointer flex-grow mr-2">
                        <small class="form-text text-muted">Nomor RT</small>
                        <select class="border form-control w-full" id="id_rt" name="id_rt">
                            <option value="" selected>- Semua -</option>
                            @foreach($rt as $data)
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
                            <option value="Lunas" {{request('status') == "Lunas" ? "selected" : ""}}>Lunas</option>
                            <option value="Belum Lunas" {{request('status') == "Belum Lunas" ? "selected" : ""}}>Belum Lunas</option>
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
                    <!-- <th scope="col" class="px-4 py-3">No. KK</th> -->
                    <th scope="col" class="px-4 py-3">Kepala Keluarga</th>
                    <th scope="col" class="px-4 py-3">Nominal</th>
                    <th scope="col" class="px-4 py-3">Tanggal</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = $startNumber;
                @endphp
                @forelse ($iuran as $data)
                    <tr>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $i++ }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->kartuKeluarga->rt->nomor_rt }}</td>
                        <!-- <td scope="col" class="px-4 py-3 text-justify">{{ $data->kartuKeluarga->no_kk }}</td> -->
                        <td scope="col" class="px-4 py-3 text-justify">
                            @php
                                $kepalaKeluarga = $data->kartuKeluarga->warga->firstWhere('status_hubungan', 'Kepala Keluarga');
                                if ($kepalaKeluarga) {
                                    echo $kepalaKeluarga->nama_warga;
                                }
                            @endphp
                        </td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ $data->nominal }}</td>
                        <td scope="col" class="px-4 py-3 text-justify">{{ \Carbon\Carbon::parse($data->tanggal_iuran)->format('d M Y H:i') }} WIB</td>
                        <td scope="col" class="px-4 py-3">
                            @php
                                $statusClass = '';
                                if ($data->status_iuran == 'Lunas') {
                                    $statusClass = 'bg-hijau';
                                } elseif ($data->status_iuran == 'Belum Lunas') {
                                    $statusClass = 'bg-merah';
                                }
                            @endphp
                            <button type="button" class="text-putih {{ $statusClass }} cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>{{ $data->status_iuran }}</button>
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
    {{ $iuran->appends(request()->query())->links() }}
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

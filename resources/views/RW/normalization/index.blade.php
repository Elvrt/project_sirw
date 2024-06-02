<!DOCTYPE html>
<html lang="en">
<head>
    @extends('./layout/rw')
    <meta charset="UTF-8">
    <meta name="viewpoAgenda" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Normalisasi</title>
    @vite('resources/css/table.css')
</head>
<body>
    <div class="justify-center flex sm:block">
    <div class="p-4 sm:ml-64">
        <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Normalisasi</p>
        <div class="bg-putih drop-shadow-md mx-2 px-10 p-4">
            <p class="text-sub ml-4">Metode Simple Additive Weighting (SAW)</p>
        </div>
        <div class="flex justify-center data-center">
            @section('content')
            <!-- TABLE -->
            <div class="bg-putih drop-shadow-md mx-2 mt-5">
                <div class="col-span-14 mt-4 p-10 sm:ml-68 drop-shadow-md text-center mr-9 ">

                <div class="col-span-6 mt-4 p-10 sm:ml-68  text-left ml-5 pt-0">
                    <!-- HEADER -->
                    <div class="flex justify-center">
                        <div class="overflow-x-auto">
                    <div class="table-responsive">
                        <table id="table_normalization" class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">No.</th>
                                    <th class="px-4 py-2">No. KK</th>
                                    <th class="px-4 py-2">Kepala Keluarga</th>
                                    @foreach ($criteriaweights as $c)
                                        <th class="px-4 py-2 w-1/6">{{$c->name}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($alternatives as $a)
                                    <tr>
                                        <td class="px-4 py-2">{{$i++}}</td>
                                        <td class="px-4 py-2">{{$a->no_kk}}</td>
                                        <td class="px-4 py-2">{{$a->kepala_keluarga}}</td>
                                        @php
                                            $scr = $scores->where('ida', $a->id)->all();
                                        @endphp
                                        @foreach ($scr as $s)
                                            <td class="px-4 py-2 w-1/6">{{$s->rating}}</td>
                                        @endforeach
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center px-4 py-2">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

@endsection


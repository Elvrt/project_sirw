@extends('./layout/warga')

@section('content')
<p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">LAYANAN DARURAT</p>

<div class="grid grid-cols-3 mx-20 px-20 py-20 bg-login2 ">
    @foreach ($layanan as $item)
        <div class=" grid grid-cols-2 gap-0 mx-6 my-6 items-center">
            <div class="ml-20">
                <img src="{{url('/assets/img/profiledarurat.png')}}" alt="layanan" width="100">
            </div>
            <div class="text-left">
                <p>{{$item->nama_layanan}}</p>
                <p>{{$item->nomor_layanan}}</p>
            </div>
        </div>
    @endforeach

</div>
@endsection

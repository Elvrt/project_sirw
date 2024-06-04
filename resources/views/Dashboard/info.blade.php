@extends('./layout/warga')

@section('content')
    <!-- BERITA -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">BERITA</p>
    <div class="grid grid-cols-3 ml-20 mr-20 bg-login2 rounded-lg">
        @foreach ($berita as $data)
            <div class="item-center ml-10 mr-10 pt-10 pb-10">
                <a href="berita/{{ $data->id_berita }}" class="mr-4 block cursor-pointer antialiased ">
                <img src="{{$data->gambar_berita}}" class="rounded-lg" alt="berita">
                    <p class="text-army-gelap text-text font-bold">{{ $data->judul_berita }}</p>
                </a>
            </div>
        @endforeach
    </div>
    <!-- AGENDA -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">AGENDA</p>
    <div class="grid grid-cols-3 ml-20 mr-20 bg-login2 rounded-lg">
        @foreach ($agenda as $data)
            <div class="item-center ml-10 mr-10 pt-10 pb-10">
                <a href="agenda/{{ $data->id_agenda }}" class="mr-4 block cursor-pointer antialiased ">
                <img src="{{$data->gambar_agenda}}" class="rounded-lg" alt="berita">
                    <p class="text-army-gelap text-text font-bold">{{ $data->judul_agenda }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection

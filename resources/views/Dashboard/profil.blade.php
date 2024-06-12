@extends('./layout/warga')

@section('content')
    <!-- Content STRUKTUR ORGANISASI-->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">STRUKTUR RW</p>
    <div class="grid grid-cols-3 gap-10 ml-20 mx-20 mt-4 font-bold">
        <div class="bg-gradient-to-br from-hijau2 to-cream-muda rounded-lg pb-20">
            @foreach ($strukturRw as $data)
                <div class="ml-20 mr-10 mt-5 md-5">
                    <p class="text-center font-bold text-2xl text-hitam">{{ $data->nama_struktur }}</p>
                    <div class="grid grid-cols-3 mt-5 ">
                        <div>
                            <img src="{{ url('assets/img/profile.png') }}" alt="profile" width="100">
                        </div>
                        <div class="bg-gradient-to-r from-abu-putih to-abu-putih-muda  rounded-lg col-span-2">
                            <p class="text-left font-normal ml-2 text-hitam ">Nama‎ ‎ ‎ ‎ : {{ $data->warga->nama_warga }}</p>
                            <p class="text-left font-normal ml-2 text-hitam ">Jabatan‎ : {{ $data->nama_struktur }}</p>
                            <p class="text-left font-normal ml-2 text-hitam ">Alamat ‎ : {{ $data->warga->alamat }}</p>
                            <p class="text-left font-normal ml-2 text-hitam ">No.Telp : {{ $data->warga->nomor_telepon }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bg-gradient-to-tr from-cream-muda to-hijau2 rounded-lg col-span-2">
            <div class="grid grid-cols-6 gap-4 mr-10 mb-5 mt-5">
                @foreach ($ketuaRt as $data)
                    <div class="ml-10 text-center">
                        <p class="font-bold text-xl text-hitam">{{ $data->nama_struktur }}</p>
                        <img src="{{ url('assets/img/profile.png') }}" alt="profile" width="100">
                    </div>
                    <div class="bg-gradient-to-r from-abu-putih to-abu-putih-muda rounded-lg col-span-2 mt-5">
                        <p class="text-left font-normal ml-2 text-hitam ">Nama‎ ‎ ‎ ‎ : {{ $data->warga->nama_warga }}</p>
                        <p class="text-left font-normal ml-2 text-hitam ">Jabatan‎ : {{ $data->nama_struktur }}</p>
                        <p class="text-left font-normal ml-2 text-hitam ">Alamat ‎ : {{ $data->warga->alamat }}</p>
                        <p class="text-left font-normal ml-2 text-hitam ">No.Telp : {{ $data->warga->nomor_telepon }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- CONTENT TATA TERTIB -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">TATA TERTIB RW</p>
    <div class="bg-gradient-to-b from-cream to-cream-muda mr-32 ml-32 py-10 rounded-lg ">
        <div class="bg-putih list-inside p-10 mr-32 ml-32 ">
            <p class="text-center font-medium text-sub">TATA TERTIB</p>
            <table class="min-w-full text-justify">
                <tbody class="bg-white">
                    @foreach ($tatib as $data)
                        <tr>
                            <td class="px-6 py-1">{{ $loop->iteration}}</td>
                            <td class="px-6 py-1">{{ $data->deskripsi_tatib }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

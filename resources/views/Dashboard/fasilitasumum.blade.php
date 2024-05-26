@extends('layout/warga')

@section('content')
    <div class="bg-gradient-to-b from-cream to-cream-muda mt-10 mr-32 ml-32 py-10 rounded-lg">
        <div class="bg-putih  mr-32 ml-32 p-5 rounded-lg">
            <div class="text-justify px-20 justify-center flex flex-col items-center py-4 relative">
                <a href="/fasum" class="bg-army-muda text-putih py-2 px-4 ml-4 mt-4 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </a>
                <p class="text-center font-bold text-sub my-5">{{ $data->nama_fasilitas }}</p>
                <img src="{{ url('assets/img/fasilitas/' . $data->gambar_fasilitas) }}" alt="fasilitas umum" class="rounded-lg" width="400">
                <table class="mt-10 text-justify">
                    <tbody>
                        <tr>
                            <td class="px-6 py-1 font-bold">Nomor RT</td>
                            <td class="px-1 py-1 font-bold">:</td>
                            <td class="px-6 py-1">{{ $data->rt->nomor_rt }}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-1 font-bold">Alamat</td>
                            <td class="px-1 py-1 font-bold">:</td>
                            <td class="px-6 py-1">{{ $data->alamat_fasilitas }}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-1 font-bold">Keterangan</td>
                            <td class="px-1 py-1 font-bold">:</td>
                            <td class="px-6 py-1">{{ $data->keterangan_fasilitas }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('./layout/warga')

@section('content')
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">PILIH STATUS SURAT</p>
    <a href="/pengajuansurat" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-44 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
    </a>
    <div class="text-center mb-10">
        <a href="statussktm">
            <button class="bg-transparent hover:bg-coklat text-army-gelap font-semibold hover:text-white py-2 px-4 border hover:border-transparent rounded">Surat Keterangan Tidak Mampu</button>
        </a>
        <a href="statussurat">
            <button class="bg-transparent hover:bg-coklat text-army-gelap font-semibold hover:text-white py-2 px-14 border hover:border-transparent rounded">Surat Lainnya</button></p>
        </a>
    </div>
 @endsection

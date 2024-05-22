@extends('./layout/warga')

@section('content')
<div class="flex justify-center items-center">
    <div class=" container mx-auto px-40">
        <img src="{{url('/assets/img/background_dashboard.png')}}"
            alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
        <main class="relative self-center mt-28 mb-20 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('/assets/img/main.png')}}"
                        alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
                </figure>
                <div class="flex flex-col ml-5 w-[44%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex relative flex-col grow px-2 mt-14 text-xl text-white max-md:mt-5 max-md:max-w-full">
                        <p class="max-md:max-w-full text-normal text-army-gelap ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore<br />
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo con<br />
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatu
                        </p>
                        <button
                            class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
    <!-- BERITADANAGENDA -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-36 mb-10">BERITA DAN INFORMASI</p>
    <div class="flex justify-center items-center mt-10">
        <div class="bg-login2 w-automx-4 shadow-xl md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-1 rounded-lg">
            <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-5 ">BERITA</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mx-auto md:px-20 content-center">
                @foreach ($berita as $data)
                    <div class="flex flex-col justify-center items-center">
                        <div class="mr-3 block cursor-pointer antialiased">
                            <img src="{{ url('assets/img/berita/' . $data->gambar_berita) }}"
                                width="600" class="rounded-lg" style="margin:auto">
                            <p class="text-normal text-army-gelap">{{ $data->judul_berita }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="info">
                <button
                    class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-10">Selengkapnya</button>
            </a>
            <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-10">AGENDA</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 px-4 md:px-20 item-center ">
                @foreach ($agenda as $data)
                    <div class="flex flex-col justify-center items-center">
                        <div class="block cursor-pointer antialiased ">
                            <img src="{{ url('assets/img/agenda/' . $data->gambar_agenda) }}"
                                width="600" class="rounded-lg" style="margin:auto">
                            <p class="text-normal text-army-gelap">{{ $data->judul_agenda }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="info">
                <button
                    class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-10">Selengkapnya</button>
            </a>
        </div>
    </div>
    <!-- LAYANAN -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-20 mb-10">LAYANAN</p>
    <div class="flex justify-center items-center mt-10">
    <div class="bg-login2 w-automx-10 shadow-xl md:mx-10 mr-4 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
        <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-5">FASILITAS UMUM</p>
        <div class="h-140 grid grid-cols-1 md:grid-cols-3 gap-7 mx-auto md:px-40 content-center">
            @foreach ($fasilitas as $data)
                <div class="flex flex-col justify-center items-center relative">
                    <div class="mr-4 block cursor-pointer antialiased relative">
                        <img src="{{ url('assets/img/fasilitas/' . $data->gambar_fasilitas) }}" width="400" class="rounded-lg" style="margin:auto">
                        <p class="overlay-text text-abu-putih font-medium text-sub absolute bottom-0 left-0 right-0 bg-white bg-opacity-75 text-left p-4">{{ $data->nama_fasilitas }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button
            class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-6">Selengkapnya</button>
    </div>
    </div>
</div>


<!-- LAYANAN -->
<div class="flex justify-center items-center mt-10">
    <div class="bg-login2 bg-clip-content shadow-xl mr-32 ml-32 mb-32 mt-20 rounded-lg">
        <div class="h-140 grid grid-cols-1 md:grid-cols-4 gap-7 p-5 mx-auto md:px-80 content-center">
            <div class="items-center">
                <a href="pengajuansurat" class="block cursor-pointer antialiased ">
                    <img src="{{url('/assets/img/pengajuansuratlogo.png')}}"
                        width="150"style="margin:auto">
                    <p class="text-center font-bold text-army-gelap">PENGAJUAN SURAT</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center">
                <a href="#" class="block cursor-pointer antialiased ">
                    <img src="{{url('/assets/img/catataniuranlogo.png')}}"
                        width="150"style="margin:auto">
                    <p class="text-center font-bold text-army-gelap">CATATAN IURAN</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center">
                <a href="#" class="block cursor-pointer antialiased item-center">
                    <img src="{{url('/assets/img/pengaduanlogo.png')}}"
                        width="150"style="margin:auto">
                    <p class="text-center font-bold text-army-gelap">PENGADUAN</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center">
                <a href="#" class="block cursor-pointer antialiased ">
                    <img src="{{url('/assets/img/layanandaruratlogo.png')}}"
                        width="150" style="margin:auto">
                    <p class="text-center font-bold text-army-gelap">LAYANAN DARURAT</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

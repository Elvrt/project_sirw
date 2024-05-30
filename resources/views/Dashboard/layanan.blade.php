@extends('./layout/warga')
@section('content')
    <!-- CONTENT -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">LAYANAN</p>
    <!-- PENGAJUAN SURAT -->
    <div class="container mx-auto px-40 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
        <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('assets/img/pengajuansurat.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full rounded-lg" />
                </figure>
                <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
                    <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">PENGAJUAN SURAT</p>
                    <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
                        <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
                            Segera ajukan surat Anda dengan mudah melalui platform kami untuk memperoleh layanan yang cepat dan efisien dalam mengurus berbagai keperluan administratif.
                        </p>
                        <a href="pengajuansurat">
                            <button class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- CATATAN IURAN -->
    <div class="container mx-auto px-40 mt-20 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
        <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('assets/img/catataniuran.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full rounded-lg" />
                </figure>
                <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
                    <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">CATATAN IURAN</p>
                    <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
                        <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
                            Dapatkan informasi terkini tentang catatan iuran Anda, termasuk detail pembayaran dan status keanggotaan, untuk memastikan keteraturan dalam kontribusi Anda.
                        </p>
                        <a href="statusiuran">
                            <button class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- FASILITAS UMUM -->
    <div class="container mx-auto px-40 mt-20 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
        <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('assets/img/fasilitasumum.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full rounded-lg" />
                </figure>
                <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
                    <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">FASILITAS UMUM</p>
                    <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
                        <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
                            Temukan fasilitas umum yang tersedia di lingkungan Anda dan manfaatkan layanan-layanan yang disediakan untuk kenyamanan dan kebutuhan sehari-hari Anda.
                        </p>
                        <a href="fasum">
                            <button class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- PENGADUAN -->
    <div class="container mx-auto px-40 mt-20 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
        <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('assets/img/pengaduan.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full rounded-lg" />
                </figure>
                <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
                    <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">PENGADUAN</p>
                    <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
                        <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
                            Laporkan keluhan atau saran Anda melalui sistem pengaduan kami untuk memastikan keamanan, ketertiban, dan kenyamanan bersama di lingkungan tempat tinggal Anda.
                        </p>
                        <a href="pengaduan">
                            <button class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- LAYANAN DARURAT -->
    <div class="container mx-auto px-40 mt-20 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
        <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                    <img src="{{url('assets/img/layanandarurat.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full rounded-lg" />
                </figure>
                <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
                    <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">LAYANAN DARURAT</p>
                    <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
                        <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
                            Akses layanan darurat yang siap membantu Anda dalam situasi mendesak atau darurat yang memerlukan tanggapan cepat dan tepat dari pihak berwenang.
                        </p>
                        <a href="layanandarurat">
                            <button class="w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-5 mb-6">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

  @endsection

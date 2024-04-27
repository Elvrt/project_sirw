@extends('./layout/rw')
<div class="flex justify-center items-center">
    <div class="p-4 sm:ml-64">
        <p class=" text-army-gelap font-bold text-header drop-shadow-md  container mb-10 mt-10 ml-4">Data Warga</p>
        <div class="bg-putih drop-shadow-md mx-4 px-10 p-4">
            <a href="/tambahwargaRW">

                <button class="bg-hijau hover:bg-hijau-gelap text-putih font-bold py-2 px-4 rounded-lg float-right">
                    + Tambah Data Warga
                </button>
            </a>
            <p class="text-sub ml-4">Data</p>

        </div>
        <div class="flex justify-center items-center">
            @section('content')
            <!-- TABLE -->

            <div class="bg-putih drop-shadow-md mx-2 ">
                <div class="grid grid-cols-10 col-span-10 mt-4 p-10 sm:ml-68 drop-shadow-md text-center mr-9 ">
                    <!-- HEADER -->
                    <div class="font-bold">
                        No KK
                    </div>
                    <div class="font-bold">
                        NIK
                    </div>
                    <div class="font-bold">
                        Nama
                    </div>
                    <div class="font-bold">
                        Jenis Kelamin
                    </div>
                    <div class="font-bold">
                        Tempat Lahir
                    </div>
                    <div class="font-bold">
                        Tanggal Lahir
                    </div>
                    <div class="font-bold">
                        Agama
                    </div>
                    <div class="font-bold">
                        Alamat
                    </div>
                    <div class="font-bold">
                        RT
                    </div>
                    <div class="font-bold">
                        Aksi
                    </div>

                    <!-- ISI CONTENT -->
                    <div class="py-3">
                        7307050302120002
                    </div>
                    <div class="py-3">
                        3547263748162374
                    </div>
                    <div class="py-3">
                        Athallah Adjani
                    </div>
                    <div class="py-3">
                        Laki-laki
                    </div>
                    <div class="py-3">
                        Surabaya
                    </div>
                    <div class="py-3">
                        05 November 2003
                    </div>
                    <div class="py-3">
                        Islam
                    </div>
                    <div class="py-3">
                        Jl Raya Darmo
                    </div>
                    <div class="py-3">
                        RT 03
                    </div>
                    <div class="grid-cols-3 flex flex-auto justify-between gap-1">
                        <div>
                            <button class="bg-kuning hover:bg-kuning-gelap text-putih font-medium py-2 px-4 rounded-lg">Edit</button>
                        </div>
                        <div>
                            <button class="bg-merah hover:bg-merah-gelap text-putih font-medium py-2 px-4 rounded-lg">Hapus</button>
                        </div>
                        <div>
                            <button class="bg-abu-tua hover:bg-abu-gelap text-putih font-medium py-2 px-4 rounded-lg">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@extends('./layout/warga')

@section('content')
    <!-- CONTENT -->
    <div class="container mx-auto">
        <img src="https://cdn.discordapp.com/attachments/1222905897848934450/1223183275359604828/image.png?ex=6618ed32&is=66067832&hm=8d2696fcf94b4df4ee28103e9dad19b83af2a9fca2a95c8078d2f89c3e84335d&" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
        <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">PENGAJUAN SURAT</p>
        <div class="grid grid-cols-2 gap-4 item-center text-text text-center rounded-lg mx-56 bg-login2 px-20 py-20 ">
            <div class="">
                <a href="requestsurat" class="mr-4 block cursor-pointer antialiased rounded-lg">
                    <img src="{{url('assets/img/ajukansurat.png')}}"width="500" class="rounded-lg" style="margin:auto">
                    <p class="font-bold text-army-gelap ">Ajukan Surat</p>
                </a>
            </div>
            <div class="">
                <a href="statussurat" class="mr-4 block cursor-pointer antialiased rounded-lg ">
                    <img src="{{url('assets/img/statussurat.png')}}" width="500" class="rounded-lg" style="margin:auto" >
                    <p class="font-bold text-army-gelap ">Status Surat</p>
                </a>
            </div>
        </div>
    </div>
 @endsection

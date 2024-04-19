@extends('./layout/warga')

@section('content')
  <!-- CONTENT -->
  <div class="container mx-auto">
    <img src="https://cdn.discordapp.com/attachments/1222905897848934450/1223183275359604828/image.png?ex=6618ed32&is=66067832&hm=8d2696fcf94b4df4ee28103e9dad19b83af2a9fca2a95c8078d2f89c3e84335d&" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
  <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">PENGAJUAN SURAT</p>
  <div class="grid grid-cols-2 gap-4 item-center text-text text-center rounded-lg mx-56 bg-login2 px-20 py-20 ">
    <div class="">
        <a href="ajukansurat" class="mr-4 block cursor-pointer antialiased rounded-lg">
          <img src="https://media.discordapp.net/attachments/1222905897848934450/1224410016199479436/image.png?ex=661d63b0&is=660aeeb0&hm=1246c273774e9cad6b585ada72941a045f8c6ea943e1427fa857c6807f542f0a&=&format=webp&quality=lossless"width="500" style="margin:auto">
          <p class="font-bold text-army-gelap ">Ajukan Surat</p>
    </a>
    </div>
    <div class="">
        <a href="statussurat" class="mr-4 block cursor-pointer antialiased rounded-lg ">
          <img src="https://media.discordapp.net/attachments/1222905897848934450/1224412084553650268/image.png?ex=661d659d&is=660af09d&hm=488ea44429fe89212edd7a8f70e822c62776e94ab0e918d9a2444933a726083a&=&format=webp&quality=lossless&width=550&height=298" width="500" style="margin:auto" >
          <p class="font-bold text-army-gelap ">Status Surat</p>
    </a>
    </div>
  </div>
  </div>
 @endsection

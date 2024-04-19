@extends('./layout/warga')

@section('content')
    <div class="container mx-auto px-40">
      <img src="https://cdn.discordapp.com/attachments/1222905897848934450/1223183275359604828/image.png?ex=6618ed32&is=66067832&hm=8d2696fcf94b4df4ee28103e9dad19b83af2a9fca2a95c8078d2f89c3e84335d&"
          alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
      <main class="relative self-center mt-28 mb-20 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
          <div class="flex gap-5 max-md:flex-col max-md:gap-0">
              <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b3b893672dae1176369389448ec3bc3822a0aafed4c7736ebf0e0d07cd4125c3?apiKey=ac6e1a934e4640bea8ec0c07c9d8ab26&"
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
  <!-- BERITADANAGENDA -->
  <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-80 mb-10">BERITA DAN INFORMASI</p>
  <div class="bg-login2 w-automx-4 shadow-xl md:mx-10 mr-3 md:mr-32 ml-4 md:ml-32 p-1 rounded-lg">
      <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-5 ">BERITA</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mx-auto md:px-20 content-center">
          <div class="flex flex-col justify-center items-center">
              <a href="#" class="mr-3 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223285805473333392/image.png?ex=66194caf&is=6606d7af&hm=63738e9fadc5bccb42aedeeadeac788d7f6b943044e01a204ab8983e6bc50800&=&format=webp&quality=lossless"
                      width="600" style="margin:auto">
                  <p class="text-normal text-army-gelap">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Tenetur, alias.</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="mr-3 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223285986101035028/image.png?ex=66194cda&is=6606d7da&hm=592cfe6cfb3981fd3392b83fe9b24893bbc59a8e4ed28cdfdb04f4825156fa7e&=&format=webp&quality=lossless"
                      width="600" style="margin:auto">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, recusandae.</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="mr-3 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223286015972741170/image.png?ex=66194ce1&is=6606d7e1&hm=e3d09eb328977841801324c28df966cc0fc0f4f1cec0e21ae22ce53692e95600&=&format=webp&quality=lossless"
                      width="600" style="margin:auto">
                  <p class="text-normal text-army-gelap m-auto">Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Quas, voluptate!</p>
              </a>
          </div>
      </div>
      <a href="info">
          <button
              class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-10">Selengkapnya</button>
      </a>
      <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-10">AGENDA</p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-7 px-4 md:px-20 item-center ">
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296562461937786/image.png?ex=661956b4&is=6606e1b4&hm=7092eee4967237538efa1f099c0079892cfcf289033e90088d00f6da73837523&=&format=webp&quality=lossless&width=550&height=237"
                      width="600" style="margin:auto">
                  <p class="text-normal text-army-gelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab,
                      accusantium?</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class=" block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296598746988685/image.png?ex=661956bc&is=6606e1bc&hm=fedff68b4d1852397ff05c360197d58a93c6087074fc40975ae9680024ba0c89&=&format=webp&quality=lossless&width=550&height=237"
                      width="600" style="margin:auto">
                  <p class="text-normal text-army-gelap">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Vitae, officiis!</p>
              </a>
          </div>
      </div>
      <a href="info">
          <button
              class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-10">Selengkapnya</button>
      </a>
  </div>
  <!-- LAYANAN -->
  <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-20 mb-10">LAYANAN</p>
  <div class="bg-login2 w-automx-10 shadow-xl md:mx-10 mr-4 md:mr-32 ml-4 md:ml-32 p-5 rounded-lg">
      <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-5">FASILITAS UMUM</p>
      <div class="h-140 grid grid-cols-1 md:grid-cols-3 gap-7 mx-auto md:px-40 content-center">
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="mr-4 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296698709835827/image.png?ex=661956d4&is=6606e1d4&hm=c078e909c9c80ad6703f4829d7ffe3d4dff44f9104c0fb8978820cdcca320119&=&format=webp&quality=lossless&width=590&height=701"
                      width="400"style="margin:auto">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quidem!</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="mr-4 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296726463549440/image.png?ex=661956db&is=6606e1db&hm=81a4ff771e6207d3a2a7a27b58c245ba3ad52cff10ab85b188674c51259be6f5&=&format=webp&quality=lossless&width=295&height=350"
                      width="400"style="margin:auto">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, laboriosam!</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href=" #" class="mr-4 block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223296751839084665/image.png?ex=661956e1&is=6606e1e1&hm=fec57cb74896ee9fd0f7ff62b951912a50808ff76087c70734b7744fba29c227&=&format=webp&quality=lossless&width=295&height=350"
                      width="400"style="margin:auto">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, suscipit?</p>
              </a>
          </div>
      </div>

      <button
          class=" w-max px-6 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-6">Selengkapnya</button>
  </div>
  </div>


  <!-- LAYANAN -->
  <div class="bg-login2 bg-clip-content shadow-xl mr-32 ml-32 mb-32 mt-20 rounded-lg">
      <div class="h-140 grid grid-cols-1 md:grid-cols-4 gap-7 p-5 mx-auto md:px-80 content-center">
          <div class="items-center">
              <a href="pengajuansurat" class="block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223303191018340432/image.png?ex=66195ce0&is=6606e7e0&hm=93e4c64d7ca3245751bf62a8d4c663fdc2861c282ce22cc1bf6fd018436a41ac&=&format=webp&quality=lossless"
                      width="150"style="margin:auto">
                  <p class="text-center font-bold text-army-gelap">PENGAJUAN SURAT</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href="#" class="block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223303247595438233/image.png?ex=66195cee&is=6606e7ee&hm=1e09e17a7158a9555f83db23fad1a9cae240b1a79d961c211d02e7c3342a3f86&=&format=webp&quality=lossless"
                      width="150"style="margin:auto">
                  <p class="text-center font-bold text-army-gelap">CATATAN IURAN</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href="#" class="block cursor-pointer antialiased item-center">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223303260094332928/image.png?ex=66195cf1&is=6606e7f1&hm=51c32a2ab07fe0446b1003b15c29cb9bd34fe42122e76460af7576ca446cb630&=&format=webp&quality=lossless"
                      width="150"style="margin:auto">
                  <p class="text-center font-bold text-army-gelap">PENGADUAN</p>
              </a>
          </div>
          <div class="flex flex-col justify-center items-center">
              <a href="#" class="block cursor-pointer antialiased ">
                  <img src="https://media.discordapp.net/attachments/1222905897848934450/1223303273914826896/image.png?ex=66195cf4&is=6606e7f4&hm=98f318faa00ea73f89f3842e2df7a4cf27f7f8eefc7cf5973dfe1ecc546af507&=&format=webp&quality=lossless"
                      width="150" style="margin:auto">
                  <p class="text-center font-bold text-army-gelap">LAYANAN DARURAT</p>
              </a>
          </div>
      </div>
  </div>
@endsection
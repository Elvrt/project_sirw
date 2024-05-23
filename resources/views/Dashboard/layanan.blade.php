@extends('./layout/warga')
@section('content')
  <!-- CONTENT -->
  <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">Layanan</p>
  <!-- PENGAJUAN SURAT -->
  <div class="container mx-auto px-40 bg-gradient-to-r from-linear2 to-linear1 py-1 rounded-lg">
    <main class="relative self-center mt-10 mb-10 w-full max-w-[1080px] max-md:my-10 max-md:max-w-full">
      <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <figure class="flex flex-col w-[56%] max-md:ml-0 max-md:w-full">
          <img src="{{url('/assets/img/pengajuansurat.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
        </figure>
        <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
          <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">PENGAJUAN SURAT</p>
          <div class="flex relative flex-col grow px-2 mt-14text-xl text-white ">
            <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit excepturi incidunt obcaecati, asperiores at necessitatibus explicabo harum rerum maiores molestiae iste ea? Dicta natus quae, dolore perspiciatis accusantium tempora optio maxime quasi cupiditate eius repudiandae blanditiis libero.
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
          <img src="{{url('/assets/img/catataniuran.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
        </figure>
        <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
          <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">CATATAN IURAN</p>
          <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
            <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit temporibus dignissimos perferendis, reiciendis magnam consequuntur veritatis quisquam sequi commodi facere ad provident at ipsum magni sint sunt. Possimus nam quaerat illum, quidem veniam ipsa saepe laboriosam molestiae eum quod corporis.
            </p>
            <a href="statusIuran">
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
          <img src="{{url('/assets/img/fasilitasumum.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
        </figure>
        <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
          <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">FASILITAS UMUM</p>
          <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
            <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A quia rem cupiditate odit, itaque perspiciatis unde reiciendis harum quasi ab doloremque tempore illum rerum ducimus repellendus est fugit dolorem distinctio illo reprehenderit numquam. Nam, vero.
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
          <img src="{{url('/assets/img/pengaduan.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
        </figure>
        <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
          <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">PENGADUAN</p>
          <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
            <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quidem totam neque veritatis asperiores, suscipit mollitia sequi maxime laboriosam consectetur minus, doloribus sit animi soluta vitae maiores omnis nihil nobis. Expedita eaque quas tenetur inventore aut cumque est nihil consequatur!
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
          <img src="{{url('/assets/img/layanandarurat.png')}}" alt="Main image" class="w-full aspect-[1.79] max-md:mt-10 max-md:max-w-full" />
        </figure>
        <div class="flex flex-col ml-30 w-[44%] max-md:ml-0 max-md:w-full">
          <p class="text-center text-army-gelap font-medium text-sub drop-shadow-md">LAYANAN DARURAT</p>
          <div class="flex relative flex-col grow px-2 mt-14 text-xl text-white ">
            <p class="max-md:max-w-full text-normal text-justify text-army-gelap ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed perspiciatis, odio possimus tenetur quasi aliquam ipsum voluptatibus magni deleniti error quisquam, distinctio quae saepe voluptas eum velit. Odio, ipsum reiciendis?
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

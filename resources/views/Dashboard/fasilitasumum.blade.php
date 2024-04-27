@extends('./layout/warga')

@section('content')
<p class="text-center text-army-gelap font-medium text-sub drop-shadow-md mb-10 mt-5 md-10">FASILITAS UMUM</p>
<div class="flex justify-center items-center mt-10 ">
    <div class="bg-login2 w-automx-10 shadow-xl md:mx-10 mr-4 md:mr-32 ml-4 md:ml-32 p-10 rounded-lg">
        <div class="h-140 grid grid-cols-1 md:grid-cols-3 gap-7 mx-auto md:px-40 content-center">
            
            <div class="flex flex-col justify-center items-center relative">
                <a href="" class="mr-4 block cursor-pointer antialiased relative">
                    <img src="{{ url('/assets/img/fasum1.png') }}" width="400" style="margin:auto">
                    <p class="overlay-text text-abu-putih font-medium text-sub absolute bottom-0 left-0 right-0 bg-white bg-opacity-75 text-left p-4">
                        Lorem ipsum dolor sit amet</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center relative">
                <a href="#" class="mr-4 block cursor-pointer antialiased relative">
                    <img src="{{ url('/assets/img/fasum2.png') }}" width="400" style="margin:auto">
                    <p
                        class="overlay-text text-abu-putih font-medium text-sub absolute bottom-0 left-0 right-0 bg-white bg-opacity-75 text-left p-4">
                        Lorem, ipsum dolor sit amet</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center relative">
                <a href="#" class="mr-4 block cursor-pointer antialiased relative">
                    <img src="{{ url('/assets/img/fasum3.png') }}" width="400" style="margin:auto">
                    <p
                        class="overlay-text text-abu-putih font-medium text-sub absolute bottom-0 left-0 right-0 bg-white bg-opacity-75 text-left p-4">
                        Lorem ipsum dolor sit amet</p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
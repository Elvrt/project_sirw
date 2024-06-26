<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>

<body class="bg-login">
    <a href="/" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-20 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
    </a>
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-login2 rounded-3xl shadow-md">
            @if(session()->has('error'))
                <div id="errorModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-putih rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-putih px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            Error
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                {{ session('error') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="hideModal()">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="flex justify-center mb-8">
                <img src="{{url('/assets/img/logo.png')}}" class="h-30 w-60">
            </div>
            <form method="post" action="login">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-sm text-gray-600">Username</label>
                    <input type="username" id="username" name="username" value="{{ old('username') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 @error('username') border-red-500 @enderror" placeholder="Ketikkan Username...">
                    @error('username')
                        <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 @error('password') border-red-500 @enderror" placeholder="Ketikkan Password...">
                    @error('password')
                        <div class="text-red-500 mt-1 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-6">
                    <a href="forgotpassword" class="block text-right text-sm text-cyan-600 mt-2">Lupa Password?</a>
                </div> --}}
                <button type="submit" class="w-32 bg-coklat-muda text-cream-muda font-bold py-2 rounded-lg mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Login</button>
            </form>
        </div>
        <img src="{{url('/assets/img/backgroundloginpage.png')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-40" style="z-index: -1;">
    </div>
    <script>
        function hideModal() {
            document.getElementById('errorModal').classList.add('hidden');
        }
        document.getElementById('errorModal').classList.remove('hidden');
        setTimeout(function() {
            hideModal();
        }, 2000);
    </script>
</body>
</html>

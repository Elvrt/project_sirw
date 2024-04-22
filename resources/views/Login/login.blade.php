<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-login">
  <div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-login2 rounded-lg shadow-lg">
      <div class="flex justify-center mb-8">
        <img src="{{url('/assets/img/logo.png')}}" alt="Logo" class="w-80 h-40">
      </div>
      <form>
        <div class="mb-6">
          <label for="username" class="block mb-2 text-sm text-gray-600">Username</label>
          <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Username..." required>

        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
          <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Ketikkan Password..." required>
          <a href="forgotpassword" class="block text-right text-sm text-cyan-600 mt-2">Lupa Password?</a>
        </div>
        <button type="submit" class="w-32 bg-coklat-muda text-cream-muda font-bold py-2 rounded-lg mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Login</button>
    </div>
    <img src="{{url('/assets/img/backgroundloginpage.png')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
</body>
</html>
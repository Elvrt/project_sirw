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
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1222905957999448104/image.png?ex=6617eaec&is=660575ec&hm=8e777d9cbfc437095d117221a8b0ea3ea959102031c1e36df0f1c9e36e8a6249&=&format=webp&quality=lossless" alt="Logo" class="w-30 h-20">
      </div>
      <h1 class="text-2xl font-semibold text-center text-SiRW mt-4 mb-4">Sistem Informasi Rukun Warga</h1>
      <form>
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm text-gray-600">Correo electrónico</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm text-gray-600">Contraseña</label>
          <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
          <a href="#" class="block text-right text-xs text-cyan-600 mt-2">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Acceso</button>
      </form>
      <div class="text-center">
        <p class="text-sm">¿No tienes una cuenta? <a href="#" class="text-cyan-600">Regístrate ahora</a></p>
      </div>
      <p class="text-xs text-gray-600 text-center mt-10">&copy; 2023 WCS LAT</p>
    </div>
  </div>
</body>
</html>
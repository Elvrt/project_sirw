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
        <img src="https://media.discordapp.net/attachments/1222905897848934450/1223143600188293180/image.png?ex=6618c83f&is=6606533f&hm=cab0f89b323bb3787adb4d760c00cc6813d8177267af06ac34416b8a20f35241&=&format=webp&quality=lossless" alt="Logo" class="w-80 h-40">
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
    <img src="https://media.discordapp.net/attachments/1222905897848934450/1225900800446955632/image.png?ex=6622d016&is=66105b16&hm=4eb9158a8bd3bb5eb26f0ab5ccf94a9bd03e6f34a8ca3fdee5ebbb047dd9901c&=&format=webp&quality=lossless&width=986&height=701" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
</body>

</html>
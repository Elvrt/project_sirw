<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

<div class="min-h-screen flex items-center justify-center">
      <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8 bg-login2">
        <div class="flex justify-center mb-8">
        <img src="{{url('/assets/img/logo.png')}}" class="h-30 w-60">
        </div>
          <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="#">
              <div>
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                  <input type="username" name="Username" id="Username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ketikkan Username..." required="">
              </div>
              <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
                  <input type="password" name="password" id="password" placeholder="Ketikkan Password Baru" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
              </div>
              <div>
                  <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                  <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="Konfirmasi Password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="newsletter" aria-describedby="newsletter" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                  </div>
              </div>
              <button type="submit" class="w-32 bg-coklat-muda text-cream-muda font-bold py-2 rounded-lg mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Reset Password</button>
          </form>
      </div>
  </div>
  <img src="{{url('/assets/img/backgroundloginpage.png')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
  </div>
</body>
</html>
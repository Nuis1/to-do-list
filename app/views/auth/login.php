<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

  <!-- Card -->
  <div class="bg-white w-full max-w-md rounded-2xl shadow-lg p-8">

    <!-- Icon -->
    <div class="flex justify-center mb-4">
      <div class="w-16 h-16 rounded-full bg-indigo-500 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-8 h-8 text-white" 
             fill="none" 
             viewBox="0 0 24 24" 
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
      </div>
    </div>

    <!-- Title -->
    <h2 class="text-center text-xl font-semibold text-gray-800">
      Masuk ke akun Anda
    </h2>
    <p class="text-center text-gray-500 text-sm mb-6">
      Kelola tugas anda dengan mudah
    </p>

    <!-- Form -->
    <form>
      <!-- Email -->
      <div class="mb-4">
        <label class="block text-sm text-gray-600 mb-1">Email</label>
        <input type="email"
               placeholder="nama@email.com"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
      </div>

      <!-- Password -->
      <div class="mb-6">
        <label class="block text-sm text-gray-600 mb-1">Password</label>
        <input type="password"
               placeholder="********"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
      </div>

      <!-- Button -->
      <button type="submit"
              class="w-full bg-indigo-500 text-white py-2 rounded-lg font-semibold hover:bg-indigo-600 transition">
        Masuk
      </button>
    </form>

    <!-- Register -->
    <p class="text-center text-sm text-gray-500 mt-4">
      Belum punya akun?
      <a href="#" class="text-indigo-500 hover:underline">Daftar</a>
    </p>

  </div>

</body>
</html>

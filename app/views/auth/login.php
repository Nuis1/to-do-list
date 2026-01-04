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
      <div class="w-20 h-20 rounded-full bg-indigo-500 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 64 64"
            fill="none"
            stroke="white"
            stroke-width="5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-13 h-13">

          <!-- Arrow -->
          <line x1="10" y1="32" x2="34" y2="32" />
          <polyline points="26 24 34 32 26 40" />

          <!-- Door -->
          <path d="M40 18h8v28h-8" />
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
    <form action="/login" method="POST">
      <!-- Email -->
      <div class="mb-4">
        <label class="block text-sm text-gray-600 mb-1">Email</label>
        <input type="email" name="email" required
               placeholder="nama@email.com"
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
      </div>

      <!-- Password -->
      <div class="mb-6">
        <label class="block text-sm text-gray-600 mb-1">Password</label>
        <input type="password" name="password" required
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
      <a href="/register" class="text-indigo-500 hover:underline">Daftar</a>
    </p>

  </div>

</body>
</html>

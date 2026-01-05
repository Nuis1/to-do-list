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
      <div class="w-25 h-25 rounded-full bg-indigo-500 flex items-center justify-center">
          <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="50" cy="50" r="50" fill="#4F46E5"/>
          <path d="M26 48C24.8954 48 24 48.8954 24 50C24 51.1046 24.8954 52 26 52V50V48ZM59.4298 51.4142C60.2109 50.6332 60.2109 49.3668 59.4298 48.5858L46.7019 35.8579C45.9209 35.0768 44.6545 35.0768 43.8735 35.8579C43.0924 36.6389 43.0924 37.9052 43.8735 38.6863L55.1872 50L43.8735 61.3137C43.0924 62.0948 43.0924 63.3611 43.8735 64.1421C44.6545 64.9232 45.9209 64.9232 46.7019 64.1421L59.4298 51.4142ZM26 50V52H58.0156V50V48H26V50Z" fill="white"/>
          <path d="M54.8033 30H70C71.6569 30 73 31.3431 73 33V67C73 68.6569 71.6569 70 70 70H53" stroke="white" stroke-width="3" stroke-linecap="round"/>
          </svg>

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
    <?php if (!empty($_SESSION['error'])): ?>
      <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 text-sm">
        <?= $_SESSION['error']; ?>
      </div>
      <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

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
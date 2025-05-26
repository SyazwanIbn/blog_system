<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-gray-800">
  <section class="min-h-screen flex flex-col items-center justify-center px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-6">Selamat Datang ke Blog Saya</h1>
    <p class="text-lg md:text-xl text-gray-600 mb-8">Sistem CRUD Laravel untuk blog peribadi</p>
    <a href="{{ route('posts.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
      CRUD Project
    </a>
  </section>
</body>
</html>

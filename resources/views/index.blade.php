<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Baju Wanita</title>
  @vite('resources/css/app.css')
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-teal-400 py-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-white text-lg font-semibold">Toko Baju Wanita</h1>
      <ul class="flex space-x-6">
        <li><a href="#" class="text-white">Home</a></li>
        <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
        <li><a href="{{ route('about') }}" class="text-white">About</a></li>
        <li><a href="#" class="text-white">Contact</a></li>
        
      </ul>
    </div>
  </nav>

  <!-- Product Section -->
  <section class="py-12">
    <div class="container mx-auto text-center">
      <a href="#" class="text-red-500">Lihat Koleksi</a>
      <h2 class="text-2xl font-semibold mt-4">Koleksi Terbaru</h2>
      
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Product 1 -->
        <div class="border p-4 rounded-lg shadow">
          <img src="assets/images/dress1.jpeg" alt="Dress Elegan" class="mb-4">
          <h3 class="font-semibold">Dress Elegan</h3>
          <p>Rp 250.000</p>
          <a href="#" class="mt-4 bg-teal-300 text-white px-4 py-2 rounded">Beli Sekarang</a>
        </div>

        <!-- Product 2 -->
        <div class="border p-4 rounded-lg shadow">
          <img src="assets/images/dress2.jpeg" alt="Kemeja" class="mb-4">
          <h3 class="font-semibold">Kemeja</h3>
          <p>Rp 350.000</p>
          <a href="#" class="mt-4 bg-teal-300 text-white px-4 py-2 rounded">Beli Sekarang</a>
        </div>

        <!-- Product 3 -->
        <div class="border p-4 rounded-lg shadow">
          <img src="assets/images/dress3.jpeg" alt="Flower Dress" class="mb-3">
          <h3 class="font-semibold">Flower Dress</h3>
          <p>Rp 150.000</p>
          <a href="#" class="mt-4 bg-teal-300 text-white px-4 py-2 rounded">Beli Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto text-center">
      <h2 class="text-2xl font-semibold">Tentang Kami</h2>
      <p class="mt-4 text-gray-600">Kami adalah toko baju wanita yang berdedikasi untuk memberikan produk berkualitas tinggi dan desain terkini. Dengan berbagai pilihan baju elegan, kami berkomitmen untuk membantu Anda tampil menawan di setiap kesempatan.</p>
    </div>
  </section>

  <!-- Contact Us Section -->
  <section class="py-12">
    <div class="container mx-auto">
      <h2 class="text-2xl font-semibold text-center mb-4">Kontak Kami</h2>
      <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
          <label for="name" class="block text-gray-700">Nama:</label>
          <input type="text" id="name" class="w-full border border-gray-300 p-2 rounded mt-2">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700">Email:</label>
          <input type="email" id="email" class="w-full border border-gray-300 p-2 rounded mt-2">
        </div>
        <div class="mb-4">
          <label for="message" class="block text-gray-700">Pesan:</label>
          <textarea id="message" rows="4" class="w-full border border-gray-300 p-2 rounded mt-2"></textarea>
        </div>
        <button type="submit" class="bg-teal-400 text-white px-4 py-2 rounded">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-red-400 py-4 text-center text-white">
    <p>© 2024 fleure store.</p>
  </footer>

</body>
</html>
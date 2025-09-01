<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rumah Sakit Sadikin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Swiper CSS untuk scroll -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100">

  <!-- NAVBAR  -->
  <nav id="navbar" class="fixed top-0 left-0 w-full z-20 transition-all duration-500 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Brand nama -->
<img src="{{ asset('logo.png') }}" width="100px" height="100px">        
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 items-center">
          <a href="#" class="text-white hover:text-blue-400">Beranda</a>

          <!-- Profile Dropdown -->
          <div class="relative group">
            <button class="text-white hover:text-blue-400 flex items-center">
              Profile ▼
            </button>
            <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-40">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Sejarah</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Visi Misi</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Struktur Organisasi</a>
            </div>
          </div>

          <!-- Pelayanan Dropdown -->
          <div class="relative group">
            <button class="text-white hover:text-blue-400 flex items-center">
              Pelayanan ▼
            </button>
            <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg w-40">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Rawat Jalan</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">IGD</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Laboratorium</a>
            </div>
          </div>
        </div>

        <!-- Mobile Button -->
        <button id="mobile-btn" class="md:hidden text-white text-2xl">☰</button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white">Beranda</a>
      
      <details class="border-t border-gray-200">
        <summary class="px-4 py-2 cursor-pointer text-gray-700 hover:bg-gray-100">Profile</summary>
        <div class="pl-6 pb-2">
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">Sejarah</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">Visi Misi</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">Struktur Organisasi</a>
        </div>
      </details>

      <details class="border-t border-gray-200">
        <summary class="px-4 py-2 cursor-pointer text-gray-700 hover:bg-gray-100">Pelayanan</summary>
        <div class="pl-6 pb-2">
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">Rawat Jalan</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">IGD</a>
          <a href="#" class="block py-1 text-gray-600 hover:text-blue-600">Laboratorium</a>
        </div>
      </details>
    </div>
  </nav>

  <!-- HERO SWIPER -->
  <section class="relative w-full h-screen overflow-hidden">
    <div class="swiper h-full">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide relative">
          <img src="https://picsum.photos/id/1015/1600/900" class="w-full h-full object-cover" alt="">
          <div class="absolute inset-0 bg-black/40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white">Selamat Datang di Rumah Sakit Sadikin</h1>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide relative">
          <img src="https://picsum.photos/id/1005/1600/900" class="w-full h-full object-cover" alt="">
          <div class="absolute inset-0 bg-black/40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white">Data Gizi Lebih Mudah</h1>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide relative">
          <img src="https://picsum.photos/id/1025/1600/900" class="w-full h-full object-cover" alt="">
          <div class="absolute inset-0 bg-black/40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white">Laporan Cepat & Akurat</h1>
          </div>
        </div>
      </div>

      <!-- Swiper Pagination & Navigation -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="bg-white py-16 px-6 md:px-20">
  <div class="grid md:grid-cols-2 gap-12 items-center">
    <!-- Kiri -->
    <div>
      <span class="text-teal-600 font-semibold text-sm uppercase tracking-wide">
        Tentang Kami
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mt-2 leading-snug">
        Komitmen Kami Memberikan <br />
        Pelayanan Kesehatan Berkualitas untuk Anda
      </h2>
      <p class="text-gray-600 mt-4 leading-relaxed">
        Kami percaya bahwa kesehatan adalah prioritas utama. 
        Dengan tim medis berpengalaman dan fasilitas terbaik, 
        kami siap mendampingi Anda menjaga kesehatan melalui pemeriksaan rutin, 
        vaksinasi, hingga konsultasi khusus sesuai kebutuhan Anda.
      </p>

      <!-- Tombol -->
      <div class="flex flex-col sm:flex-row gap-4 mt-6">
        <a href="#" 
           class="flex items-center gap-2 bg-teal-600 text-white px-6 py-3 rounded-xl shadow hover:bg-teal-700 transition">
          📞 Hubungi Kami
        </a>
        <a href="#" 
           class="flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700 transition">
          📅 Buat Janji
        </a>
      </div>
    </div>

    <!-- Kanan -->
    <div class="relative flex justify-center">
      <div class="relative w-72 h-72">
        <img 
          src="https://images.unsplash.com/photo-1504813184591-01572f98c85f?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
          alt="Tentang Kami"
          class="absolute inset-0 w-full h-full object-cover 
                 [clip-path:polygon(20%_0,100%_0,80%_100%,0%_100%)] rounded-3xl shadow-lg" />
      </div>
    </div>
  </div>
</section>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    // Swiper init
    const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // Toggle mobile menu
    document.getElementById("mobile-btn").addEventListener("click", function() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });

    // Navbar scroll effect
    window.addEventListener("scroll", function() {
      const nav = document.getElementById("navbar");
      if (window.scrollY > 50) {
        nav.classList.remove("bg-transparent");
        nav.classList.add("bg-white", "shadow-lg");
        nav.querySelectorAll("a, button, div.font-bold").forEach(el => {
          el.classList.remove("text-white");
          el.classList.add("text-gray-800");
        });
      } else {
        nav.classList.remove("bg-white", "shadow-lg");
        nav.classList.add("bg-transparent");
        nav.querySelectorAll("a, button, div.font-bold").forEach(el => {
          el.classList.remove("text-gray-800");
          el.classList.add("text-white");
        });
      }
    });
  </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rumah Sakit Sadikin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Swiper CSS untuk scroll  untuk mengambil librari menggunkan cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-100">

  <!-- NAVBAR  bagina navbar -->
  <nav id="navbar" class="fixed top-0 left-0 w-full z-20 transition-all duration-500 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Brand nama  untuk logo-->
<img src="{{ asset('logo.png') }}" width="100px" height="100px">        
        <!-- Desktop Menu  untuk tamilan PC atau Laptop atau min 768-->
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

        <!-- Mobile Button berfungsi untuk ketika layar dibwan min 760-->
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

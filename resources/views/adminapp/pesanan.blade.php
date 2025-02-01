<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PASON App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-sm mx-auto bg-white min-h-screen relative pb-20">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 bg-white">
            <img src="/img/Illustration2 3.png" alt="Logo Pason" class="w-24 h-10 object-contain" />
            <div class="text-right pr-3">
                <i class="fas fa-bell text-green-500 text-2xl"></i>
            </div>
        </div>

         <!-- Banner Diskon -->
         <!-- <div class="bg-white p-5">
         <div class="bg-green-500 rounded-lg flex items-center justify-between p-4">
            <div class="text-white text-sm">
                <p class="font-bold">DISKON<br />12.12.2024</p>
            </div>
            <div class="bg-[#1E7D34] rounded-full h-15 w-15 flex justify-center items-center">
                <img
                    src="/img/Illustration2 8.png"
                    alt="Foto Banner"
                    class="w-full h-full mt-[-10px]" />
            </div>
        </div>
        </div> -->

        <div class="flex flex-col px-5">
        <!-- <div class="text-right mb-2 ml-auto">
        <button class="bg-green-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-green-600 transition" onclick="openModal()">
            Tambah Produk
        </button>
        </div> -->

        <div class="text-left mb-3">
            <h2 class="text-lg font-bold text-gray-700">Daftar Pesanan</h2>
        </div>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-green-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-green-600 transition ml-auto">
                Proses
            </button>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-green-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-green-600 transition ml-auto">
                Proses
            </button>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-green-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-green-600 transition ml-auto">
                Proses
            </button>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-green-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-green-600 transition ml-auto">
                Proses
            </button>
        </div>
        <div class="flex flex-col px-5">
        <div class="text-left mb-3">
            <h2 class="text-lg font-bold text-gray-700">Sudah Diproses</h2>
        </div>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-yellow-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-yellow-600 transition ml-auto">
                Dikirim
            </button>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-red-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-red-600 transition ml-auto">
                Ditolak
            </button>
        </div>
        <div class="bg-green-50 border border-green-300 p-4 rounded-lg ml-4 mr-4 flex items-center justify-between mb-4">
            <div class="flex items-center space-x-4">
                <img src="/img/kangkung.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                <div>
                    <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                    <p class="text-xs text-gray-500">100/Ikat</p>
                    <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                </div>
            </div>
            <button onclick="showPopup()" class="bg-green-500 text-white px-2 py-1 rounded-lg font-bold hover:bg-green-600 transition ml-auto">
                Diterima
            </button>
        </div>

        <!-- Footer Navigasi -->
        <div class="flex flex-row justify-between items-center bg-white py-4 px-8 fixed bottom-0 w-full max-w-sm mx-auto border-t">
            <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage4()">
                <i class="fas fa-home text-green-500 mb-1"></i>
                <span class="text-green-500 text-xs">Beranda</span>
            </div>
            <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage5()">
          <i class="fas fa-history text-green-500 mb-1"></i>
                <span class="text-green-500 text-xs">Riwayat</span>
            </div>
            <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage6()">
                <i class="fas fa-shopping-cart text-green-500 mb-1"></i>
                <span class="text-green-500 text-xs">Pesanan</span>
            </div>
            <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage7()">
                <i class="fas fa-user text-green-500 mb-1"></i>
                <span class="text-green-500 text-xs">Akun</span>
            </div>
        </div>

        <!-- Modal -->
        <div id="productModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white rounded-lg p-4 max-w-xs w-full m-4">
            <div class="flex justify-end">
                <button onclick="closeModal()" class="text-gray-500 text-xl">&times;</button>
            </div>
            <h2 class="font-semibold text-lg mb-4">Tambah Produk</h2>
            <form>
    <!-- Bagian Upload Gambar -->
    <div class="flex items-center mb-5 space-x-4">
    <!-- Ikon di sisi kiri -->
    <div class="bg-green-200 w-24 h-24 flex items-center justify-center rounded-lg">
        <label for="file-upload" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
        </label>
        <input type="file" id="file-upload" class="hidden" accept="image/*" />
    </div>

    <!-- Tombol di sisi kanan -->
    <div class="flex flex-col items-start">
        <label for="file-upload" class="flex items-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 text-sm font-medium transition duration-200 cursor-pointer">
            Pasang Gambar
        </label>
        <input type="file" id="file-upload" class="hidden" accept="image/*" />
        <p class="text-gray-500 text-xs mt-2">
            Masukan Gambar Produk<br />
            Maksimal 150Mb
        </p>
    </div>
</div>

    <!-- Input Nama Barang -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-medium text-sm mb-2">Masukkan Nama Barang</label>
        <input type="text" id="name" name="name" class="border border-gray-300 rounded-lg px-3 py-2 w-full" placeholder="Masukkan Nama Barang disini" />
    </div>

    <!-- Input Tipe Barang -->
    <div class="mb-4">
        <label for="type" class="block text-gray-700 font-medium text-sm mb-2">Tipe Barang</label>
        <input type="text" id="type" name="type" class="border border-gray-300 rounded-lg px-3 py-2 w-full" placeholder="Sayur/Daging/Buah/Ubi/Sembako/Bumbu" />
    </div>

    <!-- Input Harga -->
    <div class="mb-4">
        <label for="price" class="block text-gray-700 font-medium text-sm mb-2">Harga</label>
        <input type="text" id="price" name="price" class="border border-gray-300 rounded-lg px-3 py-2 w-full" placeholder="Rp 00000000" />
    </div>

    <!-- Input Deskripsi Barang -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-medium text-sm mb-2">Deskripsi Barang Jualan</label>
        <textarea id="description" name="description" class="border border-gray-300 rounded-lg px-3 py-2 w-full" rows="3" placeholder="Masukkan deskripsi barang jualan"></textarea>
    </div>

    <!-- Tombol Submit -->
    <div class="flex justify-end">
    <button type="submit" class="bg-green-500 text-white px-8 py-2 rounded-lg hover:bg-green-600 transition duration-200 ">
        Pasang
    </button>
</div>
</form>

        </div>
    </div>
   <!-- Popup Modal -->
<div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white p-4 rounded-lg shadow-xl max-w-xs w-full m-4 relative">
        <button onclick="closePopup()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
        <h2 class="text-center text-lg font-bold mb-4">Proses Pesanan</h2>
        <div class="flex justify-center mb-4">
        <img src="/img/ele.jpg" alt="Avatar" class="w-24 h-24 rounded-full object-cover">
        </div>
        <h3 class="text-center text-base font-bold mb-4">Yohanes</h3>
        <div class="bg-green-100 p-4 rounded-lg">
  <!-- Container Flex untuk Foto dan Info Produk -->
  <div class="flex items-center mb-4">
    <!-- Foto -->
    <img src="/img/kangkung.jpg" alt="Sayur Kangkung" class="w-24 h-24 rounded-lg object-cover mr-4">

    <!-- Info Produk -->
    <div>
      <h3 class="font-bold">Sayur Kangkung</h3>
      <p>8 Ikat</p>
      <p class="text-green-600 font-bold">Rp 49.600</p>
    </div>
  </div>

  <!-- Informasi Tambahan Tetap di Tempat -->
  <p class="text-sm">Total Belanja:</p>
  <p class="text-sm">Tanggal Pengiriman:</p>
  <p class="text-sm">Jam Pengiriman:</p>
  <p class="text-sm">Alamat:</p>
</div>


        <div class="mt-4 flex justify-end space-x-4">
            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-red-500">Tolak</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Setuju</button>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
          // Redirect functions
          function redirectToPage4() {
            window.location.href = "/admin/dashboard_admin";
        }
        function redirectToPage5() {
            window.location.href = "#";
        }
        function redirectToPage6() {
            window.location.href = "/admin/pesanan";
        }
        function redirectToPage7() {
            window.location.href = "/admin/profiladmin";
        }
    </script>
    <script>
        function openModal() {
            document.getElementById("productModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("productModal").classList.add("hidden");
        }
    </script>

<script>
    function showPopup() {
      document.getElementById('popup').classList.remove('hidden');
    }

    function closePopup() {
      document.getElementById('popup').classList.add('hidden');
    }
  </script>
</body>
</html>

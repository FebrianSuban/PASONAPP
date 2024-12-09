<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-white flex justify-center items-center min-h-screen">
    <!-- Container Utama -->
    <div class="w-full max-w-[375px] h-[812px] bg-white rounded-[20px] shadow-lg overflow-hidden relative flex flex-col">
        <!-- Gambar Header -->
        <div class="relative">
            <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Header Image" class="w-full h-56 object-cover rounded-tl-[20px] rounded-tr-[20px]">
        </div>
        <!-- Konten Pesanan -->
        <div class="p-5 flex-1">
            <h1 class="text-center text-lg font-semibold text-gray-800 mb-4">Pesanan</h1>

            <!-- Pilihan Kategori -->
            <div class="mb-4 w-1/2">
                <label class="block text-gray-600 text-sm font-medium mb-1">Kategori</label>
                <select class="w-full bg-green-100 text-green-600 py-2 px-3 rounded-lg border border-green-300">
                    <option>Sayur Hijau</option>
                    <option>Buah Segar</option>
                    <option>Daging</option>
                </select>
            </div>

            <!-- Pencarian -->
            <div class="relative mb-4">
            <label class="block text-gray-600 text-sm font-medium mb-1">Cari</label>
                <input type="text" placeholder="Cari Produk" class="w-full bg-gray-100 border border-gray-300 text-gray-600 py-2 px-3 rounded-lg">
                <button class="absolute right-2 bottom-2 transform bg-green-400 text-white p-0.11 rounded-full">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- Daftar Produk -->
            <div class="space-y-4 overflow-y-auto max-h-[300px]">
                <!-- Produk Item -->
                <div class="bg-green-50 border border-green-300 p-4 rounded-lg flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Produk" class="w-12 h-12 object-cover rounded-lg">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-800">Sayur Kangkung</h3>
                            <p class="text-xs text-gray-500">Toko Ahmad</p>
                            <p class="text-xs text-green-600 font-bold">Rp 6.200 / Ikat</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="bg-gray-200 text-gray-600 w-4 h-4 flex items-center justify-center rounded-full">
                            <i class="fas fa-minus"></i>
                        </button>
                        <span class="text-sm font-semibold text-gray-800">1</span>
                        <button class="bg-green-500 text-white w-4 h-4 flex items-center justify-center rounded-full">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <button class="text-red-500 text-lg font-bold">&times;</button>
                </div>
            </div>

            <!-- Footer -->
        <div class="bg-green-50 px-5 py-4 border-t border-green-300">
            <div class="flex justify-between items-center text-sm mb-2">
                <span class="text-gray-600">Total Belanja</span>
                <span class="text-gray-800 font-semibold">1</span>
            </div>
            <div class="flex justify-between items-center text-sm mb-4">
                <span class="text-gray-600">Total Harga</span>
                <span class="text-green-600 font-bold">Rp 6.200</span>
            </div>
            <div class="text-right">
                <a href="/jadwalpesanan" class="bg-green-500 text-white py-2 px-4 rounded-lg text-sm font-semibold">Selanjutnya</a>
            </div>
        </div>
        </div>
        <!-- Footer Navigasi -->
          <!-- Footer Navigasi -->
          <div class="flex flex-row justify-between items-center bg-white py-4 px-4 sticky bottom-0 w-full z-100 fixed">
        <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage()">
            <i class="fas fa-home text-green-500 mb-1"></i>
            <span class="text-green-500 text-xs">Beranda</span>
        </div>
        <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage1()">
            <i class="fas fa-history text-green-500 mb-1"></i>
            <span class="text-green-500 text-xs">Jadwal</span>
        </div>
        <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage2()">
            <i class="fas fa-shopping-cart text-green-500 mb-1"></i>
            <span class="text-green-500 text-xs">Keranjang</span>
        </div>
        <div class="text-center cursor-pointer flex flex-col items-center" onclick="redirectToPage3()">
            <i class="fas fa-user text-green-500 mb-1"></i>
            <span class="text-green-500 text-xs">Akun</span>
        </div>
    </div>
    </div>

    <script>
        // Redirect functions
        function redirectToPage() {
            window.location.href = "/dashboardmobile";
        }
        function redirectToPage1() {
            window.location.href = "/pesanansaya";
        }
        function redirectToPage2() {
            window.location.href = "/formpesanan";
        }
        function redirectToPage3() {
            window.location.href = "/profilsaya";
        }
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

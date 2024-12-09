<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-white flex justify-center items-center min-h-screen">
    <div class="w-full max-w-[375px] h-[812px] bg-white rounded-[20px] shadow-lg overflow-hidden relative">
        <!-- Header -->
        <div class="flex items-center justify-center p-5 bg-white">
            <h1 class="text-lg font-bold text-[#333333]">Proses Pesanan</h1>
        </div>

        <!-- Pesanan Aktif -->
        <h2 class="font-bold text-lg text-[#333333] mx-5 mb-3 mt-5">Pesanan</h2>
        <div class="bg-[#EAF9EC] rounded-lg p-4 mx-5 mb-4">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-bold text-[#333333]">Pesanan 2</span>
                <span class="bg-[#FFC957] text-white text-xs font-medium py-1 px-2 rounded-full">Proses</span>
            </div>
            <div class="text-xs text-[#666666] mb-2">Senin, 1 Juli 2024 - Senin, 1 Juli 2024</div>
            <div class="text-xl font-bold text-[#333333] mb-3">Rp. 26.000</div>
            <div class="flex justify-between">
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pembayaran</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pickup</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dikirim</span>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dalam Perjalanan</span>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Diterima</span>
                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                </div>
            </div>
        </div>

        <!-- History -->
        <h2 class="font-bold text-lg text-[#333333] mx-5 mb-3 mt-20">History</h2>
        <div class="bg-[#EAF9EC] rounded-lg p-4 mx-5 mb-4">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-bold text-[#333333]">Pesanan 1</span>
                <span class="bg-[#48BF53] text-white text-xs font-medium py-1 px-2 rounded-full">Selesai</span>
            </div>
            <div class="text-xs text-[#666666] mb-2">Rabu, 12 Juni 2024 - Kamis, 13 Juni 2024</div>
            <div class="text-xl font-bold text-[#333333] mb-3">Rp. 49.000</div>
            <div class="flex justify-between">
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pembayaran</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pickup</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dikirim</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dalam Perjalanan</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Diterima</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
            </div>
        </div>
        <div class="bg-[#EAF9EC] rounded-lg p-4 mx-5 mb-4">
            <div class="flex justify-between mb-2">
                <span class="text-sm font-bold text-[#333333]">Pesanan 2</span>
                <span class="bg-[#48BF53] text-white text-xs font-medium py-1 px-2 rounded-full">Selesai</span>
            </div>
            <div class="text-xs text-[#666666] mb-2">Rabu, 12 Juni 2024 - Kamis, 13 Juni 2024</div>
            <div class="text-xl font-bold text-[#333333] mb-3">Rp. 49.000</div>
            <div class="flex justify-between">
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pembayaran</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Pickup</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dikirim</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Dalam Perjalanan</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] text-[#333333] mb-1">Diterima</span>
                    <div class="w-2 h-2 bg-[#48BF53] rounded-full"></div>
                </div>
            </div>
        </div>
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
</body>
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
</html>

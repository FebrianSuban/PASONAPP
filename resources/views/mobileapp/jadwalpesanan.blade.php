<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
    <!-- Container Utama -->
    <div class="w-full max-w-[375px] h-[812px] bg-white rounded-[20px] shadow-lg overflow-hidden flex flex-col">
        <!-- Header -->
        <div class="bg-green-500 text-white text-center py-3 text-lg font-bold">
            Jadwal Pengiriman
        </div>

        <!-- Konten -->
        <div class="p-5 flex-1 overflow-y-auto">
            <h2 class="text-gray-800 font-bold text-base mb-2">Jam Pengiriman</h2>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="text-center p-2 border-2 border-green-300 rounded-md cursor-pointer hover:bg-green-500 hover:text-white">09:00 WIB</div>
                <div class="text-center p-2 border-2 border-green-300 rounded-md cursor-pointer hover:bg-green-500 hover:text-white">10:00 WIB</div>
                <div class="text-center p-2 border-2 border-green-300 rounded-md cursor-pointer hover:bg-green-500 hover:text-white">11:00 WIB</div>
                <div class="text-center p-2 border-2 border-green-300 rounded-md cursor-pointer hover:bg-green-500 hover:text-white">13:00 WIB</div>
            </div>

            <!-- Jasa Pengiriman -->
            <h2 class="text-gray-800 font-bold text-base mb-2">Jasa Pengiriman</h2>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="text-center p-2 border-2 border-green-300 rounded-md cursor-pointer hover:bg-green-500 hover:text-white">Go-Send</div>
            </div>

            <!-- Ringkasan -->
            <div class="bg-green-100 p-4 rounded-md mb-2">
                <div class="flex justify-between text-gray-700 mb-2">
                    <span>Total Harga Sayur:</span>
                    <span>Rp. 21.000</span>
                </div>
                <div class="flex justify-between text-gray-700 mb-2">
                    <span>Jasa Pengiriman:</span>
                    <span>Rp. 3.000</span>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="flex justify-between w-full mb-2">
                        <span class="font-bold text-gray-800">Total:</span>
                        <span class="font-bold text-gray-800">Rp. 24.000</span>
                    </div>
                </div>
                <div class="text-right">
                    <a href="/pembayaranewallet" class="bg-green-500 text-white py-2 px-4 rounded-lg text-sm font-semibold">Bayar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

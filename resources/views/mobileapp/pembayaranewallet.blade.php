<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - E-Wallet</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto mt-8 bg-white rounded-2xl shadow-lg p-6">
        <h2 class="text-xl font-bold mb-6 text-gray-800">Metode Pembayaran</h2>

        <!-- Metode Pembayaran -->
        <div class="flex items-center border border-gray-300 rounded-lg p-3 mb-3 hover:border-green-500 transition">
            <img src="/img/images__7_-removebg-preview 1.png"
                 alt="Transfer Bank" class="w-8 h-8 mr-4">
            <span class="text-gray-700">Transfer Bank</span>
            <div class="ml-auto w-5 h-5 border-2 border-green-500 rounded-full"></div>
        </div>
        <div class="flex items-center border border-green-500 rounded-lg p-3 mb-6 bg-green-50">
            <img src="/img/images__7_-removebg-preview 1(1).png"
                 alt="E-Wallet" class="w-8 h-8 mr-4">
            <span class="text-gray-700 font-medium">E-Wallet</span>
            <div class="ml-auto w-5 h-5 border-2 border-green-500 rounded-full bg-green-500"></div>
        </div>

        <!-- Pilihan E-Wallet -->
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Pilih E-Wallet</h3>
        <div class="flex justify-between mb-6">
            <img src="/img/28fdedc2022b5de9ae5a7f2507eb5f2d.png" alt="OVO" class="w-12 h-auto">
            <img src="/img/Logo_Dana_-_Dompet_Digital_-_Download_File_Vector_PNG-removebg-preview.png" alt="DANA" class="w-12 h-auto">
            <img src="/img/Logo_LinkAja_-_Download_File_Vector_PNG-removebg-preview.png" alt="LinkAja" class="w-12 h-auto">
            <img src="/img/logo-gopay-vector.png" alt="GoPay" class="w-12 h-auto">
        </div>

        <!-- Panduan Pembayaran -->
        <div class="bg-green-50 border border-green-300 rounded-lg p-4 mb-6">
            <p class="font-semibold text-green-600">Panduan OVO:</p>
            <ol class="list-decimal list-inside text-gray-700 space-y-1">
                <li>Buka aplikasi OVO Anda</li>
                <li>Pilih menu "Bayar"</li>
                <li>Scan QR code atau masukkan nomor merchant</li>
                <li>Masukkan jumlah pembayaran</li>
                <li>Konfirmasi dan selesaikan transaksi</li>
            </ol>
        </div>

        <!-- Total -->
        <div class="text-gray-800 font-semibold text-lg mb-4">Total</div>

        <!-- Tombol Bayar -->
         <a href="/pesanansaya" class="w-full bg-green-500 text-white py-3 rounded-lg font-bold text-lg hover:bg-green-600 transition block text-center">
            Bayar
        </a>
    </div>
</body>
</html>

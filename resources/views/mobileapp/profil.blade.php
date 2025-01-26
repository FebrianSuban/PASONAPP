<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="max-w-sm mx-auto bg-white min-h-screen relative pb-20">
        <!-- Header -->
        <div class="flex justify-center items-center px-5 py-4 relative">
            <h1 class="text-lg font-bold text-gray-800">Profil</h1>
        </div>

        <!-- Foto Profil -->
        <div class="relative w-24 h-24 mx-auto mt-5">
            <img src="/img/ele.jpg" alt="Foto Profil" class="w-full h-full rounded-full object-cover">
            <div class="absolute bottom-0 right-0 w-8 h-8 bg-green-400 rounded-full flex justify-center items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15.5C14.21 15.5 16 13.71 16 11.5C16 9.29 14.21 7.5 12 7.5C9.79 7.5 8 9.29 8 11.5C8 13.71 9.79 15.5 12 15.5ZM19 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.11 21 21 20.1 21 19V5C21 3.9 20.11 3 19 3ZM19 19H5V5H19V19Z" fill="white"/>
                </svg>
            </div>
        </div>

        <!-- Info Profil -->
        <div class="bg-green-100 rounded-2xl p-5 mx-5 mt-20">
            <div class="flex mb-4">
                <span class="w-1/3 font-semibold text-gray-600">Nama :</span>
                <span class="w-2/3 text-gray-800">Yohanes</span>
            </div>
            <div class="flex mb-4">
                <span class="w-1/3 font-semibold text-gray-600">Alamat :</span>
                <span class="w-2/3 text-gray-800">Jalan Jalan</span>
            </div>
            <div class="flex mb-4">
                <span class="w-1/3 font-semibold text-gray-600">Nomor HP :</span>
                <span class="w-2/3 text-gray-800">082366523689</span>
            </div>
            <div class="flex mb-4">
                <span class="w-1/3 font-semibold text-gray-600">Email :</span>
                <span class="w-2/3 text-gray-800">yohannes@gmail.com</span>
            </div>
        </div>
        <div class="bg-green-100 rounded-2xl p-5 mx-5 mt-20">
            <table class="w-full mb-4">
                <thead>
                    <tr>
                        <th class="text-left font-semibold text-gray-600">Total Pesanan</th>
                        <th class="text-right text-gray-800">100</th>
                    </tr>
                </thead>
            </table>
            <table class="w-full mb-4">
                <thead>
                    <tr>
                        <th class="text-left font-semibold text-gray-600">Rating Akun</th>
                        <th class="text-right text-gray-800">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-gray-500"></i>
                            <i class="fas fa-star text-gray-500"></i>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- Tombol Edit -->
        <button class="bg-green-500 text-white py-2 px-6 rounded-2xl font-medium text-base mx-auto block mt-6 hover:bg-green-600 transition mt-15">
            Edit
        </button>
        <div class="flex flex-row justify-between items-center bg-white py-4 px-8 fixed bottom-0 w-full max-w-sm mx-auto border-t">
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
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrian Sabun App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="max-w-sm mx-auto bg-white min-h-screen relative pb-20">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 bg-white">
            <img src="/img/Illustration2 3.png" alt="Logo Pason" class="w-25 h-10">
            <div class="text-right pr-3">
                <i class="fas fa-bell text-green-500 text-2xl"></i>
            </div>
        </div>

        <!-- Banner Diskon -->
        <div class="bg-white p-5">
            <div class="bg-green-500 rounded-lg flex items-center justify-between p-4">
                <div class="text-white text-sm">
                    <p>DISKON<br>12.12.2024</p>
                </div>
                <div class="bg-[#1E7D34] rounded-full h-15 w-15 flex justify-center items-center">
                    <img src="/img/Illustration2 8.png" alt="Foto Banner" class="w-full h-full mt-[-10px]">
                </div>
            </div>
        </div>

        <!-- Daftar Produk -->
        <div class="grid grid-cols-2 gap-4 p-5">
            <!-- Kartu Produk -->
            <div
                class="product-card bg-[#E9F5E9] rounded-lg p-4 cursor-pointer"
                data-image="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg"
                data-title="Sayur Kangkung"
                data-description="Sayur kangkung segar, cocok untuk berbagai masakan. Harga terjangkau!"
            >
                <div class="rounded-lg">
                    <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Foto Produk" class="w-full rounded-lg">
                </div>
                <div class="text-left mt-2">
                    <p class="font-bold text-sm text-gray-500" style="font-family: 'Lato', sans-serif;">Sayur Kangkung</p>
                    <small class="text-[#7A7A7A]"><strong>Rp 6.200</strong><br>Toko Ahmad <br>Rating
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-grey-500"></i>
                    </small>
                </div>
            </div>

            <!-- Tambahkan produk lain dengan atribut yang relevan -->
            <!-- Contoh produk kedua -->
            <div
                class="product-card bg-[#E9F5E9] rounded-lg p-4 cursor-pointer"
                data-image="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg"
                data-title="Sayur Kangkung"
                data-description="Sayur kangkung segar, cocok untuk berbagai masakan. Harga terjangkau!"
            >
                <div class="rounded-lg">
                    <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Foto Produk" class="w-full rounded-lg">
                </div>
                <div class="text-left mt-2">
                    <p class="font-bold text-sm text-gray-500" style="font-family: 'Lato', sans-serif;">Sayur Kangkung</p>
                    <small class="text-[#7A7A7A]"><strong>Rp 6.500</strong><br>Toko Reza <br>Rating
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-grey-500"></i>
                    </small>
                </div>
            </div>

            <div
                class="product-card bg-[#E9F5E9] rounded-lg p-4 cursor-pointer"
                data-image="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg"
                data-title="Sayur Kangkung"
                data-description="Sayur kangkung segar, cocok untuk berbagai masakan. Harga terjangkau!"
            >
                <div class="rounded-lg">
                    <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Foto Produk" class="w-full rounded-lg">
                </div>
                <div class="text-left mt-2">
                    <p class="font-bold text-sm text-gray-500" style="font-family: 'Lato', sans-serif;">Sayur Kangkung</p>
                    <small class="text-[#7A7A7A]"><strong>Rp 6.500</strong><br>Toko Reza <br>Rating
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-grey-500"></i>
                    </small>
                </div>
            </div>
            <div
                class="product-card bg-[#E9F5E9] rounded-lg p-4 cursor-pointer"
                data-image="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg"
                data-title="Sayur Kangkung"
                data-description="Sayur kangkung segar, cocok untuk berbagai masakan. Harga terjangkau!"
            >
                <div class="rounded-lg">
                    <img src="/img/640-vegetable-and-herb-pile-of-water-spinach-or-ipomoea-aquatica-selling-at-fresh-market-in-indonesian-it-is-called-kangkung-dfd91bf15551cc4a39deb2d33910fe0a-20d6a116be547391129088e1f2ef936c_600x400.jpg" alt="Foto Produk" class="w-full rounded-lg">
                </div>
                <div class="text-left mt-2">
                    <p class="font-bold text-sm text-gray-500" style="font-family: 'Lato', sans-serif;">Sayur Kangkung</p>
                    <small class="text-[#7A7A7A]"><strong>Rp 6.500</strong><br>Toko Reza <br>Rating
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-grey-500"></i>
                    </small>
                </div>
            </div>
        </div>

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

        <!-- Modal -->
        <div id="productModal" class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white rounded-lg p-4 max-w-xs w-full">
                <div class="flex justify-end">
                    <button onclick="closeModal()" class="text-gray-500 text-xl">&times;</button>
                </div>
                <div class="text-center">
                    <img id="modalImage" src="" alt="Product Image" class="rounded-lg w-full h-24 object-cover mb-3">
                    <h3 id="modalTitle" class="font-semibold text-base mb-1">Nama Produk</h3>
                    <p id="modalDescription" class="text-gray-700 text-xs mb-3">Deskripsi produk akan ditampilkan di sini.</p>
                </div>
                <button onclick="closeModal()" class="w-full bg-green-500 text-white py-1 rounded-lg">beli</button>
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

        // Modal functions
        function openModal(image, title, description) {
            document.getElementById("modalImage").src = image;
            document.getElementById("modalTitle").innerText = title;
            document.getElementById("modalDescription").innerText = description;
            document.getElementById("productModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("productModal").classList.add("hidden");
        }

        // Add event listeners to product cards
        document.querySelectorAll(".product-card").forEach((card) => {
            card.addEventListener("click", function () {
                const image = this.getAttribute("data-image");
                const title = this.getAttribute("data-title");
                const description = this.getAttribute("data-description");
                openModal(image, title, description);
            });
        });
    </script>
</body>
</html>



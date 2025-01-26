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
        <div class="bg-white p-5">
            <div class="bg-green-500 rounded-lg flex items-center justify-between p-4">
                <div class="text-white text-sm">
                    <p class="font-bold">DISKON<br />12.12.2024</p>
                </div>
                <div class="bg-[#1E7D34] rounded-full h-15 w-15 flex justify-center items-center">
                    <img src="/img/Illustration2 8.png" alt="Foto Banner" class="w-full h-full mt-[-10px]" />
                </div>
            </div>
        </div>


        <div class="flex flex-col px-5">
            <!-- Teks "Produk Kami" -->
            <div class="text-left mb-2">
                <h2 class="text-lg font-bold text-gray-700">Produk Kami</h2>
            </div>

            <!-- Pilihan Kategori -->
            <div class="w-auto">
                <select id="category" name="categori"
                    class="w-auto bg-green-50 text-green-600 py-1 px-2 rounded-lg border border-green-300">
                    <option value="Buah">Buah</option>
                    <option value="Sayur">Sayur</option>
                    <option value="Daging">Daging</option>
                    <option value="Bumbu Dapur">Bumbu Dapur</option>
                    <option value="Kacang-Kacangan">Kacang-Kacangan</option>
                    <option value="Umbi-Umbian">Umbi-Umbian</option>
                </select>
            </div>
        </div>

        <!-- Daftar Produk -->
        <div class="grid grid-cols-2 gap-4 p-5" id="product-list"></div>

        <!-- Navigation Buttons -->
        <div class="flex justify-between px-5 py-1">
            <button onclick="onPrev()"
                class="px-2 py-1 bg-gradient-to-r from-green-500 to-green-700 text-white text-xs font-medium rounded-full shadow-lg transform transition duration-300 hover:scale-105 flex items-center">
                <i class="fas fa-chevron-left mr-1"></i>
                Previous
            </button>
            <button onclick="onNext()"
                class="px-2 py-1 bg-gradient-to-r from-green-500 to-green-700 text-white text-xs font-medium rounded-full shadow-lg transform transition duration-300 hover:scale-105 flex items-center">
                Next
                <i class="fas fa-chevron-right ml-1"></i>
            </button>
        </div>


        <!-- Footer Navigasi -->
        <div
            class="flex flex-row justify-between items-center bg-white py-4 px-8 fixed bottom-0 w-full max-w-sm mx-auto border-t">
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
        <div id="productModal"
            class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white rounded-lg p-4 max-w-xs w-full m-4">
                <div class="flex justify-end">
                    <button onclick="closeModal()" class="text-gray-500 text-xl">&times;</button>
                </div>
                <div class="text-center">
                    <img id="modalImage" src="" alt="Product Image"
                        class="rounded-lg w-full h-48 object-cover mb-3" />
                    <h3 id="modalTitle" class="font-semibold text-base mb-1">Nama Produk</h3>
                    <p id="modalPrice" class="text-gray-700 text-sm mb-2"></p>
                    <p id="modalDescription" class="text-gray-600 text-xs mb-3">Deskripsi produk akan ditampilkan di
                        sini.</p>
                </div>
                <button onclick="closeModal()"
                    class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition duration-200">
                    Beli
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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

        function openModal(product) {
            document.getElementById("modalImage").src = `http://127.0.0.1:1337${product.picture?.url}`;
            document.getElementById("modalTitle").innerText = product.name_product;
            document.getElementById("modalPrice").innerText = `Rp ${product.price?.toLocaleString()}/kg`;
            document.getElementById("modalDescription").innerText = `Stok Barang: 30`;
            document.getElementById("productModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("productModal").classList.add("hidden");
        }


        const parentGrid = document.getElementById('product-list');
        let pages = 1;
        const pageSize = 10;

        function onNext() {
            pages++;
            parentGrid.innerHTML = "";
            getProducts();
        }

        function onPrev() {
            if (pages > 1) {
                pages--;
                parentGrid.innerHTML = "";
                getProducts();
            }
        }


        async function getProducts() {
            const category = document.getElementById('category').value;
            const apiURL =
                `http://127.0.0.1:1337/api/merchant-products?pagination[page]=${pages}&pagination[pageSize]=${pageSize}&populate=*&filters[product][category][$eq]=${category}&sort=product.name_product:asc`;

            try {
                const response = await axios.get(apiURL);
                const data = response.data.data;
                console.log(data);

                parentGrid.innerHTML = ""; // Bersihkan grid sebelum mengisi ulang

                if (data.length === 0) {
                    parentGrid.innerHTML =
                        `<p class="text-gray-500 text-center mt-4">Tidak ada produk yang tersedia.</p>`;
                    return;
                }

                for (const item of data) {
                    const apiURLImage =
                        `http://127.0.0.1:1337/api/products?filters[name_product][$eq]=${item.product.name_product}&populate=*`;
                    const imageResponse = await axios.get(apiURLImage);
                    console.log(imageResponse)
                    const imageData = imageResponse.data.data[0]?.picture?.url || "";
                    // Ambil URL gambar jika ada
                    console.log(imageData, 'data')
                    const imageURL = imageData ? `http://127.0.0.1:1337${imageData}` : "default-image-url.jpg";

                    parentGrid.innerHTML += `
                <div class="bg-[#E9F5E9] rounded-lg p-4 cursor-pointer" onclick="openModal(${JSON.stringify(item).replace(/"/g, '&quot;')})">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg">
                        <img src="${imageURL}" alt="${item.product.name_product}" class="h-32 w-full object-cover rounded-lg" />
                    </div>
                    <div class="mt-2">
                        <p class="font-bold text-sm text-gray-500 font-lato">
                            ${item.product.name_product}
                        </p>
                        <div class="text-[#7A7A7A] text-xs">
                            <p class="font-bold">Rp ${item.price?.toLocaleString()}/kg</p>
                            <p>${item.merchant.merchant_name}</p>
                            <div class="flex items-center">
                                <span>Rating</span>
                                ${Array(5).fill('').map((_, i) => `
                                                                                                                                                                                                                                                                                                            <i class="fas fa-star ${i < 4 ? 'text-yellow-500' : 'text-gray-300'} ml-1"></i>
                                                                                                                                                                                                                                                                                                        `).join('')}
                            </div>
                            <p class="text-xs mt-1">${item.stock}</p>
                        </div>
                    </div>
                </div>
            `;
                }
            } catch (error) {
                console.error('Error fetching products:', error);
            }
        }

        document.getElementById('category').addEventListener('change', getProducts);

        // Panggil fungsi saat halaman pertama kali dimuat
        getProducts();
    </script>
</body>

</html>

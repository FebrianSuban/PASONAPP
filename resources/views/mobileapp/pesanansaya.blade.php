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
<body class="bg-gray-100">
    <div class="max-w-sm mx-auto bg-white min-h-screen relative pb-20">
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
        <div id="historyOrders"></div>
        <!-- <div class="bg-[#EAF9EC] rounded-lg p-4 mx-5 mb-4">
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
        </div> -->
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
</body>

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

        document.addEventListener('DOMContentLoaded', async () => {
            if (!sessionStorage.getItem("user")) {
            // Jika tidak ada, arahkan ke halaman login
            alert("Tolong Login Terlebih Dahulu");
            window.location.href = "/loginmobile";}

            const user = JSON.parse(sessionStorage.getItem("user"));
            const userId = user.documentId;
            console.log(userId, "yg ini");

            async function fetchTransactions() {
                try {
                    const response = await fetch(`http://127.0.0.1:1337/api/transactions?populate=*&filters[user_app][documentId][$eq]=${user.documentId}`);
                    const result = await response.json();
                    console.log(result, "haha");
                    return result.data;
                } catch (error) {
                    console.error("Error fetching transactions:", error);
                    return [];
                }
            }

            async function groupTransactions(transactions) {
                console.log("Grouping transactions", transactions);
                const grouped = transactions.reduce((acc, transaction) => {
                    const idtransaksi = transaction.id_transaction;
                    if (!acc[idtransaksi]) {
                        acc[idtransaksi] = {
                            ...transaction,
                            grand_total: Number(transaction.grand_total)
                        };
                    } else {
                        acc[idtransaksi].grand_total += Number(transaction.grand_total);
                    }
                    return acc;
                }, {});

                return Object.values(grouped);
            }

            async function renderTransactions(transactions) {
                console.log("Rendering transactions", transactions);
                const historyOrdersContainer = document.getElementById("historyOrders");

                historyOrdersContainer.innerHTML = "";
                transactions.forEach(transaction => {
                const status = transaction.status_payment;
                console.log("Transaction status", );
                const orderHtml = ` <div class="bg-[#EAF9EC] rounded-lg p-4 mx-5 mb-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm font-bold text-[#333333]">Pesanan ${transaction.id_transaction}</span>
                        <span class="bg-${status === 'true' ? '[#48BF53]' : '[#FFC957]'} text-white text-xs font-medium py-1 px-2 rounded-full">${status === 'true' ? 'Selesai' : 'Belum Selesai'}</span>
                    </div>
                    <div class="text-xs text-[#666666] mb-2">${transaction.date}</div>
                    <div class="text-xl font-bold text-[#333333] mb-3">Rp. ${transaction.grand_total.toLocaleString()}</div>
                    </div>`
                    historyOrdersContainer.innerHTML += orderHtml; // Menambahkan HTML ke dalam container
            });
            }
            const transactions = await fetchTransactions();
            console.log(transactions, "kenapa");
            // if(transactions ==)
            const groupedTransactions = await groupTransactions(transactions);
            console.log(groupedTransactions, "hasil")
            renderTransactions(groupedTransactions);
        });
   
    </script>
</html>

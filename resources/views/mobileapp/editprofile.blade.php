<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Pason</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>

<body class="font-poppins bg-white overflow-hidden">
    <div class="max-w-sm mx-auto min-h-screen flex flex-col justify-center relative p-5 bg-white rounded-3xl shadow-lg">
        <div class="text-center mb-5">
            <img src="/img/Illustration2 3.png" alt="Pason" class="w-36 mx-auto">
        </div>
        <form id="update-form" class="flex flex-col gap-4" method="POST" action="#">
            @csrf
            <h2 class="text-xl font-semibold text-black text-center mb-2">Edit Profile</h2>

            <div class="flex flex-col text-sm">Nama Lengkap
                <input type="text" id="name" name="name" placeholder="Masukan Nama Lengkap Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Nomor Telepon
                <input type="tel" id="phone" name="phone" placeholder="Masukan Nomor Telepon Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Jenis Kelamin
                <select id="gender" name="gender" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full text-gray-400">
                    <option value="">Pria/Wanita</option>
                    <option value="male">Pria</option>
                    <option value="female">Wanita</option>
                </select>
            </div>

            <div class="flex flex-col text-sm">Tanggal Lahir
                <input type="date" id="date_birth" name="date_birth" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Alamat
                <input type="text" id="address" name="address" placeholder="Masukan Alamat Lengkap Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>


            <div class="flex flex-col mt-6">
                <button id="submit" type="submit"
                    class="bg-gradient-to-r from-[#3BE540] to-[#0FB323] text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-gradient-to-r hover:from-[#0FB323] hover:to-[#3BE540] transition duration-300 w-full">
                    simpan
                </button>
            </div>
            <div class="flex flex-col mt-1">
                <button id="cancel" type="button"
                    class="bg-red-500 text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-red-600 transition duration-300 w-full"
                    onclick="redirectToProfile()">
                    Cancel
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bcryptjs/2.4.3/bcrypt.min.js"></script>

    <script>
        function redirectToProfile() {
            window.location.href = "/profilsaya";
        }
        const userData = JSON.parse(localStorage.getItem('user')); // Ambil data dari localStorage
        // Fungsi untuk menampilkan data dari localStorage ke dalam form
        function populateForm() {

            if (userData) {
                // Isi setiap input dengan data yang diambil
                document.getElementById('name').value = userData.name || "";
                document.getElementById('phone').value = userData.phone || "";
                document.getElementById('gender').value = userData.gender || "";
                document.getElementById('date_birth').value = userData.date_birth || "";
                document.getElementById('address').value = userData.address || "";
            }
        }

        // Fungsi untuk memperbarui data pengguna ke Strapi
        async function updateUserData(event) {
            event.preventDefault(); // Mencegah submit default

            const updatedData = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                gender: document.getElementById('gender').value,
                date_birth: document.getElementById('date_birth').value,
                address: document.getElementById('address').value,
            };

            try {
                const response = await fetch(`http://127.0.0.1:1337/api/userapps/${userData.documentId}`, {
                    method: "PUT", // Gunakan PUT atau PATCH
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        data: updatedData
                    }),
                });
                if (response.ok) {
                    const result = await response.json();
                    // const updatedLocal = {
                    //     documentId: userData.documentId,
                    //     name: document.getElementById('name').value,
                    //     phone: document.getElementById('phone').value,
                    //     gender: document.getElementById('gender').value,
                    //     date_birth: document.getElementById('date_birth').value,
                    //     address: document.getElementById('address').value,
                    //     email: userData.email
                    // };
                    // localStorage.setItem('user', JSON.stringify(updatedLocal));
                    alert("Profil berhasil diperbarui!");

                } else {
                    throw new Error("Gagal memperbarui data pengguna.");
                }


            } catch (error) {
                console.error(error);
                alert("Terjadi kesalahan saat memperbarui profil.");
            }
        }

        // Panggil fungsi populateForm ketika halaman dimuat
        document.addEventListener('DOMContentLoaded', populateForm);

        // Tambahkan event listener untuk tombol submit
        document.getElementById('update-form').addEventListener('submit', updateUserData);
    </script>
</body>

</html>

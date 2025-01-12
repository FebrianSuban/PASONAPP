<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Pason</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="font-poppins bg-white overflow-hidden">
    <div class="max-w-sm mx-auto min-h-screen flex flex-col justify-center relative p-5 bg-white rounded-3xl shadow-lg">
        <div class="text-center mb-5">
            <img src="/img/Illustration2 3.png" alt="Pason" class="w-36 mx-auto">
        </div>
        <form class="flex flex-col gap-4" method="POST" action="#">
            @csrf
            <h2 class="text-xl font-semibold text-black text-center mb-2">Daftar</h2>

            <div class="flex flex-col text-sm">Nama Lengkap
                <input type="text" id="name" name="name" placeholder="Masukan Nama Lengkap Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Email
                <input type="email" id="email" name="email" placeholder="Masukan Email Anda " required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Nomor Telepon
                <input type="tel" id="phone" name="phone" placeholder="Masukan Nomor Telepon Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Alamat
                <input type="text" id="address" name="address" placeholder="Masukan Alamat Lengkap Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>

            <div class="flex flex-col text-sm">Peran
                <select id="role" name="role" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full text-gray-400">
                    <option value="">Pilih Penjual/Pembeli</option>
                    <option value="penjual">Penjual</option>
                    <option value="pembeli">Pembeli</option>
                </select>
            </div>

            <div class="flex flex-col text-sm">Kata Sandi
                <input type="password" id="password" name="password" placeholder="Masukan Kata Sandi Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>
            <div class="flex flex-col mt-6">
            <button id="submit" type="submit" class="bg-gradient-to-r from-[#3BE540] to-[#0FB323] text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-gradient-to-r hover:from-[#0FB323] hover:to-[#3BE540] transition duration-300 w-full">
                Daftar
            </button>
            </div>
        </form>

        <div class="text-center mt-5 text-sm text-black">
            Sudah punya akun? <a href="/loginmobile" class="text-[#3BE540] font-semibold">Silakan masuk</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', async function(event) {
                event.preventDefault();

                // Get form values
                const formData = {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    address: document.getElementById('address').value,
                    role: document.getElementById('role').value,
                    password: document.getElementById('password').value
                };

                // Basic validation
                if (!formData.email || !formData.password || !formData.name || !formData.phone || !formData.address || !formData.role) {
                    alert('Mohon isi semua field yang diperlukan');
                    return;
                }

                // Prepare data for Strapi
                const strapiData = {
                    data: {
                        email: formData.email,
                        password: formData.password,
                        role: formData.role === 'penjual' ? 'seller' : 'client',
                        name: formData.name,
                        date_birth: "2001-02-15",
                        gender: "male",
                        address: formData.address,
                        phone: formData.phone
                    }
                };

                try {
                    // Show loading state
                    const submitButton = document.getElementById('submit');
                    submitButton.textContent = 'Mendaftar...';
                    submitButton.disabled = true;

                    // Send to Strapi
                    const response = await fetch('http://127.0.0.1:1337/api/userapps', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(strapiData)
                    });

                    const result = await response.json();

                    if (response.ok) {
                        alert('Pendaftaran berhasil!');
                        window.location.href = '/loginmobile';
                    } else {
                        throw new Error(result.error?.message || 'Terjadi kesalahan saat mendaftar');
                    }
                } catch (error) {
                    console.error('Registration error:', error);
                    alert(error.message || 'Terjadi kesalahan saat mendaftar');
                } finally {
                    // Reset button state
                    const submitButton = document.getElementById('submit');
                    submitButton.disabled = false;
                    submitButton.textContent = 'Daftar';
                }
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pason</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>

<body class="font-lato bg-white overflow-hidden">
    <div class="max-w-sm mx-auto min-h-screen flex flex-col justify-center relative p-5 bg-white rounded-3xl shadow-lg">
        <div class="text-center mb-5">
            <img src="/img/Illustration2 3.png" alt="Pason" class="w-36 mx-auto">
        </div>
        <form class="flex flex-col gap-4" id="loginForm">
            <h2 class="text-xl font-semibold text-black text-center mb-5">Masuk</h2>
            <div class="flex flex-col text-sm">Email
                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>
            <div class="flex flex-col text-sm">Kata Sandi
                <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>
            <div class="flex flex-col mt-6">
                <button type="submit" id="loginButton"
                    class="bg-gradient-to-r from-[#3BE540] to-[#0FB323] text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-gradient-to-r hover:from-[#0FB323] hover:to-[#3BE540] transition duration-300 w-full">
                    Masuk
                </button>
            </div>
        </form>
        <div class="text-center mt-5 text-sm text-black">
            <a href="/lupakatasandi" class="text-[#3BE540] font-semibold">Lupa kata sandi?</a>
        </div>
        <div class="text-center mt-5 text-sm text-black">
            Belum punya akun? <a href="/daftarmobile" class="text-[#3BE540] font-semibold">Silakan daftar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bcryptjs/2.4.3/bcrypt.min.js"></script>
    <script>
        async function updateUserLoginStatus(userId, isLogin) {
            try {
                const response = await fetch(`http://127.0.0.1:1337/api/userapps/${userId}`, {
                    method: 'PUT', // Bisa juga pakai PATCH
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        data: {
                            is_login: isLogin // Mengupdate status login user
                        }
                    })
                });

                const result = await response.json();
                console.log('Update berhasil:', result);
                return result;
            } catch (error) {
                console.error('Gagal mengupdate data:', error);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
             // Cek apakah user sudah login berdasarkan sessionStorage
                const userData = sessionStorage.getItem('user');
                
                if (userData) {
                    const user = JSON.parse(userData);
                    
                    // Jika ada user dan is_login bernilai true, alihkan ke dashboard
                    if (user.is_login) {
                        alert("Anda Sudah Login")
                        window.location.href = '/dashboardmobile';
                    }
                }

            const loginForm = document.getElementById('loginForm');

            loginForm.addEventListener('submit', async function (event) {
                event.preventDefault();

                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const loginButton = document.getElementById('loginButton');

                // Basic validation
                if (!email || !password) {
                    alert('Mohon isi email dan kata sandi');
                    return;
                }

                try {
                    // Show loading state
                    loginButton.textContent = 'Masuk...';
                    loginButton.disabled = true;

                    // Fetch user data
                    const response = await fetch(`http://127.0.0.1:1337/api/userapps?filters[email][$eq]=${email}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                    });

                    const data = await response.json();
                    console.log(data);

                    // Check if user exists
                    if (data.data.length === 0) {
                        throw new Error('Email tidak terdaftar');
                    }

                    var bcrypt = dcodeIO.bcrypt;

                    const user = data.data[0];
                    const storedHash = user.password;

                    // Compare password using bcrypt
                    bcrypt.compare(password, storedHash, async function (err, isMatch) {
                        if (err) {
                            throw new Error('Terjadi kesalahan saat verifikasi password');
                        }

                        if (isMatch) {
                            // Successful login
                            console.log('Login successful:', user);
                            alert('Login berhasil!');
                            const response = await fetch(`http://127.0.0.1:1337/api/userapps?filters[email][$eq]=${email}`, {
                                method: 'GET',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json'
                                },
                            });

                            // Update status login ke API
                            const update = await updateUserLoginStatus(user.documentId, true);
    
                            // Simpan user ke sessionStorage                           
                            delete update.data.password; // Jangan simpan password
                            const dataLogin = JSON.stringify(update.data);
                            sessionStorage.setItem('user', dataLogin);


                            window.location.href = '/dashboardmobile';
                        } else {
                            alert('Kata sandi salah');
                            throw new Error('Kata sandi salah');
                        }
                    });

                } catch (error) {
                    console.error('Login error:', error);
                    alert(error.message);
                } finally {
                    // Reset button state
                    loginButton.disabled = false;
                    loginButton.textContent = 'Masuk';
                }
            });
        });
    </script>
</body>

</html>
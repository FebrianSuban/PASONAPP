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
                <button type="submit" id="loginButton" class="bg-gradient-to-r from-[#3BE540] to-[#0FB323] text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-gradient-to-r hover:from-[#0FB323] hover:to-[#3BE540] transition duration-300 w-full">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');

            loginForm.addEventListener('submit', async function(event) {
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

                    // Send login request to Strapi
                    const response = await fetch(`http://localhost:1337/api/userapps?filters[email][$eq]=${email}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Store auth data
                        localStorage.setItem('jwt', data.jwt);
                        localStorage.setItem('user', JSON.stringify(data.user));

                        // Successful login
                        console.log('Login successful:', data);
                        alert('Login berhasil!');
                        window.location.href = '/dashboardmobile';
                    } else {
                        // Handle specific error messages
                        let errorMessage = 'Email atau kata sandi salah';

                        if (data.error) {
                            switch (data.error.message) {
                                case 'Invalid identifier or password':
                                    errorMessage = 'Email atau kata sandi tidak valid';
                                    break;
                                case 'User not found':
                                    errorMessage = 'Email tidak terdaftar';
                                    break;
                                default:
                                    errorMessage = data.error.message;
                            }
                        }
                        throw new Error(errorMessage);
                    }
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

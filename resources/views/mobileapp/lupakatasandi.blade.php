<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - Pason</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="font-lato bg-white overflow-hidden">

    <div class="max-w-sm mx-auto min-h-screen flex flex-col justify-center relative p-5 bg-white rounded-3xl shadow-lg">
        <div class="text-center mb-4">
            <img src="/img/Illustration2 3.png" alt="Pason" class="w-36 mx-auto">
        </div>
        <form class="flex flex-col gap-4">
            <h2 class="text-xl font-semibold text-black text-center mb-1">Lupa Kata Sandi?</h2>
            <p class="text-sm text-gray-700 text-center mb-3">Masukkan email Anda</p>
            <div class="flex flex-col text-sm">Email
                <input type="email" id="email" name="email" placeholder="Silakan isi Email Anda" required
                    class="p-3 border-none rounded-xl text-sm bg-[#DFFCD9] shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 py-2 rounded-full text-sm font-normal w-full">
            </div>
            <div class="flex flex-col mt-2">
                <button type="submit" class="bg-gradient-to-r from-[#3BE540] to-[#0FB323] text-white py-2 rounded-full text-base font-semibold cursor-pointer hover:bg-gradient-to-r hover:from-[#0FB323] hover:to-[#3BE540] transition duration-300 w-full">
                    Kirim
                </button>
            </div>
        </form>
        <div class="text-center mt-5 text-sm text-black">
            <a href="/loginmobile" class="text-[#3BE540] font-semibold">Kembali ke halaman login</a>
        </div>
    </div>
</body>
</html>

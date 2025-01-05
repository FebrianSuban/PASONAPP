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
        document.getElementById('submit').addEventListener('click',function (event) {
            event.preventDefault()
            const data={
                "email": "adikamunu@gmail.com",
                "password":"Adikamunu1234",
                "role": "client",
                "name": "adikamunu",
                "date_birth": "2001-02-15",
                "gender": "male",
                "address": "Cicadas",
                "phone": "082299008023"
            }
        fetch('http://127.0.0.1:1337/api/userapps',{
            method:'POST',
            body:JSON.stringify ({
                data

            }),
            headers:{
                "content-type":"application/json"
            }
        }).then(function (respons) {
            return respons.json()
        }).then(function (result) {
            console.log(result)
        }).catch(function (error) {
            console.log(error)
        })
        })
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Data Mahasiswa</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/build/assets/app-qk1y9ceR.css">
</head>
<body class="font-poppins">
    
    <section id="login" class="flex">
        <div class="w-1/2 h-[100vh] bg-gradient-to-r from-[#1A85F9] to-[#29C9FD]"></div>
        <div class="w-1/2 h-[100vh] flex flex-col justify-center items-center">
            <div class="w-full flex justify-center flex-col items-center">
                <h1 class="text-center font-bold text-[28px] text-navy">REGISTER PAGE</h1>
                <p class="w-[450px] text-center font-light mb-[30px]">Masukan email dan password dengan benar untuk melanjutkan tryout!</p>
                <form action="/register" method="POST" class="flex flex-col justify-center">
                    @csrf
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="name" class="font-semibold text-[18px]">Nama Pengguna</label>
                        <input type="text" name="name" id="name" class="border w-[500px] px-5 py-4" placeholder="Masukan nama Anda!">
                    </span>
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="email" class="font-semibold text-[18px]">Email</label>
                        <input type="text" name="email" id="email" class="border w-[500px] px-5 py-4" placeholder="Masukan email Anda!">
                    </span>
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="password" class="font-semibold text-[18px]">Password</label>
                        <input type="password" name="password" id="password" class="border w-[500px] px-5 py-4" placeholder="Masukan password Anda!">
                    </span>
                    <span class="flex flex-col gap-2">
                        <label for="konfirmasi-password" class="font-semibold text-[18px]">Konfirmasi Password</label>
                        <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="border w-[500px] px-5 py-4" placeholder="Masukan password Anda!">
                    </span>
                    <div class="w-full px-[170px] py-[20px] text-center">
                        <p class="text-blue1 font-[500]">Lupa password?</p>
                    </div>
                    <button type="submit" class="bg-blue1 w-[150px] px-4 py-2 font-semibold text-white mx-auto">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
    
    
</body>
</html>

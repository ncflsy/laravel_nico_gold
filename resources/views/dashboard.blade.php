<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Data Mahasiswa</title>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins">
    <header class="py-[20px] bg-light shadow-md">
        <nav class="flex w-full items-center justify-between px-[150px]">
            <h1 class="font-semibold text-[22px]">NICO FLASSY</h1>
            <ul class="flex gap-7 items-center text-black1 font-regular text-[17px]">
                <li class=" hover:text-blue1 cursor-pointer">Beranda</li>
                <li class=" hover:text-blue1 cursor-pointer">Tambah Data</li>
                <li class=" hover:text-blue1 cursor-pointer">Github</li>
                <li class="px-6 py-2 bg-[#2A305C] text-white cursor-pointer">Login</li>
            </ul>
        </nav>
    </header>
    <body>
        <section class="px-[150px] flex flex-col justify-center items-center w-full h-[100dvh]">
            <h1 class="mb-[50px] font-semibold text-[28px]">DATA MAHASISWA</h1>
            <div class="w-full px-[150px] mb-[10px] flex justify-end gap-2">
                <a href="" class="flex items-center gap-2 bg-green-700 px-4 py-2 text-white text-[18px]"><x-ri-add-circle-fill class="w-[30px]"/>Tambah Data</a>
            </div>
            <table class="border">
                <thead class="bg-navy text-white font-regular text-center">
                    <tr>
                        <td class="py-[10px] px-[50px] border border-white">No</td>
                        <td class="py-[10px] px-[50px] border border-white">NIM</td>
                        <td class="py-[10px] px-[50px] border border-white">Nama Mahasiswa</td>
                        <td class="py-[10px] px-[50px] border border-white">Progam Studi</td>
                        <td class="py-[10px] px-[50px] border border-white">Angkatan</td>
                        <td class="py-[10px] px-[50px] border border-white">Aksi</td>
                    </tr>
                </thead>
                <tbody class="text-center text-slate-600">
                    @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td class="py-[10px] px-[50px] border">{{ $i+1 }}</td>
                        <td class="py-[10px] px-[50px] border">E41221712</td>
                        <td class="py-[10px] px-[50px] border">Nama Mahasiswa</td>
                        <td class="py-[10px] px-[50px] border">Progam Studi</td>
                        <td class="py-[10px] px-[50px] border">Jurusan</td>
                        <td class="py-[10px] px-[50px] border flex gap-2">
                            <a href="" class="bg-blue-800 p-2 rounded-full"><x-feathericon-edit class="w-[18px] h-[18px] text-white"/></a>
                            <a href="" class="bg-red-800 p-2 rounded-full"><x-gmdi-delete class="w-[18px] h-[18px] text-white"/></a>
                        </td>
                    </tr>  
                    @endfor
                </tbody>
            </table>
        </section>
    </body>
</body>
</html>
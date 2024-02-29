<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Data Mahasiswa</title>
    <link rel="stylesheet" href="/build/assets/app-qk1y9ceR.css">
</head>
<body class="font-poppins">
    @include('navbar')
    <main >
        <section class="px-[150px] flex flex-col justify-center items-center w-full py-[150px]">
            <h1 class="mb-[50px] font-semibold text-[28px]">DATA MAHASISWA</h1>
            <div class="w-full px-[150px] mb-[10px] flex justify-end gap-2">
                <a href="/tambah" class="flex items-center gap-2 bg-green-700 px-4 py-2 text-white text-[18px]"><x-ri-add-circle-fill class="w-[30px]"/>Tambah Data</a>
            </div>
            <table class="border">
                <thead class="bg-blue-900 text-white font-regular text-center">
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
                    @foreach ($daftarmahasiswa as $mahasiswa)
                    <tr>
                        <td class="py-[10px] px-[50px] border">{{ $mahasiswa->id }}</td>
                        <td class="py-[10px] px-[50px] border">{{ $mahasiswa->nim }}</td>
                        <td class="py-[10px] px-[50px] border">{{ $mahasiswa->nama }}</td>
                        <td class="py-[10px] px-[50px] border">{{ $mahasiswa->prodi }}</td>
                        <td class="py-[10px] px-[50px] border">{{ $mahasiswa->angkatan }}</td>
                        <td class="py-[10px] px-[50px] border flex gap-2">
                            <a href="/edit/{{ $mahasiswa->id }}" class="bg-blue-800 p-2 rounded-full"><x-feathericon-edit class="w-[18px] h-[18px] text-white"/></a>
                            <form action="/delete/{{ $mahasiswa->id }}" method="post" class="flex">
                                @csrf
                                <button type="submit" class="bg-red-800 p-2 rounded-full"><x-gmdi-delete class="w-[18px] h-[18px] text-white"/></button>
                            </form>
                        </td>
                    </tr>  
                        
                    @endforeach
                </tbody>
            </table>
        </section>
    </body>

    <script src="/build/assets/app.js"></script>
</body>
</html>
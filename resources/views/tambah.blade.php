<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Data Mahasiswa</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-poppins">
    
    <main class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Form Input Data Mahasiswa</h1>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="nim" class="block text-gray-700 font-semibold mb-2">NIM:</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="prodi" class="block text-gray-700 font-semibold mb-2">Prodi:</label>
                    <input type="text" id="prodi" name="prodi" placeholder="Masukkan program studi" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="angkatan" class="block text-gray-700 font-semibold mb-2">Angkatan:</label>
                    <input type="text" id="angkatan" name="angkatan" placeholder="Masukkan angkatan" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Tambah</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

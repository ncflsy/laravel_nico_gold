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
            <table class="border">
                <thead class="bg-blue-900 text-white font-regular text-center">
                    <tr>
                        <td class="py-[10px] px-[50px] border border-white">No</td>
                        <td class="py-[10px] px-[50px] border border-white">NIM</td>
                        <td class="py-[10px] px-[50px] border border-white">Nama Mahasiswa</td>
                        <td class="py-[10px] px-[50px] border border-white">Progam Studi</td>
                        <td class="py-[10px] px-[50px] border border-white">Angkatan</td>
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
                    </tr>  
                        
                    @endforeach
                </tbody>
            </table>
        </section>
    </body>

    <script src="/build/assets/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Sembunyikan dropdown saat halaman dimuat
                $('#dropdown-menu').hide();
    
                // Tambahkan event listener untuk klik pada tombol dropdown
                $('#dropdown-toggle').click(function() {
                    // Periksa apakah dropdown sedang tersembunyi
                    var isHidden = $('#dropdown-menu').is(':hidden');
    
                    // Jika tersembunyi, tampilkan dropdown; jika tidak tersembunyi, sembunyikan dropdown
                    if (isHidden) {
                        $('#dropdown-menu').show();
                        $(this).attr('aria-expanded', 'true');
                    } else {
                        $('#dropdown-menu').hide();
                        $(this).attr('aria-expanded', 'false');
                    }
                });
    
                // Tambahkan event listener untuk klik di luar dropdown menu
                $(document).click(function(event) {
                    if (!$(event.target).closest('#dropdown-menu, #dropdown-toggle').length) {
                        $('#dropdown-menu').hide();
                        $('#dropdown-toggle').attr('aria-expanded', 'false');
                    }
                });
            });
        </script>
</body>
</html>
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Nico Flassy',
            'nim' => 'E41221712',
            'prodi' => 'Teknik Informatika',
            'angkatan' => '2022',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Petrus Soharto',
            'nim' => 'E41209898',
            'prodi' => 'Teknik Informatika',
            'angkatan' => '2003',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'J. Nasution',
            'nim' => 'E41109879',
            'prodi' => 'Ilmu Hukum',
            'angkatan' => '2003',
        ]);
        
        DB::table('mahasiswa')->insert([
            'nama' => 'Budiman Sujadmiko',
            'nim' => 'E41212020',
            'prodi' => 'Manajemen Informatika',
            'angkatan' => '2021',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Munir Said Talib',
            'nim' => 'E41211212',
            'prodi' => 'Teknik Komputer',
            'angkatan' => '1998',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'Yusril Irza Mahendra',
            'nim' => 'E41209898',
            'prodi' => 'Ilmu Politik',
            'angkatan' => '2003',
        ]);

        
    }
}
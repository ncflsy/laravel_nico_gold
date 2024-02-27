<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('dashboard', [
            'daftarmahasiswa' => Mahasiswa::all()
        ]);
    }

    public function tambahData(){
        return view('tambah');
    }

    public function edit($id){
         
    }

    public function store(Request $request){
         $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|integer|min:1900|max:'.(date('Y')+1), 
        ]);

        Mahasiswa::create([
            'nama' => $validatedData['nama'],
            'nim' => $validatedData['nim'],
            'prodi' => $validatedData['prodi'],
            'angkatan' => $validatedData['angkatan'],
        ]);

        return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil disimpan!');
    }
    
}
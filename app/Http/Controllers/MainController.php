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
        return view('dashboard');
    }

    public function edit($id){
         
    }
}
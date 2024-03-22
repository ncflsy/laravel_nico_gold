<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $userRole = Auth::user()->role;

            if ($userRole === 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($userRole === 'user') {
                return redirect('/user/dashboard');
            } else {
                return redirect('/login');
            }
        }else{
            return back()->withErrors([
                'email' => 'Data wajib diisi',
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function getRegister(){
        return view('register');
    }

    public function register(Request $request){
        if ($request) {
           if($request->password === $request->konfirmasi_password){
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => 'user',
                ]);
                return redirect('/login');
           }else{
                dd('password tidak sama');
           }
        }else{
            return back()->withErrors([
                'email' => 'Data wajib diisi',
            ]);
        }
    }
}
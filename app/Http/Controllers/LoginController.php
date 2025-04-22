<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        $user = User::where('email', $validatedData['email'])->first();
    
        if ($user && Hash::check($validatedData['password'], $user->password)) {
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Selamat Datang!');
        }
    
        return back()->withErrors([
            'email' => 'Data yang dimasukkan tidak ditemukan',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }
}
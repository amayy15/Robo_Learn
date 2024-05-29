<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view("register");
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Check if email already exists
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah ada.']);
        }

        // Check if username already exists
        $existingUsername = User::where('name', $request->name)->first();
        if ($existingUsername) {
            return redirect()->back()->withInput()->withErrors(['name' => 'Username sudah ada.']);
        }

        // Create new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page after successful registration
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
}

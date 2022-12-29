<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth/register.index', [
            'title' => 'Halaman Daftar'
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:posts|max:255',
            'password' => 'required',
        ]);

        dd($validated);
    }
}

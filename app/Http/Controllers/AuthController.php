<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth/login.index', [
            'title' => 'Halaman Login'
        ]);
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Email atau Password salah!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('auth/register.index', [
            'title' => 'Halaman Daftar'
        ]);
    }

    public function registerProses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ]);
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('check', 'success');
        Session::flash('message', 'Daftar Akun Berhasil!');

        return redirect('login');
    }
}

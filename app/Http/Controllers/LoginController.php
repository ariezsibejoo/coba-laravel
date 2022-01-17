<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    // REQUEST $REQUEST DIBAWAH UDAH KETENTUAN
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            // tambah email:dns jika mau harus @gmail.com
            // 'email' => 'required|email:dns',

            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        // dd('berhasil login');

        return back()->with('loginError', 'login failed!');
    }
    // tanpa request $request
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}

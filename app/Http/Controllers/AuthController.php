<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAksi(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $user = Auth::user();
        if ($user->level === 'Admin') {
            return redirect()->route('dashboard');
        } elseif ($user->level === 'Kasir') {
            return redirect()->route('pembelian');
        }
        // Jika autentikasi gagal
        $request->session()->regenerate();
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('login');
    }
}

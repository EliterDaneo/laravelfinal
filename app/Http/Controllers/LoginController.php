<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->intended('home');
        }
        return view('login.view_login');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!'
            ]
        );
        $kredensial = $request->only('email', 'password');
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user) {
                return redirect()->intended('home');
            }
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Email Anda Salah!!'
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('login.view_register');
    }

    public function proses_register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                'password1' => 'required|same:password'
            ],
            [
                'email.required' => 'Email tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!'
            ]
        );

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 2,
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silahkan login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

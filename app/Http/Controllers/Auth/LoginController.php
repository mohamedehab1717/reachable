<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // لو نجح تسجيل الدخول

            $user = Auth::user(); // هات بيانات اليوزر
            session(['user' => $user]); // خزن بياناته في السيشن

            // شوف اليوزر Admin ولا User
            if ($user->role == 1) {
                // Admin
                return redirect()->route('admin.dashboard');
            } else {
                // User عادي
                return redirect()->route('home');
            }
        }

        // لو فشل
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // خرج اليوزر
        session()->forget('user'); // امسح بياناته من السيشن
        return redirect('/home');
    }
}

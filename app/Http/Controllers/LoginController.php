<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function  index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

      if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('dashboard-admin.index');
            } elseif ($user->role === 'user') {
                return redirect()->route('dashboard-user.index');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['email' => 'Role tidak dikenali.']);
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login.index');

    }

    
}
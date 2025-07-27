<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        if (Auth::user()->role === 'admin') {
            return view('dashboard-admin.profile.index');
        }
        return view('dashboard-user.profile.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_phone = $request->no_phone;

        $user->save();

        if ($user->role === 'admin') {
            return redirect()->route('profile.index');
        } else {
            return redirect()->route('profile-user.index');
        }
    }
}

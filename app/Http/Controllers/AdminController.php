<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::get()->count();
        $totalPengunjung = Transaction::get()->count();
        $totalTransaksi = Transaction::select('amount')->sum('amount');

        return view('dashboard-admin.index',
            compact('totalUsers', 'totalPengunjung', 'totalTransaksi')
        );
    }
}

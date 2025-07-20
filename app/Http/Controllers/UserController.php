<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        return view('dashboard-user.index', compact('transactions')); // Make sure this view exists
    }
}

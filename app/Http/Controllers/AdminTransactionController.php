<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::query();

        if ($request->filled('date')) {
            $query->whereDate('date_transaction', $request->date);
        }

        if ($request->filled('month')) {
            $month = Carbon::parse($request->month);
            $query->whereMonth('date_transaction', $month->month)
                ->whereYear('date_transaction', $month->year);
        }

        $transactions = $query->latest()->get();

        return view('dashboard-admin.transactions.index', [
            'transactions' => $transactions
        ]);
    }

    public function edit(Transaction $transaction)
    {
        return view('dashboard-admin.transactions.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return redirect()->route('transactions.index');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }

    public function printReport(Request $request)
    {
        $query = Transaction::query();

        if ($request->filled('date')) {
            $query->whereDate('date_transaction', $request->date);
        }

        if ($request->filled('month')) {
            $month = Carbon::parse($request->month);
            $query->whereMonth('date_transaction', $month->month)
                ->whereYear('date_transaction', $month->year);
        }

        $transactions = $query->latest()->get();

        return view('dashboard-admin.transactions.print', compact('transactions'));
    }
}

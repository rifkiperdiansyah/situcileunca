<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Tiket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Midtrans\Snap;
use Midtrans\Config;


class TransactionController extends Controller

{

    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    function  index(){
        return view('transaction.index',[
            'title' => 'Transaction'
        ]);
}


    public function createTransaction(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'ticket_count' => 'required|numeric',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'ticket_type' => 'required'
            ]);

            if ($request->ticket_type === 'rombongan' && $request->ticket_count < 10) {
                return back()->with('error', 'Jumlah tiket untuk rombongan minimal 10.');
            }

            $total = $request->ticket_count * 15000;

            if ($request->ticket_type == 'rombongan') {
                $total = $total - ($total * 0.05);
            }

            $params = [
                'transaction_details' => [
                    'order_id' => uniqid(),
                    'gross_amount' => $total,
                ],
                'customer_details' => [
                    'first_name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone
                ]
            ];

            $transaction = Transaction::create([
                'user_id' => Auth::user()->id ?? null,
                // 'tiket_id' => 1,
                'name_customer' => $request->name ?? null,
                'no_phone' => $request->phone ?? null,
                'date_transaction' => $request->date ?? null,
                'amount' => $total ?? null,
                'data_payment' => json_encode($params)
            ]);

            $snapToken = Snap::getSnapToken($params);

            DB::commit();

            return view('transaction.payment', compact('snapToken'));
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function print(Transaction $transaction)
    {
        return view('dashboard-user.print.index', compact('transaction'));
    }
}
